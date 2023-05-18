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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->integer('pat_id');
            $table->string('name');;
            $table->string('surname');
            $table->integer('tc_identity')->unique();
            $table->string('birthplace');
            $table->string('birthdate');
            $table->string('tel_num')->unique();;
            $table->string('email')->unique();
            $table->string('password')->unique();
            $table->integer('blood_id');
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
        Schema::dropIfExists('patients');
    }
};
