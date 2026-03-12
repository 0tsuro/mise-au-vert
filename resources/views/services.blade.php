@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-10">

            {{-- HERO / INTRO --}}
            <section class="pt-10 mb-14">
                <div class="max-w-3xl">
                    <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                        <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                        Services
                    </p>

                    <h1 class="font-serif-custom text-[clamp(2.5rem,6vw,4.8rem)] font-light text-ink leading-[1.02] mb-5">
                        Des solutions pensées<br>pour chaque animal
                    </h1>

                    <p class="text-[0.95rem] text-bark leading-relaxed max-w-2xl">
                        Mise au Vert propose plusieurs formules d’hébergement afin de s’adapter
                        au rythme, au confort et aux besoins de chaque chien ou chat accueilli.
                    </p>
                </div>
            </section>

            {{-- FORMULES --}}
            <section class="mb-16">
                <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-8 gap-3">
                    <div>
                        <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                            <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                            Formules d’hébergement
                        </p>
                        <h2 class="font-serif-custom text-[clamp(2rem,4vw,3rem)] font-light text-ink leading-tight">
                            Trois approches, un même souci du bien-être
                        </h2>
                    </div>
                </div>

                <div class="grid md:grid-cols-3 gap-5">
                    <article class="formule-card bg-white rounded-3xl overflow-hidden border border-black/[0.05] shadow-sm">
                        <div class="h-52 w-full relative overflow-hidden"
                             style="background: linear-gradient(135deg, #7A9E7E 0%, #5a7a5c 50%, #a8bf8a 100%);">
                            <div class="absolute inset-0 flex items-end p-5">
                                <span class="inline-flex items-center gap-1.5 bg-white/80 backdrop-blur-sm rounded-full px-3 py-1 text-[0.65rem] tracking-[0.1em] uppercase text-sage-deep font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-sage inline-block"></span>
                                    Chiens
                                </span>
                            </div>
                        </div>

                        <div class="p-7">
                            <span class="block font-serif-custom text-5xl font-light text-sage/10 leading-none mb-3 select-none">01</span>
                            <h3 class="font-serif-custom text-2xl font-light text-ink mb-4">Hôtel canin</h3>
                            <p class="text-[0.84rem] text-bark leading-relaxed font-light mb-3">
                                Box individuel chauffé, aménagement personnalisé et parcours extérieur.
                            </p>
                            <p class="text-[0.84rem] text-bark leading-relaxed font-light">
                                Idéal en hiver et pour les séjours courts comme longue durée.
                            </p>
                        </div>
                    </article>

                    <article class="formule-card bg-sage-deep rounded-3xl overflow-hidden border border-sage-deep relative shadow-sm">
                        <div class="h-52 w-full relative overflow-hidden"
                             style="background: linear-gradient(135deg, #354D38 0%, #4F6F52 60%, #7A9E7E 100%);">
                            <div class="absolute inset-0 flex items-end p-5">
                                <span class="inline-flex items-center gap-1.5 bg-white/15 backdrop-blur-sm rounded-full px-3 py-1 text-[0.65rem] tracking-[0.1em] uppercase text-white font-medium border border-white/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-[#C8D8C9] inline-block"></span>
                                    Chiens
                                </span>
                            </div>
                        </div>

                        <div class="p-7">
                            <span class="block font-serif-custom text-5xl font-light text-white/10 leading-none mb-3 select-none">02</span>
                            <h3 class="font-serif-custom text-2xl font-light text-white mb-4">Camping canin</h3>
                            <p class="text-[0.84rem] text-white/60 leading-relaxed font-light mb-3">
                                Chenil extérieur, niche individuelle et grand jardin commun.
                            </p>
                            <p class="text-[0.84rem] text-white/60 leading-relaxed font-light">
                                Une formule qui favorise le contact avec d’autres animaux tout en gardant un espace individuel.
                            </p>
                        </div>
                    </article>

                    <article class="formule-card bg-white rounded-3xl overflow-hidden border border-black/[0.05] shadow-sm">
                        <div class="h-52 w-full relative overflow-hidden"
                             style="background: linear-gradient(135deg, #b8c9a0 0%, #8aab8c 50%, #6a9470 100%);">
                            <div class="absolute inset-0 flex items-end p-5">
                                <span class="inline-flex items-center gap-1.5 bg-white/80 backdrop-blur-sm rounded-full px-3 py-1 text-[0.65rem] tracking-[0.1em] uppercase text-sage-deep font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-sage inline-block"></span>
                                    Chats
                                </span>
                            </div>
                        </div>

                        <div class="p-7">
                            <span class="block font-serif-custom text-5xl font-light text-sage/10 leading-none mb-3 select-none">03</span>
                            <h3 class="font-serif-custom text-2xl font-light text-ink mb-4">Pension féline</h3>
                            <p class="text-[0.84rem] text-bark leading-relaxed font-light mb-3">
                                Espaces chauffés, ambiance calme, mobilier, litière et alimentation comprises.
                            </p>
                            <p class="text-[0.84rem] text-bark leading-relaxed font-light">
                                Parcours aménagés avec arbres à chat, passerelles et ponts pour favoriser leur bien-être.
                            </p>
                        </div>
                    </article>
                </div>
            </section>

            {{-- SOINS --}}
            <section class="grid lg:grid-cols-[1.1fr_0.9fr] gap-6 mb-16">
                <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                    <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                        <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                        Suivi et soins
                    </p>

                    <h2 class="font-serif-custom text-3xl font-light text-ink mb-8">
                        Un accueil encadré et sécurisé
                    </h2>

                    <div class="space-y-5">
                        <p class="text-[0.92rem] text-bark leading-relaxed">
                            Le carnet de santé est vérifié à l’arrivée. En cas de vaccin ou de traitement antiparasitaire
                            à renouveler, le partenaire vétérinaire peut intervenir dans la journée.
                        </p>

                        <p class="text-[0.92rem] text-bark leading-relaxed">
                            En cas de problème médical, l’animal est pris en charge rapidement
                            et les frais sont réglés directement auprès du vétérinaire partenaire.
                        </p>
                    </div>
                </div>

                <div class="bg-sage-deep rounded-[1.75rem] p-8 border border-sage-deep text-white relative overflow-hidden">
                    <div class="absolute inset-0 pointer-events-none"
                         style="background: radial-gradient(ellipse 80% 100% at 50% -10%, rgba(122,158,126,0.3) 0%, transparent 65%), radial-gradient(ellipse 60% 60% at 10% 110%, rgba(30,37,31,0.4) 0%, transparent 60%)">
                    </div>

                    <div class="relative z-10">
                        <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-white/60 mb-4">
                            <span class="block w-5 h-px bg-white/30"></span>
                            Accompagnement
                        </p>

                        <h2 class="font-serif-custom text-3xl font-light mb-4">
                            Un séjour pensé pour rassurer
                        </h2>

                        <p class="text-white/65 text-[0.92rem] leading-relaxed mb-8">
                            Chaque formule est conçue pour offrir un cadre stable, confortable et adapté
                            au rythme de l’animal tout au long de son séjour.
                        </p>

                        <a href="{{ route('contact') }}"
                           class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-ink text-[0.82rem] font-medium tracking-wide hover:bg-[#F8F5F0] transition-colors duration-300">
                            Nous contacter
                            <span class="opacity-40">→</span>
                        </a>
                    </div>
                </div>
            </section>

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
                            Sans rendez-vous de 8h30 à 12h et de 14h30 à 19h.
                            Fermé le mardi après-midi, le dimanche et les jours fériés.
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
                            Les dépôts et enlèvements se font uniquement sur rendez-vous afin
                            de personnaliser l’arrivée et limiter le stress du changement d’environnement.
                        </p>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection