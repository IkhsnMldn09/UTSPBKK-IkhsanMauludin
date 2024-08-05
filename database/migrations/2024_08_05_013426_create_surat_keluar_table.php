<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratKeluarTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('surat_keluar')) {
            Schema::create('surat_keluar', function (Blueprint $table) {
                $table->increments('id_surat_keluar');
                $table->unsignedInteger('id_kop');
                $table->date('tanggal');
                $table->string('no_surat', 200);
                $table->string('perihal', 150);
                $table->string('tujuan', 50);
                $table->text('isi_surat');
                $table->unsignedInteger('id_tandatangan');
                $table->unsignedInteger('id_user');
                $table->timestamps();

                // Foreign Key Constraints
                $table->foreign('id_kop')->references('id_kop')->on('kepala_surat')->onDelete('cascade');
                $table->foreign('id_tandatangan')->references('id_tandatangan')->on('nama_tandatgn')->onDelete('cascade');
                $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('surat_keluar');
    }
}
 