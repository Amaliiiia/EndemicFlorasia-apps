<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanamans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_tanaman', 50);
            $table->string('kingdom', 50);
            $table->string('subkingdom', 50);
            $table->string('subdivisi', 50);
            $table->string('divisi', 50);
            $table->string('kelas', 50);
            $table->string('subkelas', 50);
            $table->string('ordo', 50);
            $table->string('famili', 50);
            $table->string('genus', 50);
            $table->string('spesies', 50);
            $table->string('daerah_endemis', 500);
            $table->string('karateristik', 3000);
            $table->string('deskripsi', 3000);
            $table->string('gambar');
            $table->foreignId('habitat_id');
            $table->foreignId('ancaman_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanamans');
    }
};
