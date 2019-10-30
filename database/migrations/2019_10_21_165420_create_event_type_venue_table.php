<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTypeVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_type_venue', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('event_type_id');
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');
            $table->foreign('event_type_id')->references('id')->on('event_types')->onDelete('cascade');
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
        Schema::dropIfExists('event_type_venue');
    }
}
