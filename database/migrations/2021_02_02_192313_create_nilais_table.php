<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('users')->unsigned();
            $table->integer('n_bing_kel5_sem1')->nullable();
            $table->integer('n_bing_kel5_sem2')->nullable();
            $table->integer('n_bing_kel6_sem1')->nullable();
            $table->integer('n_pai_kel5_sem1')->nullable();
            $table->integer('n_pai_kel5_sem2')->nullable();
            $table->integer('n_pai_kel6_sem1')->nullable();
            $table->integer('n_bind_kel5_sem1')->nullable();
            $table->integer('n_bind_kel5_sem2')->nullable();
            $table->integer('n_bind_kel6_sem1')->nullable();
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
        Schema::dropIfExists('nilais');
    }
}
