<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_journeys', function (Blueprint $table) {
            $table->string('lead',191);
            $table->string('mehram',191);
            $table->enum('payment_method',['One off Payment','Deposit and Confirm']);
            $table->boolean('promo_code');
            $table->enum('distance_to_haram',['Yes','Not too far','No']);
            $table->enum('food',['Breakfast Only','Breakfast + Lunch + Dinner', 'No Thanks']);
            $table->boolean('ziyaarah');
            $table->boolean('qurbani');
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
