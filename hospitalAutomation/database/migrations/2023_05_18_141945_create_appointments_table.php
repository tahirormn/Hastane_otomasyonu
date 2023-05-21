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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id('pat_id');
            $table->string('name')->unique();
            $table->string('surname')->unique();
            $table->string('tc_identity')->unique();
            $table->string('department')->unique();//klinik seçimi
            $table->string('appoint_date')->unique();//randevu tarihi
            $table->string('appoint_time')->unique();//randevu saati
            $table->string('tel_num')->unique();
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
        Schema::dropIfExists('appointments');
    }
};
