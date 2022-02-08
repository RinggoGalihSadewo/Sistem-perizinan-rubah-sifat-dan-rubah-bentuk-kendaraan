<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoSifatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_sifat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formSifat_id')
            ->references('id')->on('form_sifat')
            ->onDelete('cascade');
            $table->string('foto_sebelum');
            $table->string('foto_sesudah');
            // $table->string('stnk');
            // $table->string('bpkb');
            // $table->string('ktp');
            // $table->string('buku_uji');
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
        Schema::dropIfExists('foto_sifat');
    }
}
