<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('users')->unsigned();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir',255);
            $table->datetime('tanggal_lahir');
            $table->string('agama');
            $table->string('alamat');
            $table->string('asal_sekolah');
            $table->string('nisn',40);
            $table->timestamps();

            $table->foreign('users')->references('id')->on('users')->onEdit('cascade')->onDelete('cascade');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biodata_siswas');
    }
}
