<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaketKredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_kredit', function (Blueprint $table) {
            $table->string('kode_paket',20);
            $table->float('harga_paket');
            $table->float('uang_muka');
            $table->integer('pjc');
            $table->float('bunga');
            $table->float('nilai_cicilan');
            $table->primary('kode_paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_kredit');
    }
}
