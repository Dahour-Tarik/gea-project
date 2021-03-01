@extends('layout')

@section('title', 'Clients')

@section('content')


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">
        <h4 class="card-title">{{$client->nom}} {{$client->prenom}}</h4>
    </div>
    <div class="card-body">
        <p class="mb-0">Adresse : {{$client->adresse}}</p>
        <p>{{$client->ville}}</p>
        <p>Téléphone : {{$client->telephone}}</p>
        <p>Mail : {{$client->email}}</p>
    </div>
</div>


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">Véhicules Clients</div>
    <div class="card-body">
        <ul>
            @foreach ($client->voitures as $voiture)
                <li>
                    {{$voiture->marque}} {{$voiture->modele}} {{$voiture->annee}} - {{$voiture->immat}}
                </li>
            @endforeach
        </ul>
    </div>
</div>
<div class="card text-white bg-secondary mb-3">
    <div class="card-header">Mecaniciens en contact</div>
    <div class="card-body">
        <ul>
            @foreach ($infoMacaniciens as $mecanicien)
                <li>
                    {{$mecanicien->nom}} {{$mecanicien->prenom}}
                </li>
            @endforeach
        </ul>
    </div>
</div>





@endsection
