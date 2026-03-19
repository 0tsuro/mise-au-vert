@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <section class="pb-16">
        <div class="max-w-7xl mx-auto px-6 lg:px-10 pt-10">
            <div class="mb-12">
                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Administration
                </p>

                <h1 class="font-serif-custom text-[clamp(2.4rem,5vw,4.2rem)] font-light text-ink leading-[1.05] mb-5">
                    Tableau de bord
                </h1>

                <p class="text-[0.95rem] text-bark leading-relaxed max-w-2xl">
                    Gérez les informations de votre pension, vos tarifs et vos boxes depuis cet espace.
                </p>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-6">
                <article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                        Fiche pension
                    </span>

                    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                        Modifier ma pension
                    </h2>

                    <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
                        Mettez à jour les informations visibles sur votre fiche publique, ainsi que la photo principale.
                    </p>

                    <a href="{{ route('admin.pension.edit') }}"
                       class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
                        Accéder à la fiche
                        <span>→</span>
                    </a>
                </article>

                <article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                        Tarification
                    </span>

                    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                        Gérer mes tarifs
                    </h2>

                    <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
                        Modifiez les tarifs de votre pension pour chaque type de gardiennage.
                    </p>

                    <a href="{{ route('admin.tarifs.edit') }}"
                       class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
                        Accéder aux tarifs
                        <span>→</span>
                    </a>
                </article>

                <article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
                    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
                        Hébergements
                    </span>

                    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
                        Gérer mes boxes
                    </h2>

                    <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
                        Consultez, créez et modifiez les boxes rattachés à votre pension.
                    </p>

                    <a href="{{ route('admin.boxes.index') }}"
                       class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
                        Accéder aux boxes
                        <span>→</span>
                    </a>
                </article>
                <article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
        Réservations
    </span>

    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
        Voir les séjours
    </h2>

    <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
        Consultez les animaux attendus, présents ou déjà partis dans votre pension.
    </p>

    <a href="{{ route('admin.reservations.index') }}"
       class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
        Accéder aux séjours
        <span>→</span>
    </a>
</article>
<article class="formule-card bg-white rounded-[1.75rem] p-7 border border-black/[0.05] shadow-sm">
    <span class="block text-[0.62rem] uppercase tracking-[0.18em] text-sage mb-3">
        Facturation
    </span>

    <h2 class="font-serif-custom text-2xl font-light text-ink mb-4">
        Séjours à facturer
    </h2>

    <p class="text-[0.9rem] text-bark leading-relaxed mb-6">
        Consultez les séjours terminés non réglés et leur montant estimé.
    </p>

    <a href="{{ route('admin.facturation.index') }}"
       class="inline-flex items-center gap-2 text-[0.82rem] text-sage hover:text-sage-deep transition-colors">
        Accéder à la facturation
        <span>→</span>
    </a>
</article>
            </div>
        </div>
    </section>
@endsection