@extends('layouts.app')

@section('title', 'Mon profil')

@section('content')
<section class="pb-16">
    <div class="max-w-4xl mx-auto px-6 lg:px-10 pt-10">

        <div class="mb-10">
            <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                Espace client
            </p>

            <h1 class="font-serif-custom text-[clamp(2.3rem,5vw,4rem)] font-light text-ink">
                Mon profil
            </h1>
        </div>

        @if (session('success'))
            <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-5 py-4 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">

            <form method="POST" action="{{ route('client.profil.update') }}" class="space-y-6">
                @csrf

                <div>
                    <label class="block text-sm mb-2">Nom</label>
                    <input name="nom" value="{{ old('nom', $proprietaire->nom ?? '') }}"
                        class="w-full border px-4 py-2 rounded-xl">
                </div>

                <div>
                    <label class="block text-sm mb-2">Prénom</label>
                    <input name="prenom" value="{{ old('prenom', $proprietaire->prenom ?? '') }}"
                        class="w-full border px-4 py-2 rounded-xl">
                </div>

                <div>
                    <label class="block text-sm mb-2">Téléphone</label>
                    <input name="telephone" value="{{ old('telephone', $proprietaire->telephone ?? '') }}"
                        class="w-full border px-4 py-2 rounded-xl">
                </div>

                <div>
                    <label class="block text-sm mb-2">Adresse</label>
                    <input name="adresse" value="{{ old('adresse', $proprietaire->adresse ?? '') }}"
                        class="w-full border px-4 py-2 rounded-xl">
                </div>

                <button class="px-6 py-3 bg-sage-deep text-white rounded-full">
                    Enregistrer
                </button>

            </form>

        </div>
    </div>
</section>
@endsection