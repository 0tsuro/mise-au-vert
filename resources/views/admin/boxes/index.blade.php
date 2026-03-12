@extends('layouts.app')

@section('title','Mes boxes')

@section('content')

<section class="max-w-6xl mx-auto px-6 pt-10">

<h1 class="text-3xl font-light mb-8">Gestion des boxes</h1>

<a href="{{ route('admin.boxes.create') }}"
class="mb-6 inline-block px-5 py-2 bg-sage text-white rounded-full">
Créer un box
</a>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

@foreach($pension->boxes as $box)

<div class="bg-white rounded-xl p-6 border">

<h2 class="text-xl mb-2">Box #{{ $box->id }}</h2>

<p>Superficie : {{ $box->superficie }} m²</p>

<p>Type : {{ $box->typeGardiennage->libelle }}</p>

<a href="{{ route('admin.boxes.edit',$box) }}">Modifier</a>

</div>

@endforeach

</div>

</section>

@endsection