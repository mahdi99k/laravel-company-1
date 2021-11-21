<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{

    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 150);
            $table->string('email', 150);
            $table->string('comment', 1000);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('contacts');  // if exist column contacts go drop or delete
    }
}
