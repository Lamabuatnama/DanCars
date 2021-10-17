<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class Kredit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kredit', function (Blueprint $table) {
            $table->string('kode_kredit',20);
            $table->string('ktp_pembeli',30);
            $table->string('kode_paket', 20);
            $table->string('kode_mobil', 20);
            $table->date('tgl_kredit');
            $table->string('fotokopi_ktp', 50);
            $table->string('fotokopi_kk', 50);
            $table->string('fotokopi_slip_gaji', 50);

            $table->primary('kode_kredit');
            $table->foreign('ktp_pembeli')->references('ktp_pembeli')->on('pembeli');
            $table->foreign('kode_paket')->references('kode_paket')->on('paket_kredit');
            $table->foreign('kode_mobil')->references('kode_mobil')->on('mobil');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kredit');
    }
}
