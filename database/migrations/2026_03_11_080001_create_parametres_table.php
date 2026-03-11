<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parametres', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse_siege_social');
            $table->string('nom_dirigeant');
            $table->string('adresse_logo')->nullable();
            $table->decimal('prix_vaccin', 8, 2);
            $table->decimal('prix_vermifuge', 8, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parametres');
    }
};