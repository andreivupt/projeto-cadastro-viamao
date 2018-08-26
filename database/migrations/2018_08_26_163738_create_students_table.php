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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('type', ['M','F']);
            $table->string('name_dad');
            $table->string('name_mom');
            $table->integer('id_address')->unsigend();
            $table->foreign('id_address')->references('idaddress')->on('address')->onDelete('cascade');
            $table->integer('id_historic')->unsigend();
            $table->foreign('id_historic')->references('idhistoric')->on('historic')->onDelete('cascade');
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
