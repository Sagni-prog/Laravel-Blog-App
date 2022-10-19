<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            // $table->integer('article_id')->unsigned()->nullable();
            // $table->integer('replay_id')->unsigned()->nullable();
            $table->morphs('likeable');
            $table->integer('user_id')->unsigned()->nullable();
            $table->boolean('is_liked')->nullable()->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('likes');
    }
};
