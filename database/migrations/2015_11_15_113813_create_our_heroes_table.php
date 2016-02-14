<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOurHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_heroes', function (Blueprint $table) {
            $table->increments('id');
            $table->text('starski');
            $table->text('fleur');
            $table->text('grenville');
            $table->text('jette');
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
        Schema::drop('our_heroes');
    }
}
