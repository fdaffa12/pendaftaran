<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nisn',40);
            $table->string('level')->nullable();
            $table->string('email')->unique();
            $table->string('id_registrasi',40);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('photo')->nullable();
            $table->integer('is_verifikasi')->nullable();
            $table->integer('is_lulus')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
