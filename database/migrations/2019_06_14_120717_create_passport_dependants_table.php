<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportDependantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passport_dependants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name', 30)->nullable();
            $table->enum('sex', ['Male', 'Female'])->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('relationship', 20)->nullable();
            $table->unsignedInteger('visaId');
            $table->foreign('visaId')->references('id')->on('visas');

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
        Schema::dropIfExists('passport_dependants');
    }
}
