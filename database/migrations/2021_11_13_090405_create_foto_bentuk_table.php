<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoBentukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foto_bentuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('formBentuk_id')->index();
            $table->string('stnk');
            $table->string('bpkb');
            $table->string('ktp');
            $table->string('buku_uji');
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
