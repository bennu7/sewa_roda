<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\Category;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Category::create([
            "nama" => "Motor"
        ]);

        Category::create([
            "nama" => "Mobil"
        ]);

        Produk::factory(10)->create();
    }
}
