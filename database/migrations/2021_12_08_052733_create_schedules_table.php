<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teacher_id')->constrained('users');
            $table->integer('mon_start');
            $table->integer('mon_end');
            $table->integer('tue_start');
            $table->integer('tue_end');
            $table->integer('wed_start');
            $table->integer('wed_end');
            $table->integer('thu_start');
            $table->integer('thu_end');
            $table->integer('fri_start');
            $table->integer('fri_end');
            $table->integer('sat_start');
            $table->integer('sat_end');
            $table->integer('sun_start');
            $table->integer('sun_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
