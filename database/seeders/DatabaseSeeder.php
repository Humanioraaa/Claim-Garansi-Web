<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'jemek',
            'email' => 'administrator@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => '3',
        ]);

        DB::table('users')->insert([
            'name' => 'pembeli',
            'email' => 'pembeli@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => '4',
        ]);

        DB::table('users')->insert([
            'name' => 'pembweli',
            'email' => 'pembeli1@gmail.com',
            'password' => Hash::make('password'),
            'id_role' => '4',
        ]);

        DB::table('users')->insert([
            'name' => 'siadmin',
            'email' => 'admingaransi@gmail.com',
            'password' => Hash::make('password'),
            'status' => 'Available',
            'id_role' => '2',
        ]);

        DB::table('users')->insert([
            'name' => 'test',
            'email' => 'admingaransi1@gmail.com',
            'password' => Hash::make('password'),
            'status' => 'Unavailable',
            'id_role' => '2',
        ]);

    }
}
