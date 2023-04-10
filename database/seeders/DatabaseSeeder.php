<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Makanan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        Makanan::create([
            'nama' => 'Nasi Goreng', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Matang',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'nasi-goreng.svg'
        ]);

        Makanan::create([
            'nama' => 'Gula', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Matang',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'gula.svg'
        ]);

        Makanan::create([
            'nama' => 'Sirup', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Matang',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'sirup.svg'
        ]);

        Makanan::create([
            'nama' => 'Saus', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Matang',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'saus.svg'
        ]);

        Makanan::create([
            'nama' => 'Roti', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Matang',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'roti.svg'
        ]);

        Makanan::create([
            'nama' => 'Minyak Goreng', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Mentah',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'minyak-goreng.svg'
        ]);

        Makanan::create([
            'nama' => 'Sayur', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Mentah',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'sayur.svg'
        ]);

        Makanan::create([
            'nama' => 'Beras', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Mentah',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'beras.svg'
        ]);

        Makanan::create([
            'nama' => 'Daging Ayam', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Mentah',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'daging-ayam.svg'
        ]);

        Makanan::create([
            'nama' => 'Daging Sapi', 
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'jenis' => 'Makanan Mentah',
            'exp_date' => '2023-12-20',
            'availability' => 'Tersedia',
            'foto' => 'daging-sapi.svg'
        ]);
    }
}
