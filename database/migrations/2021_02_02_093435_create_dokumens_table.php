<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('users')->unsigned();
            $table->text('kartu_keluarga');
            $table->text('akta');
            $table->text('r_kel5_sem1');
            $table->text('r_kel5_sem2');
            $table->text('r_kel6_sem1');
            $table->text('prestasi')->nullable();
            $table->text('kis')->nullable();
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
        Schema::dropIfExists('dokumens');
    }
}
