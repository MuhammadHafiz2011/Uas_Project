<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    public function up()
    {
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penulis');
            $table->text('deskripsi');
            $table->unsignedBigInteger('kategori_id');
            $table->boolean('disewa')->default(false);
            $table->timestamps();

            $table->foreign('kategori_id')->references('id')->on('kategoris')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bukus');
    }
}
