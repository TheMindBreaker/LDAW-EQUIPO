<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TitleCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('title_catalog', function (Blueprint $table) {
            $table->bigIncrements('idTitle');
            $table->string('title',200);
            $table->char('titleEdtion',50);
            $table->char('titleVersion',20);
            $table->tinyInteger('titileActive')->default(0);
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
        Schema::dropIfExists('title_catalog');
    }
}
