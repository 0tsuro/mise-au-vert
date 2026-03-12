<nav x-data="{ open: false }" id="navbar" class="fixed top-0 inset-x-0 z-50 bg-transparent transition-all duration-300">
    <div class="max-w-7xl mx-auto px-6 lg:px-10 h-16 flex items-center justify-between">

        <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
            <span class="w-6 h-6 rounded-full border border-[#4F6F52]/40 flex items-center justify-center">
                <span class="w-2 h-2 rounded-full bg-[#7A9E7E] block"></span>
            </span>
            <span class="font-serif-custom text-lg font-light tracking-wide text-ink leading-none">
                Mise au Vert
            </span>
        </a>

        <div class="hidden md:flex items-center gap-8">
            <a href="{{ route('pensions.index') }}" class="text-[0.8rem] tracking-[0.06em] text-ink/70 hover:text-sage transition-colors duration-200">
                Pensions
            </a>
            <a href="{{ route('services') }}" class="text-[0.8rem] tracking-[0.06em] text-ink/70 hover:text-sage transition-colors duration-200">
                Services
            </a>
            <a href="{{ route('home') }}#engagement" class="text-[0.8rem] tracking-[0.06em] text-ink/70 hover:text-sage transition-colors duration-200">
                À propos
            </a>
            <a href="{{ route('contact') }}" class="text-[0.8rem] tracking-[0.06em] text-ink/70 hover:text-sage transition-colors duration-200">
                Contact
            </a>
        </div>

        <div class="hidden md:flex items-center gap-3">
            @auth
                <a href="{{ route('admin.dashboard') }}"
                   class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full border border-[#4F6F52]/20 text-ink text-[0.78rem] tracking-wide hover:border-[#4F6F52]/40 transition-colors duration-300">
                    Dashboard
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button
                        type="submit"
                        class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full bg-sage-deep text-white text-[0.78rem] tracking-wide hover:bg-sage transition-colors duration-300">
                        Déconnexion
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}"
                   class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full border border-[#4F6F52]/20 text-ink text-[0.78rem] tracking-wide hover:border-[#4F6F52]/40 transition-colors duration-300">
                    Connexion
                </a>

                <a href="{{ route('register') }}"
                   class="inline-flex items-center gap-1.5 px-5 py-2.5 rounded-full bg-sage-deep text-white text-[0.78rem] tracking-wide hover:bg-sage transition-colors duration-300">
                    Inscription
                </a>
            @endauth
        </div>

        <button @click="open = !open" class="md:hidden w-8 h-8 flex flex-col justify-center gap-1.5 items-end" aria-label="Menu">
            <span class="block h-px w-6 bg-ink"></span>
            <span class="block h-px w-4 bg-ink"></span>
        </button>
    </div>

    <div x-show="open" x-transition class="md:hidden bg-[#F8F5F0]/95 backdrop-blur border-t border-black/5">
        <div class="px-6 py-5 flex flex-col gap-4">
            <a href="{{ route('pensions.index') }}" class="text-sm text-ink/80">Pensions</a>
            <a href="{{ route('services') }}" class="text-sm text-ink/80">Services</a>
            <a href="{{ route('home') }}#engagement" class="text-sm text-ink/80">À propos</a>
            <a href="{{ route('contact') }}" class="text-sm text-ink/80">Contact</a>

            <div class="pt-4 border-t border-black/5 flex flex-col gap-3">
                @auth
                    <a href="{{ route('admin.dashboard') }}" class="text-sm text-ink/80">Dashboard</a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-left text-sm text-ink/80">
                            Déconnexion
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-ink/80">Connexion</a>
                    <a href="{{ route('register') }}" class="text-sm text-ink/80">Inscription</a>
                @endauth
            </div>
        </div>
    </div>
</nav>