<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuneralsTable extends Migration
{
    public function up()
    {
        Schema::create('funerals', function (Blueprint $table) {
            $table->id();
            $table->string('deceased_name');
            $table->integer('deceased_age');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('coffin_id');
            $table->unsignedBigInteger('church_id')->nullable();
            $table->unsignedBigInteger('priest_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('coffin_id')->references('id')->on('coffins');
            $table->foreign('church_id')->references('id')->on('churches')->onDelete('set null');
            $table->foreign('priest_id')->references('id')->on('priests')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('funerals');
    }
}
