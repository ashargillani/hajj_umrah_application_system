<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsForeinkeysPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->boolean('visa');
            $table->boolean('draft');
            $table->boolean('food');
            $table->boolean('qurbani');
            $table->boolean('transfers');
            $table->boolean('ziyaarah');
            $table->unsignedInteger('hotelId');
            $table->unsignedInteger('providerId');
            $table->foreign('hotelId')->references('id')->on('package_hotels');
            $table->foreign('providerId')->references('id')->on('providers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
