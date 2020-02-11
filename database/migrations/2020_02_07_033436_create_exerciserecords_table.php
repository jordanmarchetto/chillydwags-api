<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('lifting_db')->create('exercise_records', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
						$table->integer('exercise')->unsigned();
						$table->foreign('exercise')->references('id')->on('exercises')->onDelete('cascade');
            $table->string('reps')->nullable();
            $table->string('weight')->nullable();
            $table->string('distance')->nullable();
            $table->string('unit')->nullable();
            $table->string('notes')->nullable();
						
						//[ 'exercise', 'reps', 'weight', 'distance', 'notes'];
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('lifting_db')->dropIfExists('exercise_records');
    }
}
