<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('title');
            $table->string('subtitle');
            $table->text('description');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->string('status');
            $table->unsignedInteger('category_id'); // Relation category
            $table->unsignedInteger('provider_id'); // Relation provider
            $table->unsignedInteger('difficult_id'); // Relation difficult
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
        Schema::dropIfExists('posts');
    }
}
