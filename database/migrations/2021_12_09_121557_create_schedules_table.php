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
            $table->string('level')->nullable();
            $table->integer('mon_start')->default(100)->nullable();
            $table->string('mon_start_val')->default('no time')->nullable();
            $table->integer('mon_end')->default(100)->nullable();
            $table->string('mon_end_val')->default('no time')->nullable();
            $table->integer('tue_start')->default(100)->nullable();
            $table->string('tue_start_val')->default('no time')->nullable();
            $table->integer('tue_end')->default(100)->nullable();
            $table->string('tue_end_val')->default('no time')->nullable();
            $table->integer('wed_start')->default(100)->nullable();
            $table->string('wed_start_val')->default('no time')->nullable();
            $table->integer('wed_end')->default(100)->nullable();
            $table->string('wed_end_val')->default('no time')->nullable();
            $table->integer('thu_start')->default(100)->nullable();
            $table->string('thu_start_val')->default('no time')->nullable();
            $table->integer('thu_end')->default(100)->nullable();
            $table->string('thu_end_val')->default('no time')->nullable();
            $table->integer('fri_start')->default(100)->nullable();
            $table->string('fri_start_val')->default('no time')->nullable();
            $table->integer('fri_end')->default(100)->nullable();
            $table->string('fri_end_val')->default('no time')->nullable();
            $table->integer('sat_start')->default(100)->nullable();
            $table->string('sat_start_val')->default('no time')->nullable();
            $table->integer('sat_end')->default(100)->nullable();
            $table->string('sat_end_val')->default('no time')->nullable();
            $table->integer('sun_start')->default(100)->nullable();
            $table->string('sun_start_val')->default('no time')->nullable();
            $table->integer('sun_end')->default(100)->nullable();
            $table->string('sun_end_val')->default('no time')->nullable();
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
