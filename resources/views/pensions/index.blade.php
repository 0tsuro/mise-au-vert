@extends('layouts.app')

@section('content')

<h1>Liste des pensions</h1>

<ul>
@foreach($pensions as $pension)
    <li>
        <a href="/pensions/{{ $pension->id }}">
            {{ $pension->ville }} - {{ $pension->responsable }}
        </a>
    </li>
@endforeach
</ul>

@endsection