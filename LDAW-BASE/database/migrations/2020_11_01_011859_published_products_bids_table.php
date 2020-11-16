<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PublishedProductsBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //published_products_bids
        Schema::create('published_products_bids', function (Blueprint $table) {
            $table->bigIncrements('idBid');
            $table->dateTime('bidDate')->useCurrent();
            $table->integer('bidPublication')->unsigned();; ////////Publicación original
            $table->integer('bidProduct')->unsigned();; ////// Publicación del que apuesta
            $table->tinyInteger('bidAccepted')->default(0);
            $table->dateTime('bidAnserDate')->default(null);




            //////foreign relations
            $table->foreign('bidPublication')->references('idPub')->on('published_products');
            $table->foreign('bidProduct')->references('idPub')->on('published_products');

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
        Schema::dropIfExists('published_products_bids');

    }
}
