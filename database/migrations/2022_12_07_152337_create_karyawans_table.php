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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->increments('id_karyawan')->unsigned()->index();
            $table->integer('id_jabatan')->unsigned()->index();
            $table->string('nama_karyawan');
            $table->string('kelamin');
        });
        Schema::table('karyawans', function ($table) {
            $table->foreign('id_jabatan')->references('id_jabatan')->on('jabatans')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('karyawans', function(Blueprint $table){
            $table->dropForeign(['id_jabatan']);
        });
        Schema::dropIfExists('karyawans');
    }
};
