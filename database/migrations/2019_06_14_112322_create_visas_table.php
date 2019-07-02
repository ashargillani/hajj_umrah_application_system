<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 30)->nullable();
            $table->string('family_name', 30)->nullable();
            $table->string('mother_name', 30)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->date('place_of_birth')->nullable();
            $table->string('previous_nationality', 30)->nullable();
            $table->string('present_nationality', 30)->nullable();
            $table->enum('sex', ['Male', 'Female'])->nullable();
            $table->string('profession', 30)->nullable();
            $table->enum('marital_status', ['Single', 'Married'])->nullable();
            $table->string('religion', 30)->nullable();
            $table->string('permanent_address_UK', 200)->nullable();
            $table->string('telephone_number_UK', 20)->nullable();
            $table->string('passport_number', 20)->nullable();
            $table->string('place_of_issue', 20)->nullable();
            $table->date('date_of_issue')->nullable();
            $table->date('expiry_date')->nullable();
            $table->boolean('dependants')->nullable();
            $table->date('date_of_arrival_saudi_arabia')->nullable();
            $table->string('contact_address_saudi_arabia', 200)->nullable();
            $table->string('airline_name', 50)->nullable();
            $table->string('airline_flight_no', 30)->nullable();
            $table->integer('airline_ticket_no')->nullable();
            $table->string('name_of_mehram', 30)->nullable();
            $table->string('relationship_with_mehram', 20)->nullable();
            $table->string('carer_of_child', 20)->nullable();

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
        Schema::dropIfExists('visas');
    }
}
