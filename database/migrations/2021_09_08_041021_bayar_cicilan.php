<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BayarCicilan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayar_cicilan', function (Blueprint $table) {
            $table->string('kode_cicilan', 20);
            $table->string('kode_kredit',20);
            $table->date('tgl_cicilan');
            $table->float('jml_cicilan');
            $table->integer('cicilan_ke');
            $table->float('cicilan_sisa_ke');
            $table->float('cicilan_sisa_harga');

            $table->primary('kode_cicilan');
            $table->foreign('kode_kredit')->references('kode_kredit')->on('kredit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bayar_cicilan');
    }
}
