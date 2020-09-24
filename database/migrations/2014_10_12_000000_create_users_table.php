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
            $table->string('email')->unique();
            $table->string('nim')->unique();
            $table->enum('jurusan',['sistem informasi','teknik informatika']);
            $table->boolean('status_verifikasi')->default(false);
            $table->enum('roles',['mahasiswa','admin'])->default('mahasiswa');
            $table->string('password');
            $table->text('bukti_ktm');
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
