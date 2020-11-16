<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserInterestedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_interested', function (Blueprint $table) {
            $table->bigIncrements('idInt');
            $table->integer('intTitle')->unsigned();;
            $table->integer('intConsole')->unsigned();;
            $table->integer('intUser')->unsigned();;



            //////foreign relations
            $table->foreign('intUser')->references('id')->on('users');
            $table->foreign('intTitle')->references('idTitle')->on('title_catalog');
            $table->foreign('intConsole')->references('idConsole')->on('consoles');
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
        Schema::dropIfExists('user_interested');

    }
}
