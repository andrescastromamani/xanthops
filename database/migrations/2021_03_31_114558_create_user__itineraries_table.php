<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__itineraries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('created_date_time');
            $table->dateTime('updated_date_time');
            $table->string('name');
            $table->dateTime('date_from');
            $table->dateTime('date_to');
            $table->boolean('is_public');
            $table->unsignedInteger('user_id'); // Relation user
            $table->unsignedInteger('spot_id'); // Relation spot
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
        Schema::dropIfExists('user__itineraries');
    }
}
