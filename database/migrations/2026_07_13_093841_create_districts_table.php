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
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->integer('city_plate'); // İlin plaka kodu (Örn: Batman için 72)
            $table->string('name');         // İlçe adı (Örn: Hasankeyf)
            $table->decimal('latitude', 10, 8);  // OpenWeather için enlem
            $table->decimal('longitude', 11, 8); // OpenWeather için boylam
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('districts');
    }
};