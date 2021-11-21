<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{

    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {        // table slave    برده
            $table->id();
            $table->string('fullname');
            $table->string('email');
            $table->string('comment' , 1000);
            $table->unsignedBigInteger("news_id");
            $table->foreign('news_id')->on('news')->references('id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');  // if exist column comments go drop or delete
    }
}
