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
            $table->string('kasi_angkutan');
            $table->string('tgl_kasi');
            $table->string('kabid_lla');
            $table->string('tgl_kabid');
            $table->string('sekretariat');
            $table->string('tgl_sekretariat');
            $table->string('kepala_dinas');
            $table->string('tgl_kepala');
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
