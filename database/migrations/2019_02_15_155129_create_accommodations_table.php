<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accommodations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('capacity');
            $table->integer('numberOfRooms');
            $table->integer('numberOfBeds');
            $table->string('headerImage');
            $table->integer('wifi');
            $table->integer('parking');
            $table->integer('tv');
            $table->integer('pets');
            $table->integer('furnace');
            $table->integer('centralHeating');
            $table->integer('barbecue');
            $table->integer('type_id');
            $table->integer('contact_id');
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
        Schema::dropIfExists('accommodations');
    }
}
