@extends('layouts.app')

@section('title', 'Gérer mes tarifs')

@section('content')
    <section class="pb-16">
        <div class="max-w-4xl mx-auto px-6 lg:px-10 pt-10">
            <div class="mb-10">
                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Administration
                </p>

                <h1 class="font-serif-custom text-[clamp(2.3rem,5vw,4rem)] font-light text-ink leading-[1.05] mb-4">
                    Gérer mes tarifs
                </h1>

                <p class="text-bark max-w-2xl">
                    Modifiez les tarifs de votre pension pour chaque type d’hébergement.
                </p>
            </div>

            @if (session('success'))
                <div class="mb-6 rounded-2xl bg-green-50 border border-green-200 px-5 py-4 text-green-800">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                <form action="{{ route('admin.tarifs.update') }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div class="grid gap-6">
                        @forelse($pension->tarifications as $tarification)
                            <div class="grid md:grid-cols-[1fr_220px] gap-4 items-end border-b border-black/[0.05] pb-6">
                                <div>
                                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                        Type de gardiennage
                                    </span>

                                    <h2 class="font-serif-custom text-2xl font-light text-ink">
                                        {{ $tarification->typeGardiennage->libelle }}
                                    </h2>
                                </div>

                                <div>
                                    <label for="tarifs_{{ $tarification->id }}" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                                        Tarif / jour
                                    </label>

                                    <input
                                        type="number"
                                        step="0.01"
                                        min="0"
                                        name="tarifs[{{ $tarification->id }}]"
                                        id="tarifs_{{ $tarification->id }}"
                                        value="{{ old('tarifs.'.$tarification->id, $tarification->tarif) }}"
                                        class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                                    >
                                </div>
                            </div>
                        @empty
                            <p class="text-bark">Aucune tarification n’est encore renseignée pour cette pension.</p>
                        @endforelse
                    </div>

                    <div class="pt-4">
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-sage-deep text-white text-[0.82rem] font-medium tracking-wide hover:bg-sage transition-colors duration-300"
                        >
                            Enregistrer les tarifs
                            <span class="opacity-50">→</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection