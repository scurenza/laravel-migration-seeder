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
            $table->string('Agency', 20);
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->string('departure_time', 15);
            $table->date('departure_date');
            $table->string('arrival_time', 15);
            $table->integer('train_code')->unsigned();;
            $table->smallInteger('vagons_number')->unsigned()->nullable();
            $table->boolean('in_time');
            $table->boolean('cancelled');
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
