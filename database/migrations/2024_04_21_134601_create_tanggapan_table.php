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
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pengaduan_id');
            $table->unsignedBigInteger('petugas_id');
            $table->date('tgl_tanggapan');
            $table->text('tanggapan');
            $table->timestamps();

            $table->foreign('pengaduan_id')->references('id')->on('pengaduans')->onDelete('cascade');
            $table->foreign('petugas_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tanggapan');
    }
};