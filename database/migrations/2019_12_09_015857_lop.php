<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Lop extends Migration
{
    public function up()
    {
        Schema::create('lop', function (Blueprint $table) {
            $table->increments('ma');
            $table->string('ten',50);
        });
    }
    public function down()
    {
            Schema::dropIfExists('lop');
    }
}