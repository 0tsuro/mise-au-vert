@extends('layouts.app')

@section('title', 'Mes animaux')

@section('content')
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 pt-10">
            <div class="mb-10 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
                <div>
                    <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                        <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                        Espace client
                    </p>

                    <h1 class="font-serif-custom text-[clamp(2.3rem,5vw,4rem)] font-light text-ink leading-[1.05] mb-4">
                        Mes animaux
                    </h1>

                    <p class="text-bark max-w-2xl">
                        Retrouvez ici les animaux enregistrés sur votre compte.
                    </p>
                </div>

                <a href="{{ route('client.animaux.create') }}"
                   class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-sage-deep text-white text-[0.82rem] font-medium tracking-wide hover:bg-sage transition-colors duration-300">
                    Ajouter un animal
                    <span class="opacity-50">→</span>
                </a>
            </div>

            @if (session('success'))
                <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-5 py-4 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                @forelse($proprietaire->animaux as $animal)
                    <article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                        <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                            Animal
                        </span>

                        <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                            {{ $animal->nom }}
                        </h2>

                        <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
                            <strong>Espèce :</strong> {{ $animal->espece->libelle }}
                        </p>

                        <div class="flex items-center gap-4">
                            <a href="{{ route('client.animaux.edit', $animal) }}"
                               class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
                                Modifier
                                <span>→</span>
                            </a>

                            <form action="{{ route('client.animaux.destroy', $animal) }}" method="POST" onsubmit="return confirm('Supprimer cet animal ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-[0.82rem] text-red-600 hover:text-red-700">
                                    Supprimer
                                </button>
                            </form>
                        </div>
                    </article>
                @empty
                    <div class="md:col-span-2 xl:col-span-3 bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                        <p class="text-bark">Aucun animal enregistré pour le moment.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection