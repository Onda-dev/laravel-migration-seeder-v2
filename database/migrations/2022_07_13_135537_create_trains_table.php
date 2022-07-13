<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
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
            $table->string('company', 100);
            $table->string('station_departure', 100);
            $table->string('station_arrival', 100);
            $table->date('date_departure');
            $table->date('date_arrival');
            $table->time('time_departure');
            $table->time('time_arrival');
            $table->string('code, 10')->unique();
            $table->unsignedTinyInteger('wagon')->defaul(1);
            $table->boolean('on_time')->defaul(true);
            $table->boolean('cancelled')->default(false);
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
}
