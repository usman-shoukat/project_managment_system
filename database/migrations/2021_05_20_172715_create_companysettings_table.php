<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanysettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companysettings', function (Blueprint $table) {
            $table->id();
            $table->string('Companyn');
            $table->string('Contact');
            $table->string('Companyadd');
            $table->string('City');
            $table->string('Companye');
            $table->string('Companyp');
            $table->string('Website');
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
        Schema::dropIfExists('companysettings');
    }
}
