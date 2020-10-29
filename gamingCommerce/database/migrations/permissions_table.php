<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function(Blueprint $table) {
            $table->engine = 'INNODB,CHARACTER';

            $table->increments('idPerm');
            $table->string('perName', 255)->default(null);
            $table->integer('perRolNumber')->default(null);

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
        Schema::drop('permissions');

    }
}
