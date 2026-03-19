@extends('layouts.app')

@section('title', 'Réservations de la pension')

@section('content')
<section class="pb-16">
    <div class="max-w-6xl mx-auto px-6 lg:px-10 pt-10">

        <div class="mb-10">
            <a href="{{ route('admin.dashboard') }}"
               class="inline-flex items-center gap-2 text-[0.78rem] text-sage hover:text-sage-deep transition-colors mb-6">
                ← Retour
            </a>

            <p class="text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                Administration
            </p>

            <h1 class="font-serif-custom text-[clamp(2.5rem,5vw,4rem)] font-light text-ink">
                Réservations de {{ $pension->ville }}
            </h1>
        </div>

        <div class="mb-8 flex flex-wrap gap-3">
    <a href="{{ route('admin.reservations.index') }}"
       class="px-4 py-2 rounded-full border text-sm transition-colors {{ $filtre === 'tous' ? 'bg-sage-deep text-white border-sage-deep' : 'bg-white text-ink border-black/10 hover:border-[#4F6F52]/30' }}">
        Tous
    </a>

    <a href="{{ route('admin.reservations.index', ['statut' => 'avenir']) }}"
       class="px-4 py-2 rounded-full border text-sm transition-colors {{ $filtre === 'avenir' ? 'bg-sage-deep text-white border-sage-deep' : 'bg-white text-ink border-black/10 hover:border-[#4F6F52]/30' }}">
        À venir
    </a>

    <a href="{{ route('admin.reservations.index', ['statut' => 'en_cours']) }}"
       class="px-4 py-2 rounded-full border text-sm transition-colors {{ $filtre === 'en_cours' ? 'bg-sage-deep text-white border-sage-deep' : 'bg-white text-ink border-black/10 hover:border-[#4F6F52]/30' }}">
        En cours
    </a>

    <a href="{{ route('admin.reservations.index', ['statut' => 'termines']) }}"
       class="px-4 py-2 rounded-full border text-sm transition-colors {{ $filtre === 'termines' ? 'bg-sage-deep text-white border-sage-deep' : 'bg-white text-ink border-black/10 hover:border-[#4F6F52]/30' }}">
        Terminés
    </a>
    <a href="{{ route('admin.reservations.index', ['statut' => 'vaccins_non_a_jour']) }}"
   class="px-4 py-2 rounded-full border text-sm transition-colors {{ $filtre === 'vaccins_non_a_jour' ? 'bg-sage-deep text-white border-sage-deep' : 'bg-white text-ink border-black/10 hover:border-[#4F6F52]/30' }}">
    Vaccins non à jour
</a>

<a href="{{ route('admin.reservations.index', ['statut' => 'vermifuge_non_a_jour']) }}"
   class="px-4 py-2 rounded-full border text-sm transition-colors {{ $filtre === 'vermifuge_non_a_jour' ? 'bg-sage-deep text-white border-sage-deep' : 'bg-white text-ink border-black/10 hover:border-[#4F6F52]/30' }}">
    Vermifuge non à jour
</a>

<a href="{{ route('admin.reservations.index', ['statut' => 'non_regles']) }}"
   class="px-4 py-2 rounded-full border text-sm transition-colors {{ $filtre === 'non_regles' ? 'bg-sage-deep text-white border-sage-deep' : 'bg-white text-ink border-black/10 hover:border-[#4F6F52]/30' }}">
    Non réglés
</a>
</div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            @forelse($affectations as $affectation)
                <article class="bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                        Animal
                    </span>

                    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                        {{ $affectation->animal->nom }}
                    </h2>

                    <div class="space-y-2 mb-6 text-[0.9rem] text-bark">
                        <p>
                            <strong>Espèce :</strong> {{ $affectation->animal->espece->libelle }}
                        </p>

                        <p>
                            <strong>Propriétaire :</strong>
                            {{ $affectation->animal->proprietaire->prenom }}
                            {{ $affectation->animal->proprietaire->nom }}
                        </p>

                        <p>
                            <strong>Téléphone :</strong>
                            {{ $affectation->animal->proprietaire->telephone }}
                        </p>

                        <p>
                            <strong>Box :</strong> #{{ $affectation->box->id }}
                        </p>

                        <p>
                            <strong>Début :</strong>
                            {{ \Carbon\Carbon::parse($affectation->date->date)->format('d/m/Y') }}
                        </p>

                        <p>
                            <strong>Fin :</strong>
                            {{ \Carbon\Carbon::parse($affectation->date_fin)->format('d/m/Y') }}
                        </p>
                    </div>

                    @php
                        $today = now()->toDateString();
                    @endphp

                    @if($affectation->date_fin < $today)
                        <span class="text-xs text-gray-500">Terminé</span>
                    @elseif($affectation->date->date <= $today && $affectation->date_fin >= $today)
                        <span class="text-xs text-green-600">En cours</span>
                    @else
                        <span class="text-xs text-blue-600">À venir</span>
                    @endif

                    <div class="mt-4">
    <a href="{{ route('admin.reservations.edit', $affectation) }}"
       class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
        Gérer le séjour
        <span>→</span>
    </a>
</div>
                </article>
            @empty
                <div class="col-span-3 bg-white rounded-[1.5rem] p-10 text-center border border-black/[0.05]">
                    <p class="text-bark">Aucune réservation pour cette pension.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>
@endsection