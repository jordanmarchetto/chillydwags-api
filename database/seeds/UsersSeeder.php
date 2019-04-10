<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		User::truncate();
		$secret = "a5549a5ad58e6bfed506d839999a6f50dd36dab64fcb466ac5fe43dd0241d0ad";

		$user = new User([
			'name' => "Jordan",
			'email' => "jordan.marchetto@gmail.com",
			'password' => bcrypt($secret),
			'type' => "chillydwags"
		]);
		$user->save();
	}
}
