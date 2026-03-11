<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->id();
            $table->float('superficie');

            $table->foreignId('pension_id')
                ->constrained('pensions')
                ->cascadeOnDelete();

            $table->foreignId('type_gardiennage_id')
                ->constrained('type_gardiennages')
                ->cascadeOnDelete();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('boxes');
    }
};