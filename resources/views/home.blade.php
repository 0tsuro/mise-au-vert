@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <section class="hero-surface relative w-full min-h-screen flex flex-col items-center justify-center text-center px-6">
        <div class="absolute bottom-0 inset-x-0 h-32 bg-gradient-to-t from-[#F8F5F0] to-transparent pointer-events-none"></div>

        <div class="relative z-10 max-w-3xl mx-auto pt-16">
            <div class="fade-up fade-up-delay-1">
                <span class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.28em] text-white/70 mb-7">
                    <span class="block w-5 h-px bg-white/40"></span>
                    Pensions pour chiens et chats · Depuis 1976
                    <span class="block w-5 h-px bg-white/40"></span>
                </span>
            </div>

            <h1 class="fade-up fade-up-delay-2 font-serif-custom text-[clamp(2.8rem,7vw,5.5rem)] font-light leading-[1.08] text-white mb-8 tracking-[-0.01em]">
                Un séjour <em class="italic text-[#C8D8C9]">serein</em><br>pour votre animal.
            </h1>

            <p class="fade-up fade-up-delay-3 text-[0.95rem] text-white/65 font-light leading-relaxed max-w-lg mx-auto mb-10">
                11 pensions en France, un accueil attentif et des installations pensées
                pour le bien-être de vos compagnons.
            </p>

            <div class="fade-up fade-up-delay-4 flex flex-wrap items-center justify-center gap-3">
                <a href="{{ route('pensions.index') }}" class="inline-flex items-center gap-2 px-7 py-3.5 rounded-full bg-white text-ink text-[0.82rem] font-medium tracking-wide hover:bg-[#F8F5F0] transition-colors duration-300">
                    Découvrir les pensions
                    <span class="opacity-40">→</span>
                </a>
                <a href="{{ route('services') }}" class="inline-flex items-center px-7 py-3.5 rounded-full border border-white/30 text-white text-[0.82rem] tracking-wide hover:border-white/60 hover:bg-white/10 transition-colors duration-300">
                    Voir les services
                </a>
            </div>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/40">
            <span class="text-[0.6rem] uppercase tracking-[0.2em]">Découvrir</span>
            <span class="block w-px h-8 bg-gradient-to-b from-white/30 to-transparent"></span>
        </div>
    </section>

    <section id="engagement" class="max-w-3xl mx-auto px-6 py-28 text-center reveal">
        <div class="leaf-divider text-[0.65rem] uppercase tracking-[0.22em] text-sage mb-10">
            Notre engagement
        </div>
        <p class="font-serif-custom text-[clamp(1.6rem,3.5vw,2.4rem)] font-light text-ink leading-[1.35]">
            Depuis 1976, Mise au Vert accueille chiens et chats dans un cadre calme,
            encadré et pensé pour leur confort — comme pour votre tranquillité d'esprit.
        </p>
    </section>

    <section class="max-w-7xl mx-auto px-6 lg:px-10 pb-28 reveal">
        <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between mb-12 gap-4">
            <div>
                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Formules
                </p>
                <h2 class="font-serif-custom text-[clamp(2rem,4vw,3rem)] font-light text-ink leading-tight">
                    Adaptées à chaque animal
                </h2>
            </div>
            <a href="{{ route('services') }}" class="text-[0.8rem] text-sage underline underline-offset-4 decoration-[#C8D8C9] hover:decoration-sage transition-colors self-start sm:self-auto">
                Voir les services →
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-5">
            <article class="formule-card bg-white rounded-3xl overflow-hidden border border-black/[0.05]">
                <div class="h-52 w-full relative overflow-hidden" style="background: linear-gradient(135deg, #7A9E7E 0%, #5a7a5c 50%, #a8bf8a 100%);">
                    <div class="absolute inset-0 flex items-end p-5">
                        <span class="inline-flex items-center gap-1.5 bg-white/80 backdrop-blur-sm rounded-full px-3 py-1 text-[0.65rem] tracking-[0.1em] uppercase text-sage-deep font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-sage inline-block"></span>
                            Chiens
                        </span>
                    </div>
                </div>
                <div class="p-7">
                    <span class="block font-serif-custom text-5xl font-light text-sage/10 leading-none mb-3 select-none">01</span>
                    <h3 class="font-serif-custom text-xl font-medium text-ink mb-3">Hôtel canin</h3>
                    <p class="text-[0.84rem] text-bark leading-relaxed font-light mb-5">
                        Box intérieur chauffé, cour privative et cadre confortable. Idéal pour les séjours de courte ou longue durée.
                    </p>
                    <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-[0.78rem] text-sage hover:text-sage-deep transition-colors">
                        En savoir plus <span>→</span>
                    </a>
                </div>
            </article>

            <article class="formule-card bg-sage-deep rounded-3xl overflow-hidden border border-sage-deep relative">
                <div class="h-52 w-full relative overflow-hidden" style="background: linear-gradient(135deg, #354D38 0%, #4F6F52 60%, #7A9E7E 100%);">
                    <div class="absolute inset-0 flex items-end p-5">
                        <span class="inline-flex items-center gap-1.5 bg-white/15 backdrop-blur-sm rounded-full px-3 py-1 text-[0.65rem] tracking-[0.1em] uppercase text-white font-medium border border-white/20">
                            <span class="w-1.5 h-1.5 rounded-full bg-[#C8D8C9] inline-block"></span>
                            Chiens
                        </span>
                    </div>
                </div>
                <div class="p-7">
                    <span class="block font-serif-custom text-5xl font-light text-white/10 leading-none mb-3 select-none">02</span>
                    <h3 class="font-serif-custom text-xl font-medium text-white mb-3">Camping canin</h3>
                    <p class="text-[0.84rem] text-white/55 leading-relaxed font-light mb-5">
                        Niche individuelle en extérieur, jardin commun. Pour les chiens qui aiment l'air frais et l'espace.
                    </p>
                    <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-[0.78rem] text-[#C8D8C9] hover:text-white transition-colors">
                        En savoir plus <span>→</span>
                    </a>
                </div>
            </article>

            <article class="formule-card bg-white rounded-3xl overflow-hidden border border-black/[0.05]">
                <div class="h-52 w-full relative overflow-hidden" style="background: linear-gradient(135deg, #b8c9a0 0%, #8aab8c 50%, #6a9470 100%);">
                    <div class="absolute inset-0 flex items-end p-5">
                        <span class="inline-flex items-center gap-1.5 bg-white/80 backdrop-blur-sm rounded-full px-3 py-1 text-[0.65rem] tracking-[0.1em] uppercase text-sage-deep font-medium">
                            <span class="w-1.5 h-1.5 rounded-full bg-sage inline-block"></span>
                            Chats
                        </span>
                    </div>
                </div>
                <div class="p-7">
                    <span class="block font-serif-custom text-5xl font-light text-sage/10 leading-none mb-3 select-none">03</span>
                    <h3 class="font-serif-custom text-xl font-medium text-ink mb-3">Pension féline</h3>
                    <p class="text-[0.84rem] text-bark leading-relaxed font-light mb-5">
                        Espaces calmes, chauffés et aménagés spécifiquement pour le bien-être et la sérénité des chats.
                    </p>
                    <a href="{{ route('services') }}" class="inline-flex items-center gap-1.5 text-[0.78rem] text-sage hover:text-sage-deep transition-colors">
                        En savoir plus <span>→</span>
                    </a>
                </div>
            </article>
        </div>
    </section>

    <section class="bg-[#EAF0EA] border-y border-[#C8D8C9]/60 py-14 reveal">
        <div class="max-w-5xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
            <div>
                <p class="font-serif-custom text-[clamp(2.4rem,5vw,3.5rem)] font-light text-sage-deep leading-none mb-1">11</p>
                <p class="text-[0.72rem] uppercase tracking-[0.18em] text-bark">Pensions en France</p>
            </div>
            <div>
                <p class="font-serif-custom text-[clamp(2.4rem,5vw,3.5rem)] font-light text-sage-deep leading-none mb-1">1976</p>
                <p class="text-[0.72rem] uppercase tracking-[0.18em] text-bark">Année de création</p>
            </div>
            <div>
                <p class="font-serif-custom text-[clamp(2.4rem,5vw,3.5rem)] font-light text-sage-deep leading-none mb-1">3</p>
                <p class="text-[0.72rem] uppercase tracking-[0.18em] text-bark">Formules disponibles</p>
            </div>
            <div>
                <p class="font-serif-custom text-[clamp(2.4rem,5vw,3.5rem)] font-light text-sage-deep leading-none mb-1">∞</p>
                <p class="text-[0.72rem] uppercase tracking-[0.18em] text-bark">Animaux heureux</p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 lg:px-10 py-28 reveal">
        <div class="mb-12">
            <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-3">
                <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                Informations pratiques
            </p>
            <h2 class="font-serif-custom text-[clamp(2rem,4vw,3rem)] font-light text-ink leading-tight">
                Votre visite, simplement
            </h2>
        </div>

        <div class="grid lg:grid-cols-2 gap-5">
            <div class="group bg-white rounded-3xl p-8 border border-black/[0.05] flex gap-6 hover:border-[#C8D8C9] transition-colors duration-300">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 rounded-2xl bg-[#EAF0EA] flex items-center justify-center text-sage group-hover:bg-sage group-hover:text-white transition-colors duration-300">
                        <svg width="18" height="18" fill="none" stroke="currentColor" stroke-width="1.4" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                </div>
                <div>
                    <p class="text-[0.62rem] uppercase tracking-[0.2em] text-sage mb-2">Visites libres</p>
                    <h3 class="font-serif-custom text-xl font-medium text-ink mb-2 leading-snug">Venez découvrir les installations</h3>
                    <p class="text-[0.84rem] text-bark leading-relaxed font-light">
                        Sans rendez-vous, de 8h30 à 12h et de 14h30 à 19h.
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
                    <p class="text-[0.62rem] uppercase tracking-[0.2em] text-sage mb-2">Dépôts & enlèvements</p>
                    <h3 class="font-serif-custom text-xl font-medium text-ink mb-2 leading-snug">Sur rendez-vous uniquement</h3>
                    <p class="text-[0.84rem] text-bark leading-relaxed font-light">
                        Pour limiter le stress de votre animal et personnaliser chaque arrivée avec le soin qu'elle mérite.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 lg:px-10 pb-28 reveal">
        <div class="relative bg-sage-deep rounded-[2rem] overflow-hidden px-8 md:px-16 py-16 md:py-20 text-center">
            <div class="absolute inset-0 pointer-events-none" style="background: radial-gradient(ellipse 80% 100% at 50% -10%, rgba(122,158,126,0.3) 0%, transparent 65%), radial-gradient(ellipse 60% 60% at 10% 110%, rgba(30,37,31,0.4) 0%, transparent 60%)"></div>

            <div class="absolute top-8 right-10 grid grid-cols-5 gap-2 opacity-10 pointer-events-none">
                @for($i = 0; $i < 25; $i++)
                    <span class="w-1 h-1 rounded-full bg-white block"></span>
                @endfor
            </div>

            <div class="relative z-10 max-w-xl mx-auto">
                <div class="leaf-divider text-[0.62rem] uppercase tracking-[0.24em] text-white/40 mb-8">
                    Trouver une pension
                </div>
                <h2 class="font-serif-custom text-[clamp(2rem,4.5vw,3.2rem)] font-light text-white leading-snug mb-5">
                    Choisissez la pension<br>qui correspond à votre animal
                </h2>
                <p class="text-[0.88rem] text-white/50 font-light leading-relaxed mb-10 max-w-md mx-auto">
                    Consultez nos pensions, leurs informations et leurs tarifs avant de prendre contact.
                </p>
                <a href="{{ route('pensions.index') }}" class="inline-flex items-center gap-2 px-8 py-4 rounded-full bg-white text-ink text-[0.84rem] font-medium tracking-wide hover:bg-[#F8F5F0] transition-colors duration-300">
                    Voir toutes les pensions
                    <span class="opacity-40">→</span>
                </a>
            </div>
        </div>
    </section>
@endsection