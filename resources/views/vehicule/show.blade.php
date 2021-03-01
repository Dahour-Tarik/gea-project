@extends('layout')

@section('title', 'Clients')

@section('content')


<div class="card text-white bg-secondary mb-3">
    <div class="card-header">Véhicules Clients</div>
    <div class="card-body">
        <h4 class="card-title">{{$voiture->marque}} </h4>
    
        <p class="mb-0">modele : {{$voiture->modele}}</p>
        <p class="mb-0">annee :{{$voiture->annee}}</p>
        <p class="mb-0">immat : {{$voiture->immat}}</p>
       
    </div>
</div>


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




@endsection

