<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consoles', function(Blueprint $table) {
            $table->engine = 'INNODB,AUTO_INCREMENT';

            $table->increments('idConsole');
            $table->string('conName', 255)->default(null);
            $table->string('conBrand', 255)->default(null);

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
        Schema::drop('consoles');

    }
}
