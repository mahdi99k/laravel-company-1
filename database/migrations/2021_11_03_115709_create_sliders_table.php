<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidersTable extends Migration
{
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('caption');
            $table->string('image');
            $table->string('alt', 100);
            $table->string('link', 150);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sliders');  // if exist column sliders go drop or delete
    }
}
