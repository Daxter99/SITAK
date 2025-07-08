<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nim')->unique(); // Nomor Induk Mahasiswa (NIM), harus unik
            $table->string('nama')->nullable(); // Ubah ke 'nama' jika itu yang di migrasi
            $table->string('email')->unique()->nullable(); // Tambah kolom email
            $table->text('alamat')->nullable(); // Kolom alamat dari contoh sebelumnya
            // Kolom baru yang kamu gunakan di seeder
            $table->string('nama_mahasiswa'); // Jika kamu ingin nama kolom ini. Sesuaikan!
            $table->string('no_telp')->nullable();
            $table->string('prodi');
            $table->string('angkatan');
            $table->tinyInteger('status')->default(1); // Menggunakan tinyInteger untuk status (misal: 0=non-aktif, 1=aktif)
            $table->string('judul')->nullable(); // Judul tugas akhir/skripsi
            $table->date('waktu_daftar')->nullable(); // Tipe data DATE untuk tanggal

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
