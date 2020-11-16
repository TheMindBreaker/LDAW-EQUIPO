<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TitleCatalogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('title_catalog_comments', function (Blueprint $table) {
            $table->bigIncrements('idComment');
            $table->integer('comCreator')->unsigned();;
            $table->text('comDescription');
            $table->integer('comLikes');
            $table->integer('comTitle')->unsigned();;



            //////foreign relations
            $table->foreign('comCreator')->references('id')->on('users');
            $table->foreign('comTitle')->references('idTitle')->on('title_catalog');
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
        Schema::dropIfExists('title_catalog_comments');

    }
}
