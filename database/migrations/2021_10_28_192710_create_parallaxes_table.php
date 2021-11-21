<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParallaxesTable extends Migration
{

    public function up()
    {
        Schema::create('parallaxes', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('titleSize');
            $table->string('titleColor');
            $table->string('body', 500);
            $table->string('bodySize');
            $table->string('bodyColor');
            $table->string('image', 100);
            $table->string('alt' , 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('parallaxes');    // if exist column parallaxes go drop Or delete
    }
}
