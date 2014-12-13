<?php namespace Erudite\Game;

use Illuminate\Support\ServiceProvider;
use Evenement\EventEmitter;
use Ratchet\Server\IoServer;

class GameServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
            $this->app->bind("game.emitter", function()
            {
                return new EventEmitter();
            });

            $this->app->bind("game.game", function()
            {
                return new Game(
                    $this->app->make("game.emitter")
                );
            });

            $this->app->bind("game.user", function()
            {
                return new User();
            });

            $this->app->bind("game.command.serve", function()
            {
                return new Command\Serve(
                    $this->app->make("game.game")
                );
            });   

            $this->commands("game.command.serve");
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return [
                    "game.game",
                    "game.command.serve",
                    "game.emitter",
                    "game.server"
                ];
	}

}
