<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BeliCash extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beli_cash', function (Blueprint $table) {
            $table->string('kode_cash');
            $table->string('ktp_pembeli', 30);
            $table->string('kode_mobil');
            $table->date('tgl_pembeli');
            $table->integer('cash_bayar');
            $table->primary('kode_cash');
            $table->foreign('ktp_pembeli')->references('ktp_pembeli')->on('pembeli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('beli_cash');
    }
}
