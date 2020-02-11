<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		//protected $fillable = [ 'name', 'rest_time', 'notes', tags, active];
        Schema::connection('lifting_db')->create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('rest_time')->nullable();
            $table->string('notes')->nullable();
            $table->string('tags')->nullable();
            $table->string('type')->nullable();
            $table->boolean('active')->default(true);
						
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('lifting_db')->dropIfExists('exercises');
    }
}
