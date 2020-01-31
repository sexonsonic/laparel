<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->string('sutradara');
            $table->string('tgl_rilis');
            $table->string('genre');
            $table->string('durasi');
            $table->string('bahassa');
            $table->string('negara');
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
        Schema::dropIfExists('film');
    }
}
