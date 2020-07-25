<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanggunganOrtusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggungan_ortu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('data_siswa_id');
            $table->string('status_rumah');
            $table->integer('tag_kontrakan');
            $table->integer('tag_listrik');
            $table->integer('tag_air');
            $table->integer('tag_total');
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
        Schema::dropIfExists('tanggungan_ortu');
    }
}
