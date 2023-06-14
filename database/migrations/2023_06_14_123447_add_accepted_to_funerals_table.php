<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAcceptedToFuneralsTable extends Migration
{
    public function up()
    {
        Schema::table('funerals', function (Blueprint $table) {
            $table->boolean('accepted')->default(false)->after('price');
        });
    }

    public function down()
    {
        Schema::table('funerals', function (Blueprint $table) {
            $table->dropColumn('accepted');
        });
    }
}
