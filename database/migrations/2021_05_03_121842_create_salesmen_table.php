<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesmen', function (Blueprint $table) {
          $table->increments('id');
          $table->string('fullname');
          $table->string('email',191)->unique();
          $table->string('vat');
          $table->string('language');
          $table->string('curency');
          $table->string('phone');
          $table->string('mphone');
          $table->string('fax');
          $table->string('address');
          $table->string('city');
          $table->string('zipcode');
          $table->string('state');
          $table->string('country');
          $table->string('bank');
          $table->string('swift');
          $table->string('sortcode');
          $table->string('account_holder');
          $table->string('account');
          $table->string('iban');
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
        Schema::dropIfExists('salesmen');
    }
}
