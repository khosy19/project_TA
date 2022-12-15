<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_kategori');
        Schema::disableForeignKeyConstraints();
        Kategori::truncate();
        Kategori::create([
            'nama_kategori'              => $faker->nama_kategori,
        ]);
        // Kategori::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
