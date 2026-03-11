<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tarifications', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pension_id')
                ->constrained('pensions')
                ->cascadeOnDelete();

            $table->foreignId('type_gardiennage_id')
                ->constrained('type_gardiennages')
                ->cascadeOnDelete();

            $table->decimal('tarif', 8, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tarifications');
    }
};