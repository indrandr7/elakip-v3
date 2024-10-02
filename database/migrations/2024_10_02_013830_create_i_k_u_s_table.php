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
        Schema::create('t_iku', function (Blueprint $table) {
            $table->id();
            $table->string('nama_iku');
            $table->string('satuan');
            $table->text('target_iku');
            $table->text('realisasi_iku');
            $table->integer('persentase_iku');
            $table->integer('tahun');
            $table->string('nama_biro');
            $table->string('nama_bagian');
            $table->string('capaian_iku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_iku');
    }
};
