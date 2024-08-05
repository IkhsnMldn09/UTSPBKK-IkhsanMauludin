<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamaTandatanganTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('nama_tandatangan')) {
            Schema::create('nama_tandatangan', function (Blueprint $table) {
                $table->increments('id_tandatangan');
                $table->string('nama_tandatgn', 100);
                $table->string('jabatan', 200);
                $table->string('nip', 25);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('nama_tandatangan');
    }
}
