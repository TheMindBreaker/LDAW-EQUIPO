<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishedProductsBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('published_products_bids', function(Blueprint $table) {
            $table->engine = 'INNODB,CHARACTER';

            $table->increments('idBid');
            $table->dateTime('bidDate')->default(\DB::raw('CURRENT_TIMESTAMP()'));
            $table->integer('bidProduct')->default(null);
            $table->boolean('bidAccepted')->default(0);
		    $table->dateTime('bidAnserDate')->default(null);

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
		Schema::drop('published_products_bids');

    }
}
