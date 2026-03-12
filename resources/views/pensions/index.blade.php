@extends('layouts.app')

@section('title', 'Pensions')

@section('content')
    <section class="pt-28 pb-10">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">
            <div class="max-w-3xl mb-14">
                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Nos pensions
                </p>

                <h1 class="font-serif-custom text-[clamp(2.4rem,5vw,4.2rem)] font-light text-ink leading-[1.05] mb-5">
                    Trouvez la pension qui correspond à votre animal
                </h1>

                <p class="text-[0.95rem] text-bark leading-relaxed max-w-2xl">
                    Découvrez l’ensemble des pensions Mise au Vert, leurs responsables et leurs informations pratiques.
                    Chaque pension possède ses propres installations et ses propres tarifs.
                </p>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                @foreach($pensions as $pension)
                    <article class="formule-card bg-white rounded-[1.75rem] overflow-hidden border border-black/[0.05] shadow-sm">
 <div class="h-52 relative overflow-hidden"
     style="background: linear-gradient(135deg, #7A9E7E 0%, #5a7a5c 45%, #c5c98a 100%);">

    @if($pension->photo_principale)
        <img
            src="{{ asset('storage/' . $pension->photo_principale) }}"
            alt="Photo de la pension {{ $pension->ville }}"
            class="absolute inset-0 w-full h-full object-cover"
        >
    @endif
                            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-black/5 to-transparent"></div>

                            <div class="absolute top-5 left-5">
                                <span class="inline-flex items-center gap-1.5 bg-white/80 backdrop-blur-sm rounded-full px-3 py-1 text-[0.62rem] tracking-[0.12em] uppercase text-sage-deep font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-sage inline-block"></span>
                                    Pension
                                </span>
                            </div>

                            <div class="absolute bottom-5 left-5 right-5">
                                <h2 class="font-serif-custom text-3xl font-light text-white leading-none">
                                    {{ $pension->ville }}
                                </h2>
                            </div>
                        </div>

                        <div class="p-7">
                            <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                                Responsable
                            </span>

                            <p class="text-[1rem] text-ink mb-5">
                                {{ $pension->responsable }}
                            </p>

                            <div class="space-y-2 mb-7">
                                <div>
                                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-1">
                                        Adresse
                                    </span>
                                    <p class="text-[0.88rem] text-bark leading-relaxed">
                                        {{ $pension->adresse }}
                                    </p>
                                </div>

                                <div>
                                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-1">
                                        Téléphone
                                    </span>
                                    <p class="text-[0.88rem] text-bark leading-relaxed">
                                        {{ $pension->telephone }}
                                    </p>
                                </div>
                            </div>

                            <a href="{{ route('pensions.show', $pension->id) }}"
                               class="inline-flex items-center gap-2 text-[0.8rem] text-sage hover:text-sage-deep transition-colors">
                                Découvrir la pension
                                <span>→</span>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection