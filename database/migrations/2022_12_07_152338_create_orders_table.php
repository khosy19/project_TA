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
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order')->unsigned()->index();
            $table->integer('id_antrian')->unsigned()->index();
            $table->integer('id_karyawan')->unsigned()->index();
            $table->integer('id_pemesanan')->unsigned()->index();
            $table->integer('id_menu')->unsigned()->index();
            $table->integer('subtotal');
            $table->integer('total');
            $table->string('metode_pembayaran');
        });
        Schema::table('orders', function ($table) {
            $table->foreign('id_antrian')->references('id_antrian')->on('antrians')->onDelete('cascade');
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawans')->onDelete('cascade');
            $table->foreign('id_menu')->references('id_menu')->on('menus')->onDelete('cascade');
            $table->foreign('id_pemesanan')->references('id_pemesanan')->on('pemesanans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
