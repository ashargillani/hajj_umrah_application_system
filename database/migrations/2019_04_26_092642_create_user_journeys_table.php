<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_journeys', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('no_of_people_bool');
            $table->integer('no_of_people')->nullable();
            $table->integer('no_of_adults')->nullable();
            $table->boolean('children_travelling')->nullable();
            $table->enum('children_state',['Toddler', 'Infant' , 'Over5'])->nullable();
            $table->enum('package_class',['Economy', 'Deluxe' , 'Platinum']);
            $table->enum('package_type', ['Shifting', 'Non-Shifting']);
            $table->enum('route',['Makkah/Medina', 'Medina/Makkah']);
            $table->string('selected_route',191)->nullable();
            $table->string('user_experience',191)->nullable();
            $table->enum('total_days',[14, 21, 26, 30]);
            $table->enum('prefferred_budget',[4000, 4500, 5000,6000,7000,8000]);
            $table->enum('wheelchair_access',['YesForMe', 'YesForSomeone' , 'No'])->nullable();
            $table->string('visitTimeline',191)->nullable();
            $table->date('departure_date')->nullable();
            $table->date('arrival_date')->nullable();
            $table->string('travelling_with',191)->nullable();
            $table->boolean('share_room_bool')->nullable();
            $table->integer('share_room')->nullable();
            $table->enum('no_of_rooms', [1, 2, 3, 4, 5]);
            $table->enum('people_in_rooms', [1, 2, 3, 4, 5])->nullable();
            $table->integer('hotel_stars')->nullable();
            $table->enum('flight_type',[1, 2, 3])->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('user_journeys');
    }
}
