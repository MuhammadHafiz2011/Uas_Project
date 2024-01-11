<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenyewaTable extends Migration
{
    public function up()
    {
        Schema::create('penyewas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email');
            $table->string('telepon');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penyewas');
    }
}
