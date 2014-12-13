<?php

namespace Erudite\Game\Command;

use Illuminate\Console\Command;
use Erudite\Game\GameInterface;
use Erudite\Game\UserInterface;
use Ratchet\ConnectionInterface;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Serve
extends Command
{
    protected $name        = "game:serve";
    protected $description = "Command description.";
    protected $game;

    protected function getUserName($user)
    {
        $suffix = " (" . $user->getId() . ")";

        if ($name = $user->getName())
        {
            return $name . $suffix;
        }

        return "User" . $suffix;
    }

    public function __construct(GameInterface $game)
    {
        parent::__construct();

        $this->game = $game;

        $open = function(UserInterface $user)
        {
            $name = $this->getUserName($user);
            $this->line("
                <info>" . $name . " connected.</info>
            ");
        };

        $this->game->getEmitter()->on("open", $open);

        $close = function(UserInterface $user)
        {
            $name = $this->getUserName($user);
            $this->line("
                <info>" . $name . " disconnected.</info>
            ");
        };

        $this->game->getEmitter()->on("close", $close);

        $message = function(UserInterface $user, $message)
        {
            $name = $this->getUserName($user);
            $this->line("
                <info>New message from " . $name . ":</info> 
                <comment>" . $message . "</comment>
                <info>.</info>
            ");
        };

        $this->game->getEmitter()->on("message", $message);

        $name = function(UserInterface $user, $message)
        {
            $this->line("
                <info>User changed their name to:</info> 
                <comment>" . $message . "</comment>
                <info>.</info>
            ");
        };

        $this->game->getEmitter()->on("name", $name);

        $error = function(UserInterface $user, $exception)
        {
            $message = $exception->getMessage();

            $this->line("
                <info>User encountered an exception:</info> 
                <comment>" . $message . "</comment>
                <info>.</info>
            ");
        };

        $this->game->getEmitter()->on("error", $error);
    }

    public function fire()
    {
        $port = (integer) $this->option("port");

        if (!$port)
        {
            $port = 7778;
        }

        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    $this->game
                )
            ),
            $port
        );

        $this->line("
            <info>Listening on port</info>
            <comment>" . $port . "</comment>
            <info>.</info>
        ");

        $server->run();
    }

    protected function getOptions()
    {
        return [
            [
                "port",
                null,
                InputOption::VALUE_REQUIRED,
                "Port to listen on.",
                null
            ]
        ];
    }
}

