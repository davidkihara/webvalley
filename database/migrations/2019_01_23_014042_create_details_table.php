<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('First_Name');
            $table->string('Last_Name');
            $table->string('Title');
            $table->string('City');
            $table->Text('Short_Bio');
            $table->string('Country');
            $table->string('Your_Website');
            $table->string('Facebook_Profile');
            $table->string('Twitter_Profile');
            $table->string('LinkedIn_Profile');
            $table->string('Date_of_Birth');
            $table->string('Industry');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('details');
    }
}
