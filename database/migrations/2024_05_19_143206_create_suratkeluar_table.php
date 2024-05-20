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
        Schema::create('surat_keluar', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kop');
            $table->foreign('id_kop')->references('id_kop')->on('kepala_surat')->onDelete('cascade');
            $table->date('tanggal');
            $table->string('no_surat', 200);
            $table->string('perihal', 150);
            $table->string('tujuan', 50);
            $table->text('isi_surat');
            $table->unsignedBigInteger('id_tandatangan');
            $table->foreign('id_tandatangan')->references('id')->on('tandatangan')->onDelete('cascade');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratkeluar');
    }
};
