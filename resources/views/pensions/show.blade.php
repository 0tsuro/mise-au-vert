@extends('layouts.app')

@section('title', 'Pension '.$pension->ville)

@section('content')
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            {{-- HERO / INTRO --}}
            <section class="pt-10 mb-14">
                <a href="{{ route('pensions.index') }}"
                   class="inline-flex items-center gap-2 text-[0.78rem] text-sage hover:text-sage-deep transition-colors mb-8">
                    <span>←</span>
                    Retour aux pensions
                </a>

                <div class="relative overflow-hidden rounded-[2rem]">
                    <div class="h-[320px] md:h-[420px] relative"
                         style="background: linear-gradient(135deg, #7A9E7E 0%, #5a7a5c 45%, #c5c98a 100%);">

                        @if($pension->photo_principale)
                            <img
                                src="{{ asset('storage/' . $pension->photo_principale) }}"
                                alt="Photo de la pension {{ $pension->ville }}"
                                class="absolute inset-0 w-full h-full object-cover"
                            >
                        @endif

                        <div class="absolute inset-0 bg-gradient-to-t from-black/45 via-black/10 to-transparent"></div>

                        <div class="absolute top-6 left-6">
                            <span class="inline-flex items-center gap-1.5 bg-white/80 backdrop-blur-sm rounded-full px-3 py-1 text-[0.62rem] tracking-[0.12em] uppercase text-sage-deep font-medium">
                                <span class="w-1.5 h-1.5 rounded-full bg-sage inline-block"></span>
                                Pension
                            </span>
                        </div>

                        <div class="absolute bottom-8 left-6 md:left-8 right-6 md:right-8">
                            <p class="text-[0.68rem] uppercase tracking-[0.24em] text-white/65 mb-3">
                                Mise au Vert
                            </p>
                            <h1 class="font-serif-custom text-[clamp(2.5rem,6vw,4.8rem)] font-light text-white leading-[0.95] mb-4">
                                {{ $pension->ville }}
                            </h1>
                            <p class="text-white/75 text-[0.95rem] max-w-2xl">
                                {{ $pension->description ?: 'Découvrez les informations de la pension, ses boxes et les tarifs disponibles.' }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            {{-- INFOS PRINCIPALES --}}
            <section class="grid lg:grid-cols-[1.1fr_0.9fr] gap-6 mb-16">
                <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                    <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                        <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                        Informations
                    </p>

                    <h2 class="font-serif-custom text-3xl font-light text-ink mb-8">
                        Coordonnées de la pension
                    </h2>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Responsable
                            </span>
                            <p class="text-[1rem] text-ink">{{ $pension->responsable }}</p>
                        </div>

                        <div>
                            <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Téléphone
                            </span>
                            <p class="text-[1rem] text-ink">{{ $pension->telephone }}</p>
                        </div>

                        <div class="sm:col-span-2">
                            <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Adresse
                            </span>
                            <p class="text-[1rem] text-bark leading-relaxed">{{ $pension->adresse }}</p>
                        </div>

                        @if($pension->description)
                            <div class="sm:col-span-2">
                                <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                    Présentation
                                </span>
                                <p class="text-[1rem] text-bark leading-relaxed whitespace-pre-line">
                                    {{ $pension->description }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="bg-sage-deep rounded-[1.75rem] p-8 border border-sage-deep text-white relative overflow-hidden">
                    <div class="absolute inset-0 pointer-events-none"
                         style="background: radial-gradient(ellipse 80% 100% at 50% -10%, rgba(122,158,126,0.3) 0%, transparent 65%), radial-gradient(ellipse 60% 60% at 10% 110%, rgba(30,37,31,0.4) 0%, transparent 60%)">
                    </div>

                    <div class="relative z-10">
                        <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-white/60 mb-4">
                            <span class="block w-5 h-px bg-white/30"></span>
                            Réservation
                        </p>

                        <h2 class="font-serif-custom text-3xl font-light mb-4">
                            Besoin d’informations ?
                        </h2>

                        <p class="text-white/65 text-[0.92rem] leading-relaxed mb-8">
                            Consultez les tarifs de cette pension et prenez contact pour organiser le séjour de votre animal.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-ink text-[0.82rem] font-medium tracking-wide hover:bg-[#F8F5F0] transition-colors duration-300">
                            Contacter la pension
                            <span class="opacity-40">→</span>
                        </a>
                    </div>
                </div>
            </section>

            {{-- BOXES --}}
            <section class="mb-16">
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-8 gap-3">
                    <div>
                        <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                            <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                            Hébergements
                        </p>
                        <h2 class="font-serif-custom text-[clamp(2rem,4vw,3rem)] font-light text-ink leading-tight">
                            Les boxes de la pension
                        </h2>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-5">
                    @forelse($pension->boxes as $box)
                        <article class="formule-card bg-white rounded-[1.5rem] p-6 border border-black/[0.05] shadow-sm">
                            <span class="block font-serif-custom text-5xl font-light text-sage/10 leading-none mb-3 select-none">
                                {{ str_pad($box->id, 2, '0', STR_PAD_LEFT) }}
                            </span>

                            <h3 class="font-serif-custom text-2xl font-light text-ink mb-4">
                                Box #{{ $box->id }}
                            </h3>

                            <div class="space-y-4">
                                <div>
                                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-1">
                                        Superficie
                                    </span>
                                    <p class="text-bark">{{ $box->superficie }} m²</p>
                                </div>

                                <div>
                                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-1">
                                        Type
                                    </span>
                                    <p class="text-bark">{{ $box->typeGardiennage->libelle }}</p>
                                </div>
                            </div>
                        </article>
                    @empty
                        <div class="md:col-span-2 xl:col-span-3 bg-white rounded-[1.5rem] p-8 border border-black/[0.05] shadow-sm">
                            <p class="text-bark">Aucun box renseigné pour cette pension.</p>
                        </div>
                    @endforelse
                </div>
            </section>

            {{-- TARIFS --}}
            <section class="mb-12">
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-8 gap-3">
                    <div>
                        <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                            <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                            Tarification
                        </p>
                        <h2 class="font-serif-custom text-[clamp(2rem,4vw,3rem)] font-light text-ink leading-tight">
                            Les tarifs de la pension
                        </h2>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-5">
                    @forelse($pension->tarifications as $tarification)
                        <article class="bg-white rounded-[1.5rem] p-6 border border-black/[0.05] shadow-sm">
                            <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Formule
                            </span>

                            <h3 class="font-serif-custom text-2xl font-light text-ink mb-5">
                                {{ $tarification->typeGardiennage->libelle }}
                            </h3>

                            <div class="pt-5 border-t border-black/[0.06]">
                                <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                    Tarif journalier
                                </span>
                                <p class="font-serif-custom text-4xl font-light text-sage-deep leading-none">
                                    {{ number_format($tarification->tarif, 2, ',', ' ') }} €
                                </p>
                                <p class="text-[0.8rem] text-bark mt-2">par jour</p>
                            </div>
                        </article>
                    @empty
                        <div class="md:col-span-2 xl:col-span-3 bg-white rounded-[1.5rem] p-8 border border-black/[0.05] shadow-sm">
                            <p class="text-bark">Aucun tarif renseigné pour cette pension.</p>
                        </div>
                    @endforelse
                </div>
            </section>
        </div>
    </section>
@endsection