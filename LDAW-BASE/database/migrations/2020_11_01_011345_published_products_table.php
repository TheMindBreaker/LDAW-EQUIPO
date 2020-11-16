<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PublishedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('published_products', function (Blueprint $table) {
            $table->bigIncrements('idPub');
            $table->integer('pubCreator')->unsigned();;
            $table->dateTime('pubDate')->useCurrent();
            $table->integer('pubTitle')->unsigned();;
            $table->integer('pubConsole')->unsigned();;
            $table->integer('pubConditions')->unsigned();;
            $table->integer('pubActive')->default(0);
            $table->integer('pubSold')->default(0);



            //////foreign relations
            $table->foreign('pubCreator')->references('id')->on('users');
            $table->foreign('pubTitle')->references('idTitle')->on('title_catalog');
            $table->foreign('pubConsole')->references('idConsole')->on('consoles');
            $table->foreign('pubConditions')->references('idCond')->on('conditions');
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
        Schema::dropIfExists('published_products');

    }
}
