<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class ModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $merkOptions = ['asus', 'dell', 'apple', 'lenovo'];

        $jenisOptions = ['laptop', 'pc', 'smartphone', 'monitor'];

        return [
            'merk_barang' => $this->faker->randomElement($merkOptions),
            'jenis_barang' => $this->faker->randomElement($jenisOptions),
            'harga_barang' => $this->faker->numberBetween(0, 9999999),
            'jumlah_barang' => $this->faker->numberBetween(0, 20),
            'tanggal_beli_barang' => $this->faker->date('D-M-Y'),
            'masa_garansi_barang' => $this->randomElement($masaOptions),
        ];
    }
}
