<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_leader_details', function (Blueprint $table) {
            $table->id('leader_id');
            $table->foreignId('user_id')->constrained('tb_user', 'user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('whatsapp')->unique();
            $table->string('line')->unique();
            $table->string('github')->nullable();
            $table->date('birth_date');
            $table->string('birth_place');
            $table->boolean('is_binusian');
            $table->string('cv');
            $table->string('flazz_card')->nullable();
            $table->string('id_card')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_leader_details');
    }
};
