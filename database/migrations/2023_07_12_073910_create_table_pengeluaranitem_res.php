<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePengeluaranitemRes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pengeluaranitem_res', function (Blueprint $table) {
            $table->integer('id_res')->primary();
            $table->string('nobk_res','10')->nullable();
            $table->string('barangid_res','10')->nullable();
            $table->integer('jumlah_res')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pengeluaranitem_res');
    }
}
