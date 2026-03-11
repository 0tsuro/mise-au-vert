<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('affectations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('date_id')
                ->constrained('dates')
                ->cascadeOnDelete();

            $table->foreignId('animal_id')
                ->constrained('animaux')
                ->cascadeOnDelete();

            $table->foreignId('box_id')
                ->constrained('boxes')
                ->cascadeOnDelete();

            $table->date('date_fin')->nullable();

            $table->boolean('regle')->default(false);
            $table->boolean('carnet_vaccination')->default(false);

            $table->float('poids')->nullable();
            $table->integer('age')->nullable();

            $table->boolean('vaccin_a_jour')->default(false);
            $table->boolean('vermifuge_a_jour')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('affectations');
    }
};