<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <--- TAMBAHKAN BARIS INI
use Carbon\Carbon;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->insert([
            [
                'id' => '001',
                'nim' => '20103041020',
                'nama' => 'Ade Saputra',
                'email' => '20103041020@student.unwahas.ac.id',
                'alamat' => 'Batang',
                'no_telp' => '0895701120403',
                'prodi' => 'Teknik Informatika',
                'angkatan' => '2020',
                'status' => '1',
                'judul' => 'Kalsifikasi Demam Berdarah Menggunakan Metode Naive Bayes Classifier Untuk Deteksi Dini',
                'waktu_daftar' => Carbon::createFromFormat('d-m-Y', '07-07-2024'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
        $this->command->info('Mahasiswa table seeded!');
    }
}
