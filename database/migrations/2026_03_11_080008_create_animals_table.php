<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('animaux', function (Blueprint $table) {
            $table->id();
            $table->string('nom');

            $table->foreignId('espece_id')
                ->constrained('especes')
                ->cascadeOnDelete();

            $table->foreignId('proprietaire_id')
                ->constrained('proprietaires')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('animaux');
    }
};