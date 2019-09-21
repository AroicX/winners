<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('title', ['Pastor','Elder','Dcn','Dcns','Bro','Sis']);
            // $table->string('title')->enum('Pastor','Elder','Dcn','Dcns','Bro','Sis');
            $table->string('name');
            $table->string('address');
            $table->string('unit')->nullable();
            $table->string('year');
            $table->string('growth')->nullable();
            $table->string('number');
            $table->string('dob');
            $table->string('occupation');
            $table->string('matrial_status');
            $table->string('province');
            $table->string('district');
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
        Schema::dropIfExists('members');
    }
}
