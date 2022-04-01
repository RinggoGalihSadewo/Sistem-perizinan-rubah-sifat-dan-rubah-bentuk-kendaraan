<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackSuratBentukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_surat_bentuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_bentuk_id')
            ->references('id')->on('form_bentuk')
            ->onDelete('cascade');
            $table->string('kasi');
            $table->string('tgl_kasi');
            $table->string('nama_kasi')->default('-');
            $table->string('kabid');
            $table->string('tgl_kabid');
            $table->string('nama_kabid')->default('-');
            $table->string('sekretaris');
            $table->string('tgl_sekretaris');
            $table->string('nama_sekretaris')->default('-');
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
        Schema::dropIfExists('track_surat_bentuk');
    }
}
