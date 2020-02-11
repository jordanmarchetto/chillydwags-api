<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('attendance_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('recorded_by')->nullable();
            $table->string('timestamp')->nullable();
            $table->string('notes')->nullable();
            $table->jsonb('attendance')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
	    Schema::dropIfExists('attendance_records');
    }
}
