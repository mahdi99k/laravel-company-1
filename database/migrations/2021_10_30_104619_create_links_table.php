<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{

    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('name_link' , 150);
            $table->string('url' , 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('links');    // if exist column links go drop Or delete
    }
}
