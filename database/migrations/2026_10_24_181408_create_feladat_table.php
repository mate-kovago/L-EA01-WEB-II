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
        Schema::create('feladat', function (Blueprint $table) {
            $table->id();
            $table->foreignId('filmid')->constrained('film')->cascadeOnDelete();
            $table->foreignId('szemelyid')->constrained('szemely')->cascadeOnDelete();
            $table->string('megnevezes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feladat');
    }
};
