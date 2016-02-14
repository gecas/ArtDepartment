<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterclassFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterclass_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('surname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('birth_date');
            $table->string('company');
            $table->string('address');
            $table->string('city');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('education');
            $table->text('description');
            $table->text('challenge');
            $table->text('features');
            $table->text('heroes');
            $table->text('thought');
            $table->text('topics');
            $table->string('cv_name');
            $table->string('cv_path');
            $table->string('picture_name');
            $table->string('picture_path');
            $table->string('portfolio_name');
            $table->string('portfolio_path');
            $table->string('portfolio_link');
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
       // Schema::drop('masterclass_forms');
    }
}
