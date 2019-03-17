<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('class',['Economy', 'Deluxe' , 'Platinum']);
            $table->enum('totalDays',[14, 21, 26, 30]);
            $table->enum('route',['Makkah/Medina', 'Medina/Makkah']);
            $table->enum('packageStars', [2, 3, 4, 5, 6]);
            $table->enum('type', ['Shifting', 'Non-Shifting']);
            $table->date('departureDate');
            $table->date('arrivalDate');
            $table->integer('makkahDays');
            $table->integer('medinaDays');
            $table->string('flights', 50);
            $table->enum('packageBeds', [2, 3, 4, 5]);
            $table->float('price');
            $table->float('infantDiscount');
            $table->float('toddlerDiscount');
            $table->float('overFiveDiscount');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
