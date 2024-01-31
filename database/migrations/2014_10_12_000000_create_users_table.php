<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('groupname');
            $table->string('password');
            $table->string('leadername');
            $table->string('email')->unique();
            $table->string('wanumber');  
            $table->string('lineid');  
            $table->string('githubid');  
            $table->string('birthplace');  
            $table->date('birthdate');  //date -> tipe data untuk tanggal
            $table->string('cv');
            $table->string('flazz');
            $table->string('nonbinusianid');
            $table->string('profilePicture');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    // id
    // groupname v
    // password v
    // leadername v 
    // email v
    // wanumber v
    // lineid v
    // githubid v
    // birthplace v
    // birthdate v
    // cv v 
    // flazz v
    // nonbinusianid v

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
