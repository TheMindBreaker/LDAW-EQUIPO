<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishedProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('published_products', function(Blueprint $table) {
            $table->engine = 'INNODB,CHARACTER';

            $table->increments('idPub');
            $table->integer('pubCreator')->default(null);
            $table->dateTime('pubDate')->default(\DB::raw('CURRENT_TIMESTAMP()'));
            $table->integer('pubTitle')->default(0);
            $table->integer('pubConsole')->default(0);
            $table->integer('pubConditions')->default(0);
            $table->boolean('pubActive')->default(0);
		    $table->boolean('pubSold')->default(0);

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
        Schema::drop('published_products');

    }
}
