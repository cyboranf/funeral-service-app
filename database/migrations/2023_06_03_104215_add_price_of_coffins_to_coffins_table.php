<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPriceOfCoffinsToCoffinsTable extends Migration
{
    public function up()
    {
        Schema::table('coffins', function (Blueprint $table) {
            $table->decimal('priceOfCoffins', 8, 2);
        });
    }

    public function down()
    {
        Schema::table('coffins', function (Blueprint $table) {
            $table->dropColumn('priceOfCoffins');
        });
    }
}
