<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasSifatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_sifat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_sifat_id')
            ->references('id')->on('form_sifat')
            ->onDelete('cascade');
            $table->string('surat_permohonan');
            $table->string('surat_pernyataan');
            $table->string('fc_stnk');
            $table->string('fc_bpkb');
            $table->string('fc_buku_uji');
            $table->string('foto_empat_sisi_kendaraan');
            $table->string('akte_notaris');
            $table->string('kbli');
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
