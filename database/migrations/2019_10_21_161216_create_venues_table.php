<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('slug');
            $table->unsignedBigInteger('location_id');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->text('address');
            $table->float('latitude');
            $table->float('longitude');
            $table->text('description')->nullable();
            $table->text('features')->nullable();
            $table->integer('people_minimum');
            $table->integer('people_maximum');
            $table->text('price_per_hour');
            $table->text('main_photo')->nullable();;
            $table->text('gallery')->nullable();
            $table->tinyInteger('is_featured');
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
        Schema::dropIfExists('venues');
    }
}
