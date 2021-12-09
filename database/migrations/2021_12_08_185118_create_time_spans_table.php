<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeSpansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_spans', function (Blueprint $table) {
            $table->id();
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_spans');
    }
}
