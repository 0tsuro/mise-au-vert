<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mise au Vert')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-cream text-ink antialiased grain-overlay">
    <div class="min-h-screen flex flex-col">
        @include('layouts.navigation')

<main class="flex-1 pt-16">
    @yield('content')
</main>

        <footer class="border-t border-black/[0.06] bg-white/60 backdrop-blur-sm">
            <div class="max-w-7xl mx-auto px-6 lg:px-10 py-12">
                <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-10">
                    <div>
                        <div class="flex items-center gap-2.5 mb-2">
                            <span class="w-5 h-5 rounded-full border border-[#4F6F52]/30 flex items-center justify-center">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#7A9E7E] block"></span>
                            </span>
                            <span class="font-serif-custom text-xl font-light text-ink">Mise au Vert</span>
                        </div>
                        <p class="text-[0.7rem] uppercase tracking-[0.18em] text-sage ml-7">
                            Pensions pour chiens et chats
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-10 text-[0.82rem] text-bark font-light">
                        <div class="flex flex-col gap-1.5">
                            <span class="text-[0.6rem] uppercase tracking-[0.18em] text-sage mb-1">Horaires</span>
                            <span>Lun–Sam · 8h30–12h / 14h30–19h</span>
                            <span>Fermé mardi après-midi, dim. & jours fériés</span>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <span class="text-[0.6rem] uppercase tracking-[0.18em] text-sage mb-1">Contact</span>
                            <span>contact@miseauvert.fr</span>
                            <span>11 pensions en France</span>
                        </div>
                    </div>
                </div>

                <div class="mt-10 pt-6 border-t border-black/[0.05] flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2 text-[0.7rem] text-bark/50">
                    <span>© 2025 Mise au Vert · Tous droits réservés</span>
                    <span class="hidden sm:block w-5 h-px bg-[#C8D8C9]"></span>
                    <span>Accueil des animaux depuis 1976</span>
                </div>
            </div>
        </footer>
    </div>

    @stack('scripts')
</body>
</html>