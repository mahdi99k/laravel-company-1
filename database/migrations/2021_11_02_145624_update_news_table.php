<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->string('keywords', 1000)->after('summary');  // null ok
            $table->string('description', 1000)->after('keywords');
            $table->string('author', 100)->after('description');
        });
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropColumn('keywords');   // if exist column news go drop or delete
            $table->dropColumn('description');
            $table->dropColumn('author');
        });
    }
}
