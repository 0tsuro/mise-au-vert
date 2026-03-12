@extends('layouts.app')

@section('title', 'Modifier ma pension')

@section('content')
    <section class="pb-16">
        <div class="max-w-4xl mx-auto px-6 lg:px-10 pt-10">
            <div class="mb-10">
                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Administration
                </p>

                <h1 class="font-serif-custom text-[clamp(2.3rem,5vw,4rem)] font-light text-ink leading-[1.05] mb-4">
                    Modifier ma pension
                </h1>

                <p class="text-bark max-w-2xl">
                    Mettez à jour les informations visibles sur votre fiche publique.
                </p>
            </div>

            @if (session('success'))
                <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-5 py-4 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                <form action="{{ route('admin.pension.update') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="ville" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Ville
                            </label>
                            <input
                                type="text"
                                name="ville"
                                id="ville"
                                value="{{ old('ville', $pension->ville) }}"
                                class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                            >
                            @error('ville')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="responsable" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Responsable
                            </label>
                            <input
                                type="text"
                                name="responsable"
                                id="responsable"
                                value="{{ old('responsable', $pension->responsable) }}"
                                class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                            >
                            @error('responsable')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div>
                        <label for="adresse" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Adresse
                        </label>
                        <input
                            type="text"
                            name="adresse"
                            id="adresse"
                            value="{{ old('adresse', $pension->adresse) }}"
                            class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                        >
                        @error('adresse')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="telephone" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Téléphone
                        </label>
                        <input
                            type="text"
                            name="telephone"
                            id="telephone"
                            value="{{ old('telephone', $pension->telephone) }}"
                            class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                        >
                        @error('telephone')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
    <label for="description" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
        Description
    </label>
    <textarea
        name="description"
        id="description"
        rows="6"
        class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
    >{{ old('description', $pension->description) }}</textarea>
    @error('description')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="photo_principale" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
        Photo principale
    </label>

    @if($pension->photo_principale)
        <div class="mb-4">
            <img
                src="{{ asset('storage/' . $pension->photo_principale) }}"
                alt="Photo de la pension"
                class="h-40 w-full max-w-md object-cover rounded-2xl border border-black/10"
            >
        </div>
    @endif

    <input
        type="file"
        name="photo_principale"
        id="photo_principale"
        class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white"
    >
    @error('photo_principale')
        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
                    <div class="pt-4">
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-sage-deep text-white text-[0.82rem] font-medium tracking-wide hover:bg-sage transition-colors duration-300"
                        >
                            Enregistrer les modifications
                            <span class="opacity-50">→</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection