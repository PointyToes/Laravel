<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DataTarian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_tarian', function (Blueprint $table) {
            $table->bigIncrements('id_tarian');
            $table->string('nama_tarian');
            $table->string('foto');
            $table->string('provinsi');
            $table->string('deskripsi');
            $table->string('video');
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
        Schema::dropIfExists('data_tarian');
    }
}
