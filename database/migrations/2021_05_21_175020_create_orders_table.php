<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('ocode');
            $table->string('otitle');
            $table->string('client');
            $table->string('progress');
            $table->string('assigntp');
            $table->string('servies');
            $table->string('product');
            $table->string('Urgency');
            $table->string('DeliveryDate');
            $table->string('WriterLevel');
            $table->string('Numberofpages');
            $table->string('CostPage');
            $table->string('AcademicLevel');
            $table->string('SubjectArea');
            $table->string('Style');
            $table->string('NumberofSources');
            $table->string('PreferredLanguageStyle');
            $table->string('Description');
            $table->string('Signed');
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
        Schema::dropIfExists('orders');
    }
}
