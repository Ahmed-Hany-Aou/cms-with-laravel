<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MakeImageNullableInPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
        });
    }
    
    

public function down()
{
    Schema::table('posts', function (Blueprint $table) {
        $table->string('image')->nullable(false)->change();
    });
}

}
