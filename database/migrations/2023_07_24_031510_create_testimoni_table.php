<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniTable extends Migration
{
    public function up()
    {
        Schema::create('testimonis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penyewa_id');
            $table->unsignedBigInteger('buku_id');
            $table->text('testimoni');
            $table->timestamps();

            $table->foreign('penyewa_id')->references('id')->on('penyewas')->onDelete('cascade');
            $table->foreign('buku_id')->references('id')->on('bukus')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('testimonis');
    }
}
