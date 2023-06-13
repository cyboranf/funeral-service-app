<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeathDateToFuneralsTable extends Migration
{
    public function up()
    {
        Schema::table('funerals', function (Blueprint $table) {
            $table->date('death_date')->nullable()->after('deceased_age');
        });
    }

    public function down()
    {
        Schema::table('funerals', function (Blueprint $table) {
            $table->dropColumn('death_date');
        });
    }
}
