<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
                $this->call('TopicsTableSeeder');
                $this->call('GamesTableSeeder');
                $this->call('PlayerTableSeeder');
                $this->call('QueriesTableSeeder');
                
	}

}
