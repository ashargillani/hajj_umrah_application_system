<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provider_message_attachments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('filename', 200);
            $table->unsignedInteger('message_id');
            $table->foreign('message_id')->references('id')->on('provider_messages');
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
        Schema::dropIfExists('provider_message_attachments');
    }
}
