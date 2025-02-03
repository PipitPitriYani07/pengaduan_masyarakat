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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id('id_pengaduan');
            $table->string('nik');
            $table->date('tgl_pengaduan');
            $table->string('judul_pengaduan');
            $table->text('isi_pengaduan');
            $table->text('alamat')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status', ['menunggu', 'proses', 'selesai'])->default('pending');
            $table->timestamps();

            // Foreign key untuk nik
            $table->foreign('nik')->references('nik')->on('masyarakat')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduan');
    }
};
