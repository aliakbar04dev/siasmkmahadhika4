<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBimbingansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_bimbingan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_siswa');
            $table->string('nm_kelas');
            $table->longText('keluhan');
            $table->longText('respon');
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
        Schema::dropIfExists('data_bimbingan');
    }
}
