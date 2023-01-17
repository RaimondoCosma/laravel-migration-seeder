<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 100);
            $table->string('departure_station', 100);
            $table->string('arrival_station', 100);
            $table->date('departure_date');
            $table->date('arrival_date');
            $table->timeTz('departure_time');
            $table->timeTz('arrival_time');
            $table->string('train-code');
            $table->unsignedTinyInteger('cabin_numbers');
            $table->boolean('on_schedule');
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('trains');
    }
};
