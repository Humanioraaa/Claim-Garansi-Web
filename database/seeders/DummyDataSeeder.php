<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Create dummy records using the model factory
        Barang::factory()->count(10)->create();

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


