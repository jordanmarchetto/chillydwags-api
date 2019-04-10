<?php

use Illuminate\Database\Seeder;
use \App\Player;

class PlayersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//
		$random = false;
		Player::truncate();
		$faker = \Faker\Factory::create();
		if($random == true){

			for($i = 0; $i<10; $i++){
				Player::create([

					'first_name' => $faker->firstName,
					'last_name' => $faker->lastName,
					'nickname' => $faker->lastName,
					'phone' => $faker->phoneNumber,
					'email' => $faker->email,
					'uga_email' => $faker->email,
					'profile_image' => $faker->imageUrl(400, 400, 'cats'),
					'usau_id' => $faker->creditCardNumber,
					'uga_id' => $faker->creditCardNumber,
					'active' => true,
				]);
			}
		} else {

			//real data redacted

		}
	}
}
