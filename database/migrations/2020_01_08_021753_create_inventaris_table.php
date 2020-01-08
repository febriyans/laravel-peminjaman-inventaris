<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->bigIncrements('id_inventaris');
            $table->string('nama');
            $table->string('kondisi');
            $table->text('keterangan');
            $table->integer('jumlah');
            $table->text('id_jenis');
            $table->date('tanggal_register');
            $table->text('id_ruang');
            $table->text('kode_inventaris');
            $table->text('id_petugas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inventaris');
    }
}
