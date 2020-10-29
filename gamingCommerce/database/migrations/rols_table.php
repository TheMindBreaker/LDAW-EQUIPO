<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function(Blueprint $table) {
            $table->engine = 'INNODB,CHARACTER';

            $table->integer('idRol')->default(null);
            $table->string('rolName', 255)->default(null);

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
        Schema::drop('rols');

    }
}
