<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishedProductsAcceptanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('published_products_acceptance', function(Blueprint $table) {
            $table->engine = 'INNODB,CHARACTER';

            $table->increments('id');
            $table->integer('accPub')->default(null);
            $table->integer('accTitle')->default(null);
            $table->integer('accConsole')->default(null);
            $table->integer('accCondition')->default(null);

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
        Schema::drop('published_products_acceptance');

    }
}
