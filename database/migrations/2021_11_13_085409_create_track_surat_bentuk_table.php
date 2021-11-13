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
            $table->foreignId('user_id')->index();
            $table->string('kasi');
            $table->string('kabid');
            $table->string('sekretaris');
            $table->string('kepala_dinas');
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
