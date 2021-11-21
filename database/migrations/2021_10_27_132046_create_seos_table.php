<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeosTable extends Migration
{
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->id();
            $table->string('title' , 100);
            $table->string('keywords' , 500);
            $table->string('description' , 500);
            $table->string('author' , 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('seos');  // if exist column seos go drop or delete
    }
}
