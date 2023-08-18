<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableNames = config('menu.table_names');

        Schema::create($tableNames['menus'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('link');
            $table->string('name');
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
        $tableNames = config('menu.table_names');
        Schema::dropIfExists($tableNames['menus']);
    }
}