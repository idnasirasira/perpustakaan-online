<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapeminjamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapeminjam', function (Blueprint $table) {
            $table->id();
            $table->integer('code');
            $table->integer('id_peminjam');
            $table->integer('jumlah_pinjam');
            $table->double('total_harga', 8, 2);
            $table->date('tanggal_kembali');
            $table->date('tanggal_pengembalian')->nullable();
            $table->double('denda', 8, 2);
            $table->double('total_denda', 8, 2);
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
        Schema::dropIfExists('datapeminjam');
    }
}
