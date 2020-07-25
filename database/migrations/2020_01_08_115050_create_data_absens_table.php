<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataAbsensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_absen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('sakit');
            $table->integer('izin');
            $table->integer('alpha');
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
        Schema::dropIfExists('data_absen');
    }
}
