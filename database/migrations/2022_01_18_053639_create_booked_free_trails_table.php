<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookedFreeTrailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booked_free_trails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('users')->nullable();
            $table->foreignId('teacher_id')->constrained('users')->nullable();
            $table->integer('booked_status')->default(0);
            $table->string('date')->nullable();
            $table->string('time_assigned')->nullable();
            $table->integer('notify')->default(0);
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
        Schema::dropIfExists('booked_free_trails');
    }
}
