<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodataBapaksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodata_bapaks', function (Blueprint $table) {
          $table->increments('id');
          $table->bigInteger('users')->unsigned();
          $table->string('nik');
          $table->string('nama_bapak');
          $table->string('tempat_lahir',255);
          $table->datetime('tanggal_lahir');
          $table->string('agama');
          $table->string('alamat');
          $table->string('phone');
          $table->string('pekerjaan');
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
        Schema::dropIfExists('biodata_bapaks');
    }
}
