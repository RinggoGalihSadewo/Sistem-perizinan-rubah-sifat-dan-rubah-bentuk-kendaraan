<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrSifatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qr_sifat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_sifat_id')
            ->references('id')->on('form_sifat')
            ->onDelete('cascade');
            $table->string('no_surat');
            $table->string('qr_valid');
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
        Schema::dropIfExists('qr_sifat');
    }
}
