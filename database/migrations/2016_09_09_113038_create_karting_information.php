<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKartingInformation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karting_informations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('karting_id')->unsigned()->index();
            $table->string('karting_number');
            $table->double('karting_price');
            $table->double('km');
            $table->double('karting_hours');
            $table->date('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('karting_information');
    }
}
