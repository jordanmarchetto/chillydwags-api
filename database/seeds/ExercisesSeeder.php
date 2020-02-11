<?php

use Illuminate\Database\Seeder;
use \App\Exercise;
use \App\ExerciseRecord;

class ExercisesSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//protected $fillable = [ 'name', 'rest_time', 'notes', tags, active];
		$random = false;
		
		DB::connection('lifting_db')->table('exercises')->delete();
		DB::connection('lifting_db')->table('exercise_records')->delete();
		//Exercise::truncate();
		$faker = \Faker\Factory::create();
		if($random == true){
			for($i = 0; $i<10; $i++){
				Exercise::create([
					'name' => $faker->word,
					'rest_time' => $faker->randomNumber,
					'notes' => $faker->sentence,
					'tags' => $faker->word,
					'type' => $faker->word,
					'active' => true,
				]);
			}
		} else {
			//real data redacted
			Exercise::create(['name' => 'Bench', 'rest_time' => '90', 'notes' => '', 'tags' => '', 'type'=>'weight', 'active' => true ]);
			Exercise::create(['name' => 'Back Squat', 'rest_time' => '120', 'notes' => '', 'tags' => '', 'type'=>'weight', 'active' => true ]);
			Exercise::create(['name' => 'Front Squat', 'rest_time' => '120', 'notes' => '', 'tags' => '', 'type'=>'weight', 'active' => true ]);
			Exercise::create(['name' => 'Deadlift', 'rest_time' => '120', 'notes' => '', 'tags' => '', 'type'=>'weight', 'active' => true ]);
			Exercise::create(['name' => 'Power Clean', 'rest_time' => '90', 'notes' => 'from blocks', 'tags' => '', 'type'=>'weight', 'active' => true ]);
			Exercise::create(['name' => 'Snatch Pull', 'rest_time' => '90', 'notes' => '', 'tags' => '', 'type'=>'weight', 'active' => true ]);
			Exercise::create(['name' => 'Plank', 'rest_time' => '', 'notes' => '', 'tags' => '', 'type'=>'endurance', 'active' => true ]);
			Exercise::create(['name' => 'Row', 'rest_time' => '', 'notes' => '', 'tags' => '', 'type'=>'endurance', 'active' => true ]);
			Exercise::create(['name' => 'Sprint', 'rest_time' => '60', 'notes' => '', 'tags' => '', 'type'=>'endurance', 'active' => true ]);

			//protected $fillable = [ 'exercise', 'reps', 'weight', 'distance', 'notes'];

			$exercise = Exercise::where('name', 'Bench')->first();
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '155', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '155', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '155', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '155', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '155', 'distance' => '', 'notes'=>'']);
			$exercise = Exercise::where('name', 'Back Squat')->first();
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '225', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '225', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '225', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '3', 'weight' => '275', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '3', 'weight' => '275', 'distance' => '', 'notes'=>'']);
			$exercise = Exercise::where('name', 'Front Squat')->first();
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '155', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '155', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '155', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '3', 'weight' => '185', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '3', 'weight' => '185', 'distance' => '', 'notes'=>'']);
			$exercise = Exercise::where('name', 'Deadlift')->first();
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '225', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '5', 'weight' => '275', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '3', 'weight' => '315', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '3', 'weight' => '345', 'distance' => '', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '3', 'weight' => '365', 'distance' => '', 'notes'=>'']);
			$exercise = Exercise::where('name', 'Row')->first();
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '1', 'weight' => '', 'distance' => '1', 'unit'=>'km', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '1', 'weight' => '', 'distance' => '1', 'unit'=>'km', 'notes'=>'']);
			$exercise = Exercise::where('name', 'Sprint')->first();
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '1', 'weight' => '', 'distance' => '100', 'unit'=>'m', 'notes'=>'']);
			ExerciseRecord::create(['exercise' => $exercise->id, 'reps' => '1', 'weight' => '', 'distance' => '100', 'unit'=>'m', 'notes'=>'']);
		}
	}
}

