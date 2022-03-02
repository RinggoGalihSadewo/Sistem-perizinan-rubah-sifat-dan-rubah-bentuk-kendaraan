<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBerkasBentukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berkas_bentuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_bentuk_id')
            ->references('id')->on('form_bentuk')
            ->onDelete('cascade');
            $table->string('foto_depan');
            $table->string('foto_belakang');
            $table->string('foto_kiri');
            $table->string('foto_kanan');
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
        Schema::dropIfExists('foto_bentuk');
    }
}
