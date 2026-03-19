@extends('layouts.app')

@section('title', 'Gérer un séjour')

@section('content')
<section class="pb-16">
    <div class="max-w-4xl mx-auto px-6 lg:px-10 pt-10">

        <div class="mb-10">
            <a href="{{ route('admin.reservations.index') }}"
               class="inline-flex items-center gap-2 text-[0.78rem] text-sage hover:text-sage-deep transition-colors mb-6">
                ← Retour aux séjours
            </a>

            <p class="text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                Administration
            </p>

            <h1 class="font-serif-custom text-[clamp(2.3rem,5vw,4rem)] font-light text-ink">
                Gérer le séjour de {{ $affectation->animal->nom }}
            </h1>
        </div>

        <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm mb-8">
            <div class="space-y-2 text-[0.95rem] text-bark">
                <p><strong>Animal :</strong> {{ $affectation->animal->nom }} ({{ $affectation->animal->espece->libelle }})</p>
                <p><strong>Propriétaire :</strong> {{ $affectation->animal->proprietaire->prenom }} {{ $affectation->animal->proprietaire->nom }}</p>
                <p><strong>Téléphone :</strong> {{ $affectation->animal->proprietaire->telephone }}</p>
                <p><strong>Box :</strong> #{{ $affectation->box->id }}</p>
                <p><strong>Début :</strong> {{ \Carbon\Carbon::parse($affectation->date->date)->format('d/m/Y') }}</p>
                <p><strong>Fin :</strong> {{ \Carbon\Carbon::parse($affectation->date_fin)->format('d/m/Y') }}</p>
            </div>
        </div>

        <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
            <form action="{{ route('admin.reservations.update', $affectation) }}" method="POST" class="space-y-6">
                @csrf
                @method('PUT')

                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="poids" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Poids
                        </label>
                        <input
                            type="number"
                            step="0.01"
                            min="0"
                            name="poids"
                            id="poids"
                            value="{{ old('poids', $affectation->poids) }}"
                            class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white"
                        >
                    </div>

                    <div>
                        <label for="age" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Âge
                        </label>
                        <input
                            type="number"
                            min="0"
                            name="age"
                            id="age"
                            value="{{ old('age', $affectation->age) }}"
                            class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white"
                        >
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-4">
                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="regle" value="1" {{ old('regle', $affectation->regle) ? 'checked' : '' }}>
                        <span>Réglé</span>
                    </label>

                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="carnet_vaccination" value="1" {{ old('carnet_vaccination', $affectation->carnet_vaccination) ? 'checked' : '' }}>
                        <span>Carnet de vaccination fourni</span>
                    </label>

                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="vaccin_a_jour" value="1" {{ old('vaccin_a_jour', $affectation->vaccin_a_jour) ? 'checked' : '' }}>
                        <span>Vaccin à jour</span>
                    </label>

                    <label class="flex items-center gap-3">
                        <input type="checkbox" name="vermifuge_a_jour" value="1" {{ old('vermifuge_a_jour', $affectation->vermifuge_a_jour) ? 'checked' : '' }}>
                        <span>Vermifuge à jour</span>
                    </label>
                </div>

                <div class="pt-4">
                    <button
                        type="submit"
                        class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-sage-deep text-white text-[0.82rem] font-medium tracking-wide hover:bg-sage transition-colors duration-300">
                        Enregistrer
                        <span class="opacity-50">→</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection