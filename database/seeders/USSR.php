<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\User;


class USSR extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        //buat user admin
        User::truncate();
        User::create([
            'id_karyawan'  => '1',
            'level' => 'admin',
            'active'=> '1',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);
        User::create([
            'id_karyawan'  => '25',
            'level' => 'produksi',
            'active'=> '1',
            'email' => 'produksi@admin.com',
            'password' => bcrypt('produksi'),
        ]);
        User::create([
            'id_karyawan'  => '27',
            'level' => 'kasir',
            'active'=> '1',
            'email' => 'kasir@admin.com',
            'password' => bcrypt('kasir'),
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
