<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriestsTable extends Migration
{
    public function up()
    {
        Schema::create('priests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('religion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('priests');
    }
}
