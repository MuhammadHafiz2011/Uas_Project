<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('buku_id');
            $table->unsignedBigInteger('penyewa_id');
            $table->date('tanggal_penyewaan');
            $table->date('tanggal_pengembalian');
            $table->timestamps();

            $table->foreign('buku_id')->references('id')->on('bukus')->onDelete('cascade');
            $table->foreign('penyewa_id')->references('id')->on('penyewas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
