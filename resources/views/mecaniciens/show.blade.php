@extends('layout')

@section('title', 'Clients')

@section('content')


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">
        <h4 class="card-title">{{$mecanicien->nom}} {{$mecanicien->prenom}}</h4>
    </div>
    <div class="card-body">
        <p class="mb-0">Mécanicien pour Grand Est Automobile</p>
    </div>
</div>

<!-- Affichage de la liste des véhicules liés à un Mécanicien -->
@if(count($voitures)) 
<div class="card text-white bg-secondary mb-3">
    <div class="card-header">Véhicules</div>
    <div class="card-body">
        <ul>
            @foreach ($voitures as $voiture)
                <li>
                    {{$voiture->marque}} {{$voiture->modele}} {{$voiture->annee}} - {{$voiture->immat}}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endif

@endsection
