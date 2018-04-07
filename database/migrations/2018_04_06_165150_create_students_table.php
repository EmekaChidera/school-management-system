<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('address')->nullable();
            $table->string('nationality');
            $table->string('religion')->nullable();
            $table->string('contact');
            $table->string('blood');
            $table->date('dob');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('state');
            $table->string('country');
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
        Schema::dropIfExists('students');
    }
}
