@extends('layouts.app')

@section('content')

<h1>Pension de {{ $pension->ville }}</h1>

<p>Responsable : {{ $pension->responsable }}</p>
<p>Adresse : {{ $pension->adresse }}</p>
<p>Téléphone : {{ $pension->telephone }}</p>

<a href="/pensions">Retour</a>

@endsection