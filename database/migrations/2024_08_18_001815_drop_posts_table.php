<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('posts');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // In case you want to reverse this migration, you can recreate the table here
        Schema::create('posts', function (Blueprint $table) {
            // Define your columns here
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('content');
            $table->string('image')->nullable();
            $table->integer('category_id');
            $table->timestamps();
        });
    }
}
