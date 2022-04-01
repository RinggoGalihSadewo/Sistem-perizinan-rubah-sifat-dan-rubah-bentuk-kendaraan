<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackSuratSifatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_surat_sifat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_sifat_id')
            ->references('id')->on('form_sifat')
            ->onDelete('cascade');
            $table->string('staff_angkutan');
            $table->string('tgl_staff');
            $table->string('nama_staff')->default('-');
            $table->string('kasi_angkutan');
            $table->string('tgl_kasi');
            $table->string('nama_kasi')->default('-');
            $table->string('kabid_lla');
            $table->string('tgl_kabid');
            $table->string('nama_kabid')->default('-');
            $table->string('sekretariat');
            $table->string('tgl_sekretariat');
            $table->string('nama_sekretariat')->default('-');
            $table->string('kepala_dinas');
            $table->string('tgl_kepala');
            $table->string('nama_kepala_dinas')->default('-');
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
        Schema::dropIfExists('track_surat_sifat');
    }
}
