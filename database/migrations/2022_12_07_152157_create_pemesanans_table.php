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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->increments('id_pemesanan')->unsigned()->index();
            $table->integer('id_menu')->unsigned()->index();
            $table->integer('no_meja')->unsigned()->index();
            $table->integer('jumlah');
            $table->integer('status_pemesanan');
        });
        Schema::table('pemesanans', function ($table) {
            $table->foreign('id_menu')->references('id_menu')->on('menus')->onDelete('cascade');
            $table->foreign('no_meja')->references('no_meja')->on('mejas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemesanans');
    }
};
