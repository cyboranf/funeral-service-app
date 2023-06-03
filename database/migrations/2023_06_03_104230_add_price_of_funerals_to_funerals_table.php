<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceOfFuneralsToFuneralsTable extends Migration
{
    public function up()
    {
        Schema::table('funerals', function (Blueprint $table) {
            $table->decimal('priceOfFunerals', 8, 2);
        });
    }

    public function down()
    {
        Schema::table('funerals', function (Blueprint $table) {
            $table->dropColumn('priceOfFunerals');
        });
    }
}
