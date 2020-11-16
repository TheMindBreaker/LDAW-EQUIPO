<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PublishedProductsAcceptanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('published_products_acceptance', function (Blueprint $table) {
            $table->bigIncrements('idAcc');
            $table->integer('accPub')->unsigned();;
            $table->integer('accTitle')->unsigned();;
            $table->integer('accConsole')->unsigned();;
            $table->integer('accCondition')->unsigned();;




            //////foreign relations
            $table->foreign('accPub')->references('idPub')->on('published_products');
            $table->foreign('accTitle')->references('idTitle')->on('title_catalog');
            $table->foreign('accConsole')->references('idConsole')->on('consoles');
            $table->foreign('accCondition')->references('idCond')->on('conditions');
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
        Schema::dropIfExists('published_products_acceptance');

    }
}
