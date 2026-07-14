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
        Schema::create('cities', function (Blueprint $table) {
        $table->id(); // Şehir ID (Otomatik artan)
        $table->string('name'); // Şehir adı (Örn: İstanbul)
        $table->string('country'); // Ülke kodu (Örn: TR)
        $table->decimal('latitude', 10, 8)->nullable(); // Enlem (API için)
        $table->decimal('longitude', 11, 8)->nullable(); // Boylam (API için)
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
    }
};
