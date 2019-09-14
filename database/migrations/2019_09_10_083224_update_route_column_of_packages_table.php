<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRouteColumnOfPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->enum('route',[
                'Makkah>Hajj>Medina',
                'Makkah>Hajj>Jeddah',
                'Medina>Makkah>Hajj>Makkah',
                'Medina>Azeezia>Hajj>Azeezia',
                'Medina>Shisha>Hajj>Shisha',
                'Medina>Makkah>Hajj>Jeddah',
                'Medina>Makkah>Shisha>Hajj>Shisha',
                'Medina>Makkah H1>Makkah H2>Hajj>Makkah H2',
                'Makkah H1>Makkah H2>Hajj>Makkah H2>Medina',
                'Makkah H1>Makkah H2>Hajj>Medina',
                'Makkah H1>Makkah H2>Hajj>Jeddah'
            ])->change();
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
