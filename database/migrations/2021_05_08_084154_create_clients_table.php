<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('email',191)->unique();
          $table->string('language');
          $table->string('currency');
          $table->string('phone');
          $table->string('mphone');
          $table->string('fax');
          $table->string('address');
          $table->string('city');
          $table->string('zipcode');
          $table->string('state');
          $table->string('country');
          $table->string('website');
          $table->string('skype');
          $table->string('linkedin');
          $table->string('facebook');
          $table->string('twitter');
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
        Schema::dropIfExists('clients');
    }
}
