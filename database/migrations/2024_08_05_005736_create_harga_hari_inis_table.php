<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('harga_hari_inis', function (Blueprint $table) {
            $table->bigIncrements('id_hotel');
            $table->integer('harga');
            $table->integer('available_room');
            $table->date('tanggal');
            $table->unsignedBigInteger('id_kamar');
            $table->foreign('id_kamar')->references('id')->on('kamars');
            $table->timestamps();
        });
        Schema::table('harga_hari_inis', function (Blueprint $table) {
            $table->renameColumn('avalaible_room', 'available_room');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('harga_hari_inis', function (Blueprint $table) {
            $table->renameColumn('available_room', 'avalaible_room');
        });
        Schema::dropIfExists('harga_hari_inis');
    }
};
