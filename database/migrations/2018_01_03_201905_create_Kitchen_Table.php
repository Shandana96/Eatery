<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKitchenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kitchen', function (Blueprint $table) {
            //Add deals
            //Add Food Items
            //Menu thingy
            $table->increments('id');
            $table->string('kName');
            //id of User who owns Customer
            //Ktchen Has Menu (Food Items)
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
        Schema::dropIfExists('kitchen');
    }
}
