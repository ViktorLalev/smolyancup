<?php

use Illuminate\Database\Seeder;
use App\Team;
use App\Player;

class TeamsDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
    	$faker = Faker\Factory::create();
        $team= new Team;
        $team->name=$faker->company;
        $team->slug=$faker->slug; //slug                    
        $team->email=$faker->email; //email                   
        $team->phone=$faker->phoneNumber; //phoneNumber
        $team->save();

        for ($i=0; $i < 10 ; $i++) { 
        	$player=new Player;
       		$player->name= $faker->name('male');
        	$player->team_id=$team->id;

        	$team->players()->save($player);
        }
        
    	}
    	
    }
}
