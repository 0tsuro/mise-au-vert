@extends('layouts.app')

@section('title', 'Mes séjours')

@section('content')
<section class="pb-16">
    <div class="max-w-6xl mx-auto px-6 lg:px-10 pt-10">

        @if (session('success'))
            <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-5 py-4 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <div class="mb-10 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
            <div>
                <a href="{{ route('client.dashboard') }}"
                   class="inline-flex items-center gap-2 text-[0.78rem] text-sage hover:text-sage-deep transition-colors mb-6">
                    ← Retour
                </a>

                <p class="text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                    Réservations
                </p>

                <h1 class="font-serif-custom text-[clamp(2.5rem,5vw,4rem)] font-light text-ink">
                    Mes séjours
                </h1>
            </div>

            <a href="{{ route('client.reservations.create') }}"
               class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-sage-deep text-white text-[0.82rem] font-medium tracking-wide hover:bg-sage transition-colors duration-300">
                Réserver un séjour
                <span class="opacity-50">→</span>
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
                            <strong>Pension :</strong> {{ $affectation->box->pension->ville }}
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

                    <div class="flex items-center justify-between gap-4">
                        <div>
                            @if($affectation->date_fin < $today)
                                <span class="text-xs text-gray-500">Terminé</span>
                            @elseif($affectation->date->date <= $today && $affectation->date_fin >= $today)
                                <span class="text-xs text-green-600">En cours</span>
                            @else
                                <span class="text-xs text-blue-600">À venir</span>
                            @endif
                        </div>

                        @if($affectation->date->date > $today)
                            <form action="{{ route('client.reservations.destroy', $affectation) }}" method="POST" onsubmit="return confirm('Annuler cette réservation ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xs text-red-600 hover:text-red-700">
                                    Annuler
                                </button>
                            </form>
                        @endif
                    </div>
                </article>
            @empty
                <div class="col-span-3 bg-white rounded-[1.5rem] p-10 text-center border border-black/[0.05]">
                    <p class="text-bark mb-4">Aucune réservation pour le moment.</p>

                    <a href="{{ route('client.reservations.create') }}"
                       class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-sage-deep text-white">
                        Faire une réservation →
                    </a>
                </div>
            @endforelse
        </div>

    </div>
</section>
@endsection