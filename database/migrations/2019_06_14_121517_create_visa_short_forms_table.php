<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisaShortFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_short_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('no_people_travelling')->nullable();
            $table->string('mehram', 30)->nullable();
            $table->string('family_name', 30)->nullable();
            $table->string('mother_name', 30)->nullable();
            $table->string('previous_nationality', 30)->nullable();
            $table->string('present_nationality', 30)->nullable();
            $table->string('profession', 30)->nullable();
            $table->enum('marital_status', ['Single', 'Married'])->nullable();
            $table->string('religion', 30)->nullable();
            $table->boolean('dependants')->nullable();
            $table->string('telephone_number', 20)->nullable();

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
        Schema::dropIfExists('visa_short_forms');
    }
}
