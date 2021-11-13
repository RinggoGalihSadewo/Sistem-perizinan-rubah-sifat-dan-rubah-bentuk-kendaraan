<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormSifatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_sifat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('nomor_kendaraan');
            $table->string('nomor_pemilik_lama');
            $table->string('nomor_pemilik_baru');
            $table->string('alamat');
            $table->string('merk');
            $table->string('jenis');
            $table->string('model');
            $table->string('warna');
            $table->string('tahun');
            $table->string('isi_silinder');
            $table->string('no_landasan');
            $table->string('no_mesin');
            $table->string('no_bpkb');
            $table->string('keterangan');
            $table->string('masa_berlaku');
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
        Schema::dropIfExists('form_sifat');
    }
}
