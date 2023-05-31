<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoffinsTable extends Migration
{
    public function up()
    {
        Schema::create('coffins', function (Blueprint $table) {
            $table->id();
            $table->string('material');
            $table->string('color');
            $table->string('size');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('coffins');
    }
}
