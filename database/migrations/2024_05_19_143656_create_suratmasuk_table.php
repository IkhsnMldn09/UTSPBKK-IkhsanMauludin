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
        Schema::create('surat_masuk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kop');
            $table->foreign('id_kop')->references('id_kop')->on('kepala_surat')->onDelete('cascade');
            $table->date('tanggal');
            $table->string('no_surat', 50);
            $table->string('asal_surat', 150);
            $table->string('perihal', 150);
            $table->string('disp1', 70);
            $table->string('disp2', 70);
            $table->unsignedBigInteger('id_tandatangan');
            $table->foreign('id_tandatangan')->references('id')->on('tandatangan')->onDelete('cascade');
            $table->string('image', 60);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suratmasuk');
    }
};
