<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugasRes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_petugas_res', function (Blueprint $table) {
            $table->integer('petugasid_res')->primary();
            $table->string('namapetugas_res','35')->nullable();
            $table->string('alamat_res','45')->nullable();
            $table->string('handphone_res','15')->nullable();
            $table->string('password','10')->nullable();
            $table->string('level','20')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_petugas_res');
    }
}
