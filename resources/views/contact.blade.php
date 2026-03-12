@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            {{-- HERO / INTRO --}}
            <section class="pt-10 mb-14">
                <div class="max-w-3xl">
                    <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                        <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                        Contact
                    </p>

                    <h1 class="font-serif-custom text-[clamp(2.5rem,6vw,4.8rem)] font-light text-ink leading-[1.02] mb-5">
                        Prenez contact<br>en toute simplicité
                    </h1>

                    <p class="text-[0.95rem] text-bark leading-relaxed max-w-2xl">
                        Pour toute demande d’information concernant l’accueil de votre animal,
                        les modalités de séjour ou le choix d’une pension, vous pouvez nous écrire
                        ou contacter directement la pension qui vous intéresse.
                    </p>
                </div>
            </section>

            

            {{-- INFOS PRINCIPALES --}}
            <section class="grid lg:grid-cols-[1.1fr_0.9fr] gap-6 mb-16">
                <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                    <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                        <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                        Coordonnées
                    </p>

                    <h2 class="font-serif-custom text-3xl font-light text-ink mb-8">
                        Informations de contact
                    </h2>

                    <div class="grid sm:grid-cols-2 gap-6">
                        <div>
                            <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Email
                            </span>
                            <p class="text-[1rem] text-ink">contact@miseauvert.fr</p>
                        </div>

                        <div>
                            <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Téléphone
                            </span>
                            <p class="text-[1rem] text-ink">01 02 03 04 05</p>
                        </div>

                        <div class="sm:col-span-2">
                            <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-2">
                                Horaires
                            </span>
                            <p class="text-[1rem] text-bark leading-relaxed">
                                8h30 - 12h / 14h30 - 19h
                            </p>
                        </div>
                    </div>
                </div>

                            {{-- INFOS PRATIQUES --}}
            <section class="grid lg:grid-cols-2 gap-5">
                <div class="group bg-white rounded-3xl p-8 border border-black/[0.05] flex gap-6 hover:border-[#C8D8C9] transition-colors duration-300">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-2xl bg-[#EAF0EA] flex items-center justify-center text-sage group-hover:bg-sage group-hover:text-white transition-colors duration-300">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.4" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="text-[0.62rem] uppercase tracking-[0.2em] text-sage mb-2">Visites</p>
                        <h3 class="font-serif-custom text-xl font-medium text-ink mb-2 leading-snug">
                            Venez découvrir les installations
                        </h3>
                        <p class="text-[0.84rem] text-bark leading-relaxed font-light">
                            Les visites se font sans rendez-vous de 8h30 à 12h et de 14h30 à 19h,
                            sauf mardi après-midi, dimanche et jours fériés.
                        </p>
                    </div>
                </div>

                <div class="group bg-white rounded-3xl p-8 border border-black/[0.05] flex gap-6 hover:border-[#C8D8C9] transition-colors duration-300">
                    <div class="flex-shrink-0">
                        <div class="w-12 h-12 rounded-2xl bg-[#EAF0EA] flex items-center justify-center text-sage group-hover:bg-sage group-hover:text-white transition-colors duration-300">
                            <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.4" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/>
                            </svg>
                        </div>
                    </div>
                    <div>
                        <p class="text-[0.62rem] uppercase tracking-[0.2em] text-sage mb-2">Accueil</p>
                        <h3 class="font-serif-custom text-xl font-medium text-ink mb-2 leading-snug">
                            Dépôts et enlèvements sur rendez-vous
                        </h3>
                        <p class="text-[0.84rem] text-bark leading-relaxed font-light">
                            Afin de limiter le stress de l’animal et de personnaliser son arrivée,
                            les dépôts et enlèvements sont organisés sur rendez-vous.
                        </p>
                    </div>
                </div>
            </section>

                <div class="bg-sage-deep rounded-[1.75rem] p-8 border border-sage-deep text-white relative overflow-hidden">
                    <div class="absolute inset-0 pointer-events-none"
                         style="background: radial-gradient(ellipse 80% 100% at 50% -10%, rgba(122,158,126,0.3) 0%, transparent 65%), radial-gradient(ellipse 60% 60% at 10% 110%, rgba(30,37,31,0.4) 0%, transparent 60%)">
                    </div>

                    <div class="relative z-10">
                        <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-white/60 mb-4">
                            <span class="block w-5 h-px bg-white/30"></span>
                            Conseil
                        </p>

                        <h2 class="font-serif-custom text-3xl font-light mb-4">
                            Besoin d’aide pour choisir ?
                        </h2>

                        <p class="text-white/65 text-[0.92rem] leading-relaxed mb-8">
                            Consultez nos pensions et leurs tarifs pour trouver la formule
                            la plus adaptée au séjour de votre animal.
                        </p>

                        <a href="{{ route('pensions.index') }}"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-ink text-[0.82rem] font-medium tracking-wide hover:bg-[#F8F5F0] transition-colors duration-300">
                            Voir les pensions
                            <span class="opacity-40">→</span>
                        </a>
                    </div>
                </div>
            </section>


        </div>
    </section>
@endsection