<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@anb.com',
                'cpf' => '000.000.000-00',
                'password' => bcrypt('12345678'),
            ],
        ]);
        DB::table('empresas')->insert([
            [
                'cnpj' => '00.000.000/0000-00',
                'name' => 'A&B',
            ],
        ]);
    }
}
