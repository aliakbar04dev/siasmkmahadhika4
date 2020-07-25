<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenghasilanOrtusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penghasilan_ortu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data_siswa_id');
            $table->string('kerja_ayah');
            $table->integer('penghasilan_ayah');
            $table->string('kerja_ibu');
            $table->integer('penghasilan_ibu');
            $table->integer('penghasilan_total');
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
        Schema::dropIfExists('penghasilan_ortu');
    }
}
