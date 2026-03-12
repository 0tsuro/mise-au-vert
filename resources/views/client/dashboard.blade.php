@extends('layouts.app')

@section('title', 'Mon espace')

@section('content')
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 pt-10">
            <div class="mb-12">
                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Espace client
                </p>

                <h1 class="font-serif-custom text-[clamp(2.4rem,5vw,4.2rem)] font-light text-ink leading-[1.05] mb-5">
                    Mon espace
                </h1>

                <p class="text-[0.95rem] text-bark leading-relaxed max-w-2xl">
                    Retrouvez ici vos informations, vos animaux et vos futurs séjours.
                </p>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                <article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                        Animaux
                    </span>

                    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                        Mes animaux
                    </h2>

                    <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
                        Gérez les animaux enregistrés sur votre compte.
                    </p>
<a href="{{ route('client.animaux.index') }}" class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
    Accéder
    <span>→</span>
</a>
                </article>

                <article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                        Séjours
                    </span>

                    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                        Mes séjours
                    </h2>

                    <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
                        Consultez les séjours passés ou à venir de vos animaux.
                    </p>

                    <a href="#" class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
                        Accéder
                        <span>→</span>
                    </a>
                </article>

                <article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                        Compte
                    </span>

                    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                        Mon profil
                    </h2>

                    <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
                        Modifiez vos informations personnelles.
                    </p>

                    <a href="{{ route('profile.edit') }}" class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
                        Accéder
                        <span>→</span>
                    </a>
                </article>
            </div>
        </div>
    </section>
@endsection