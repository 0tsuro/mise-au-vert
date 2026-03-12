@extends('layouts.app')

@section('title', 'Ajouter un animal')

@section('content')
    <section class="pb-16">
        <div class="max-w-4xl mx-auto px-6 lg:px-10 pt-10">
            <div class="mb-10">
                <a href="{{ route('client.animaux.index') }}"
                   class="inline-flex items-center gap-2 text-[0.78rem] text-sage hover:text-sage-deep transition-colors mb-6">
                    <span>←</span>
                    Retour aux animaux
                </a>

                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Espace client
                </p>

                <h1 class="font-serif-custom text-[clamp(2.3rem,5vw,4rem)] font-light text-ink leading-[1.05] mb-4">
                    Ajouter un animal
                </h1>
            </div>

            <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                <form action="{{ route('client.animaux.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <div>
                        <label for="nom" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Nom
                        </label>
                        <input
                            type="text"
                            name="nom"
                            id="nom"
                            value="{{ old('nom') }}"
                            class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                        >
                        @error('nom')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="espece_id" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Espèce
                        </label>
                        <select
                            name="espece_id"
                            id="espece_id"
                            class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                        >
                            <option value="">Choisir une espèce</option>
                            @foreach($especes as $espece)
                                <option value="{{ $espece->id }}" @selected(old('espece_id') == $espece->id)>
                                    {{ $espece->libelle }}
                                </option>
                            @endforeach
                        </select>
                        @error('espece_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
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