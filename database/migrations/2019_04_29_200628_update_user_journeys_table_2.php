<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserJourneysTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_journeys', function (Blueprint $table) {
            $table->string('lead',191)->nullable()->change();
            $table->string('mehram',191)->nullable()->change();
            $table->enum('payment_method',['One off Payment','Deposit and Confirm'])->nullable()->change();
            $table->boolean('promo_code')->nullable()->change();
            $table->enum('distance_to_haram',['Yes','Not too far','No'])->nullable()->change();
            $table->enum('food',['Breakfast Only','Breakfast + Lunch + Dinner', 'No Thanks'])->nullable()->change();
            $table->boolean('ziyaarah')->nullable()->change();
            $table->boolean('qurbani')->nullable()->change();
            $table->boolean('no_of_people_bool')->nullable()->change();
            $table->enum('package_class',['Economy', 'Deluxe' , 'Platinum'])->nullable()->change();
            $table->enum('package_type', ['Shifting', 'Non-Shifting'])->nullable()->change();
            $table->enum('route',['Makkah/Medina', 'Medina/Makkah'])->nullable()->change();
            $table->enum('total_days',[14, 21, 26, 30])->nullable()->change();
            $table->enum('prefferred_budget',[4000, 4500, 5000,6000,7000,8000])->nullable()->change();
            $table->enum('no_of_rooms', [1, 2, 3, 4, 5])->nullable()->change();
            $table->unsignedInteger('user_id')->nullable()->change();
            $table->integer('number_of_children_travelling')->nullable();
            $table->json('children_state')->change();
            $table->renameColumn('visitTimeline', 'visit_timeline');
            $table->renameColumn('children_state', 'children_number_and_state');
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
