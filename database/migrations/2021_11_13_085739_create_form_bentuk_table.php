<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormBentukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_bentuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
            $table->string('nomor_kendaraan');
            $table->string('nama_pemilik_lama');
            $table->string('nama_pemilik_baru');
            $table->string('alamat');
            $table->string('merk');
            $table->string('jenis');
            $table->string('warna');
            $table->string('tahun');
            $table->string('volume_silinder');
            $table->string('no_landasan');
            $table->string('no_mesin');
            $table->string('no_bpkb');
            $table->string('no_uji');
            // $table->string('nomor_ujiKendaraan');
            // $table->string('masa_berlaku');
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
        Schema::dropIfExists('form_bentuk');
    }
}
