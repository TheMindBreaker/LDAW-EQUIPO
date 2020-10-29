<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->engine = 'INNODB,CHARACTER';

            $table->increments('id');
            $table->string('userName', 255);
            $table->string('userEmail', 255);
            $table->string('userPassword', 255);
            $table->integer('userRol')->default(0 );

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
		Schema::drop('users');

    }
}
