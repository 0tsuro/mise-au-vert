@extends('layouts.app')

@section('title', 'Facturation')

@section('content')
<section class="pb-16">
    <div class="max-w-6xl mx-auto px-6 lg:px-10 pt-10">

        <div class="mb-10 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <a href="{{ route('admin.dashboard') }}"
                   class="inline-flex items-center gap-2 text-[0.78rem] text-sage hover:text-sage-deep transition-colors mb-6">
                    ← Retour
                </a>

                <p class="text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                    Administration
                </p>

                <h1 class="font-serif-custom text-[clamp(2.5rem,5vw,4rem)] font-light text-ink">
                    Facturation de {{ $pension->ville }}
                </h1>

                <p class="text-bark mt-3 max-w-2xl">
                    Retrouvez ici les séjours terminés et non réglés avec un montant estimé.
                </p>
            </div>
        </div>

        <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
            @forelse($affectations as $affectation)
                <article class="bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                        Facturation
                    </span>

                    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                        {{ $affectation->animal->nom }}
                    </h2>

                    <div class="space-y-2 mb-6 text-[0.9rem] text-bark">
                        <p>
                            <strong>Propriétaire :</strong>
                            {{ $affectation->animal->proprietaire->prenom }}
                            {{ $affectation->animal->proprietaire->nom }}
                        </p>

                        <p>
                            <strong>Box :</strong> #{{ $affectation->box->id }}
                        </p>

                        <p>
                            <strong>Type :</strong> {{ $affectation->box->typeGardiennage->libelle }}
                        </p>

                        <p>
                            <strong>Début :</strong>
                            {{ \Carbon\Carbon::parse($affectation->date->date)->format('d/m/Y') }}
                        </p>

                        <p>
                            <strong>Fin :</strong>
                            {{ \Carbon\Carbon::parse($affectation->date_fin)->format('d/m/Y') }}
                        </p>

                        <p>
                            <strong>Durée :</strong> {{ $affectation->nb_jours }} jour(s)
                        </p>

                        <p>
                            <strong>Tarif/jour :</strong>
                            {{ number_format($affectation->tarif_journalier, 2, ',', ' ') }} €
                        </p>
                    </div>

                    <div class="pt-5 border-t border-black/[0.06]">
                        <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Montant estimé
                        </span>

                        <p class="font-serif-custom text-4xl font-light text-sage-deep leading-none">
                            {{ number_format($affectation->montant_estime, 2, ',', ' ') }} €
                        </p>
                    </div>
                </article>
            @empty
                <div class="col-span-3 bg-white rounded-[1.5rem] p-10 text-center border border-black/[0.05]">
                    <p class="text-bark">Aucun séjour terminé non réglé pour le moment.</p>
                </div>
            @endforelse
        </div>

    </div>
</section>
@endsection