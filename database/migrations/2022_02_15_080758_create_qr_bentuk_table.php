<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrBentukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qr_bentuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_bentuk_id')
            ->references('id')->on('form_bentuk')
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
        Schema::dropIfExists('qr_bentuk');
    }
}
