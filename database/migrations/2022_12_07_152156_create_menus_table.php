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
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id_menu')->unsigned()->index();
            $table->integer('id_kategori')->unsigned()->index();
            $table->string('nama_menu');
            $table->integer('harga');
            $table->integer('status_menu');
        });
        Schema::table('menus', function ($table) {
            $table->foreign('id_kategori')->references('id_kategori')->on('kategoris')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('menus', function(Blueprint $table){
            $table->dropForeign(['id_kategori']);
        });
        
        Schema::dropIfExists('menus');
    }
};
