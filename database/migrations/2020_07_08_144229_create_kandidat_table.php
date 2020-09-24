<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidat', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim');
            $table->enum('jurusan',['sistem informasi','teknik informatika']);
            $table->text('visi');
            $table->text('misi');
            $table->text('foto');
            $table->enum('jenis_kandidat',['dpm','bem','himti','himsisfo']);
            $table->softDeletes();
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
        Schema::dropIfExists('kandidat');
    }
}
