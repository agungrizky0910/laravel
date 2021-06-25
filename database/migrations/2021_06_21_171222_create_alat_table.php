<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_alat');
            $table->string('merek_type');
            $table->string('range_resolusi');
            $table->integer('no_resi');
            $table->string('pemegang');
            $table->string('dept');
            $table->string('no_registrasi');
            $table->integer('tgl_kalibrasi');
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
        Schema::dropIfExists('alat');
    }
}
