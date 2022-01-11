<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nama" => $this->faker->name(),
            "deskripsi" => $this->faker->paragraph(3, 5),
            "harga" => mt_rand(150000, 175000),
            "category_id" => 2,
            "photo" => "test2.png"
        ];
    }
}
