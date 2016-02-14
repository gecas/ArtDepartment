<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('picture_path');
            $table->string('picture_name');
            $table->string('class_name');
            $table->text('picture_text');

            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('participants_categories')->onDelete('cascade');
            
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
        //Schema::drop('participants');
    }
}
