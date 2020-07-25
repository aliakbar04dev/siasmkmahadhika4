<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataEkskulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ekskul', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nm_ekskul');
            $table->string('ket_ekskul');
            $table->string('data_siswa_id');
            $table->string('data_kelas_id');
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
        Schema::dropIfExists('data_ekskul');
    }
}
