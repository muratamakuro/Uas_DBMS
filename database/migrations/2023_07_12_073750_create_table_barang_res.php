<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarangRes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_barang_res', function (Blueprint $table) {
            $table->string('barangid_res', '10')->primary();
            $table->string('namabarang_res','45')->nullable();
            $table->string('satuan_res','45')->nullable();
            $table->string('harga_res','34')->nullable();
            $table->string('kategoriid','5')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_barang_res');
    }
}
