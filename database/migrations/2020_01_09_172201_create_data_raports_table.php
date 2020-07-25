<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataRaportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_raport', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ulangan_harian');
            $table->integer('tugas');
            $table->integer('uts');
            $table->integer('uas');
            $table->integer('rata');
            $table->string('data_siswa_id');
            $table->string('data_kelas_id');
            $table->string('data_absen_id');
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
        Schema::dropIfExists('data_raport');
    }
}
