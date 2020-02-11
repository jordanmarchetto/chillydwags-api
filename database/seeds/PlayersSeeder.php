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
		$random = true;
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
			Player::create(['first_name' => 'Jesse', 'last_name' => 'Adkins']);
			Player::create(['first_name' => 'Adam', 'last_name' => 'Bell']);
			Player::create(['first_name' => 'Jon', 'last_name' => 'Cooper']);
			Player::create(['first_name' => 'Max', 'last_name' => 'Deckman']);
			Player::create(['first_name' => 'James', 'last_name' => 'Duesnbury']);
			Player::create(['first_name' => 'Max', 'last_name' => 'Dusenbury']);
			Player::create(['first_name' => 'Mitch', 'last_name' => 'Glore']);
			Player::create(['first_name' => 'Luke', 'last_name' => 'Hamilton']);
			Player::create(['first_name' => 'CJ', 'last_name' => 'Hannan']);
			Player::create(['first_name' => 'Matthew', 'last_name' => 'Kurien']);
			Player::create(['first_name' => 'Ben', 'last_name' => 'Lancia']);
			Player::create(['first_name' => 'Nico', 'last_name' => 'Leis']);
			Player::create(['first_name' => 'JP', 'last_name' => 'Miller']);
			Player::create(['first_name' => 'Ted', 'last_name' => 'Moeller']);
			Player::create(['first_name' => 'Chris', 'last_name' => 'Molnar']);
			Player::create(['first_name' => 'Johnathan', 'last_name' => 'Oravic']);
			Player::create(['first_name' => 'Alexander', 'last_name' => 'Pencil']);
			Player::create(['first_name' => 'Leo', 'last_name' => 'Perz']);
			Player::create(['first_name' => 'Greg', 'last_name' => 'Pullen']);
			Player::create(['first_name' => 'Carso', 'last_name' => 'Race']);
			Player::create(['first_name' => 'Grayson', 'last_name' => 'Seelke']);
			Player::create(['first_name' => 'Bryan', 'last_name' => 'Soto']);
			Player::create(['first_name' => 'Ben', 'last_name' => 'Thesing']);
			Player::create(['first_name' => 'Flynn', 'last_name' => 'Vogt']);
			Player::create(['first_name' => 'John', 'last_name' => 'Whitehead']);
			Player::create(['first_name' => 'Luke', 'last_name' => 'Zwicker']);
			Player::create(['first_name' => 'Stephen', 'last_name' => 'Liu ']);



		}
	}
}
