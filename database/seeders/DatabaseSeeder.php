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
            'lokasi' => 'Yogyakarta',
            'jenis' => '2',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '1',
            'availability' => 'Tersedia',
            'foto' => 'nasi-goreng.svg'
        ]);

        Makanan::create([
            'nama' => 'Gula',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Cirebon',
            'jenis' => '2',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '1',
            'availability' => 'Tersedia',
            'foto' => 'gula.svg'
        ]);

        Makanan::create([
            'nama' => 'Sirup',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Bandung',
            'jenis' => '2',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
<<<<<<< HEAD
            'lokasi' => 'Bandung',
=======
            'id_pengunggah' => '1',
>>>>>>> master
            'availability' => 'Tersedia',
            'foto' => 'sirup.svg'
        ]);

        Makanan::create([
            'nama' => 'Saus',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Malang',
            'jenis' => '2',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '1',
            'availability' => 'Tersedia',
            'foto' => 'saus.svg'
        ]);

        Makanan::create([
            'nama' => 'Roti',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Bandung',
            'jenis' => '2',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '1',
            'availability' => 'Tersedia',
            'foto' => 'roti.svg'
        ]);

        Makanan::create([
            'nama' => 'Minyak Goreng',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Tangerang',
            'jenis' => '1',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '2',
            'availability' => 'Tersedia',
            'foto' => 'minyak-goreng.svg'
        ]);

        Makanan::create([
            'nama' => 'Sayur',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Surabaya',
            'jenis' => '1',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '2',
            'availability' => 'Tersedia',
            'foto' => 'sayur.svg'
        ]);

        Makanan::create([
            'nama' => 'Beras',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Semarang',
            'jenis' => '1',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '2',
            'availability' => 'Tersedia',
            'foto' => 'beras.svg'
        ]);

        Makanan::create([
            'nama' => 'Daging Ayam',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Bogor',
            'jenis' => '1',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '2',
            'availability' => 'Tersedia',
            'foto' => 'daging-ayam.svg'
        ]);

        Makanan::create([
            'nama' => 'Daging Sapi',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam aliquam excepturi eius cupiditate ipsum nobis dignissimos eum ratione neque expedita.',
            'lokasi' => 'Bandung',
            'jenis' => '1',
            'merk' => 'Tropical',
            'exp_date' => '2023-12-20',
            'id_pengunggah' => '2',
            'availability' => 'Tersedia',
            'foto' => 'daging-sapi.svg'
        ]);

        $this->call(ResepSeeder::class);
    }


}
