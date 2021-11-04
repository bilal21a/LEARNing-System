<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserBookedScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_booked_schedule', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('booked_schedule_id');

            $table->foreign('student_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('booked_schedule_id')->references('id')->on('booked_schedule')->onDelete('cascade');


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
        Schema::dropIfExists('user_booked_schedule');
    }
}
