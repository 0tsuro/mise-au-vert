@extends('layouts.app')

@section('title', 'Modifier un box')

@section('content')
    <section class="pb-16">
        <div class="max-w-4xl mx-auto px-6 lg:px-10 pt-10">
            <div class="mb-10">
                <a href="{{ route('admin.boxes.index') }}"
                   class="inline-flex items-center gap-2 text-[0.78rem] text-sage hover:text-sage-deep transition-colors mb-6">
                    <span>←</span>
                    Retour aux boxes
                </a>

                <p class="inline-flex items-center gap-2 text-[0.65rem] uppercase tracking-[0.24em] text-sage mb-4">
                    <span class="block w-5 h-px bg-[#C8D8C9]"></span>
                    Administration
                </p>

                <h1 class="font-serif-custom text-[clamp(2.3rem,5vw,4rem)] font-light text-ink leading-[1.05] mb-4">
                    Modifier le box #{{ $box->id }}
                </h1>

                <p class="text-bark max-w-2xl">
                    Mettez à jour les informations de ce box.
                </p>
            </div>

            <div class="bg-white rounded-[1.75rem] p-8 border border-black/[0.05] shadow-sm">
                <form action="{{ route('admin.boxes.update', $box) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="superficie" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Superficie
                        </label>
                        <input
                            type="number"
                            step="0.01"
                            min="0"
                            name="superficie"
                            id="superficie"
                            value="{{ old('superficie', $box->superficie) }}"
                            class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                        >
                        @error('superficie')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="type_gardiennage_id" class="block text-[0.72rem] uppercase tracking-[0.18em] text-sage mb-2">
                            Type de gardiennage
                        </label>
                        <select
                            name="type_gardiennage_id"
                            id="type_gardiennage_id"
                            class="w-full rounded-2xl border border-black/10 px-4 py-3 bg-white focus:outline-none focus:ring-2 focus:ring-[#7A9E7E]"
                        >
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" @selected(old('type_gardiennage_id', $box->type_gardiennage_id) == $type->id)>
                                    {{ $type->libelle }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_gardiennage_id')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-wrap gap-4 pt-4">
                        <button
                            type="submit"
                            class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-sage-deep text-white text-[0.82rem] font-medium tracking-wide hover:bg-sage transition-colors duration-300"
                        >
                            Enregistrer
                            <span class="opacity-50">→</span>
                        </button>
                </form>

                        <form action="{{ route('admin.boxes.destroy', $box) }}" method="POST" onsubmit="return confirm('Supprimer ce box ?');">
                            @csrf
                            @method('DELETE')
                            <button
                                type="submit"
                                class="inline-flex items-center px-6 py-3 rounded-full border border-red-200 text-red-600 text-[0.82rem] font-medium hover:bg-red-50 transition-colors duration-300"
                            >
                                Supprimer
                            </button>
                        </form>
                    </div>
            </div>
        </div>
    </section>
@endsection