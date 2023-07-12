<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBagianRes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bagian_res', function (Blueprint $table) {
            $table->string('bagianid_res', '10')->primary();
            $table->string('namabagian_res','45')->nullable();
            $table->string('kepalabagian_res','45')->nullable();
            $table->string('telp_res','34')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bagian_res');
    }
}
