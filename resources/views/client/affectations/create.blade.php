@extends('layouts.app')

@section('title', 'Nouvelle réservation')

@section('content')
    <section class="pb-16">
        <div class="max-w-4xl mx-auto px-6 lg:px-10 pt-10">
            <div class="mb-10">
                <a href="{{ route('client.dashboard') }}"
                   class="inline-flex items-center gap-2 text-[0.78rem] text-sage hover:text-sage-deep transition-colors mb-6">
                    <span>←</span>
                    Retour au dashboard
                </a>

                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Réservation
                </p>

                <h1 class="font-serif-custom text-[clamp(2.3rem,5vw,4rem)] font-light text-ink leading-[1.05] mb-4">
                    Réserver un séjour
                </h1>
            </div>

            <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                <form method="POST" action="{{ route('client.reservations.store') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="animal_id" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Animal
                        </label>
                        <select name="animal_id" id="animal_id" class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white">
                            <option value="">Choisir un animal</option>
                            @foreach($animaux as $animal)
                                <option value="{{ $animal->id }}" @selected(old('animal_id') == $animal->id)>
                                    {{ $animal->nom }} — {{ $animal->espece->libelle }}
                                </option>
                            @endforeach
                        </select>
                        @error('animal_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="box_id" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Box
                        </label>
                        <select name="box_id" id="box_id" class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white">
                            <option value="">Choisir un box</option>
                            @foreach($boxes as $box)
                                <option value="{{ $box->id }}" @selected(old('box_id') == $box->id)>
                                    Box #{{ $box->id }} — {{ $box->typeGardiennage->libelle }} — {{ $box->pension->ville }}
                                </option>
                            @endforeach
                        </select>
                        @error('box_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="date_debut" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Date de début
                            </label>
                            <input type="date" name="date_debut" id="date_debut" value="{{ old('date_debut') }}"
                                   class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white">
                            @error('date_debut')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="date_fin" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Date de fin
                            </label>
                            <input type="date" name="date_fin" id="date_fin" value="{{ old('date_fin') }}"
                                   class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white">
                            @error('date_fin')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit"
                                class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-sage-deep text-white text-[0.82rem] font-medium tracking-wide hover:bg-sage transition-colors duration-300">
                            Réserver
                            <span class="opacity-50">→</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection