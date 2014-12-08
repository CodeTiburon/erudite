<?php

class GameController extends BaseController {

	public function index()
	{
            return View::make('game');
	}
        
        /**
         * Returns the list of games
         * @return json
         */
        public function listGames()
	{
            $games = Game::select('id',
                    'title',
                    'creator_id',
                    'status',
                    'max_players_num as playersMax', 
                    'room', 
                    'topics as tags', 
                    'countries as flags', 
                    'started_at as started')->with('players.user','creator')->get();
            
            return  Response::json($games);
	}       
        
}


