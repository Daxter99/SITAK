<?php

namespace Database\Seeders;

use App\Models\Persyaratan;
use Illuminate\Database\Seeder;

class PersyaratanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $persyaratan = ['KRS', 'Transkrip', 'Lunas Keuangan', 'Surat Keterangan Siap Seminar', 'Sertifikat KI', 'Sertifikat Nasional', 'TOEFL', 'Draf Skripsi', 'Publikasi Ilmiah', 'KTP', 'Ijazah'];
        foreach ($persyaratan as $item) {
            Persyaratan::create([
                'nama_persyaratan' => $item,
            ]);
        }
        $this->command->info('Persyaratan table seeded!');
    }
}
