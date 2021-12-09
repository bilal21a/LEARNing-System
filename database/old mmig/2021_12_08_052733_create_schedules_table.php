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
            $table->integer('mon_start')->default(100)->nullable();
            $table->integer('mon_end')->default(100)->nullable();
            $table->integer('tue_start')->default(100)->nullable();
            $table->integer('tue_end')->default(100)->nullable();
            $table->integer('wed_start')->default(100)->nullable();
            $table->integer('wed_end')->default(100)->nullable();
            $table->integer('thu_start')->default(100)->nullable();
            $table->integer('thu_end')->default(100)->nullable();
            $table->integer('fri_start')->default(100)->nullable();
            $table->integer('fri_end')->default(100)->nullable();
            $table->integer('sat_start')->default(100)->nullable();
            $table->integer('sat_end')->default(100)->nullable();
            $table->integer('sun_start')->default(100)->nullable();
            $table->integer('sun_end')->default(100)->nullable();
            $table->timestamps();

            $table->foreign('mon_start')->references('id')->on('hrs_times');
            $table->foreign('mon_end')->references('id')->on('hrs_times');
            $table->foreign('tue_start')->references('id')->on('hrs_times');
            $table->foreign('tue_end')->references('id')->on('hrs_times');
            $table->foreign('wed_start')->references('id')->on('hrs_times');
            $table->foreign('wed_end')->references('id')->on('hrs_times');
            $table->foreign('thu_start')->references('id')->on('hrs_times');
            $table->foreign('thu_end')->references('id')->on('hrs_times');
            $table->foreign('fri_start')->references('id')->on('hrs_times');
            $table->foreign('fri_end')->references('id')->on('hrs_times');
            $table->foreign('sat_start')->references('id')->on('hrs_times');
            $table->foreign('sat_end')->references('id')->on('hrs_times');
            $table->foreign('sun_start')->references('id')->on('hrs_times');
            $table->foreign('sun_end')->references('id')->on('hrs_times');
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
