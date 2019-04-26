<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('title',['Mr', 'Miss', 'Mrs', 'Dr']);
            $table->string('first_name',191);
            $table->string('last_name',191);
            $table->date('dob');
            $table->string('address',191);
            $table->enum('relationship_status',['Single', 'Married', 'Divorced', 'Widowed']);
            $table->string('post_code',191);
            $table->string('ethnicity',191);
            $table->string('passport',191);
            $table->boolean('valid_passport');
            $table->boolean('health_conditions_bool');
            $table->string('health_conditions',191);
            $table->boolean('require_assistance');
            $table->boolean('visited_saudi');
            $table->boolean('additional_passenger');
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
        Schema::dropIfExists('user_details');
    }
}
