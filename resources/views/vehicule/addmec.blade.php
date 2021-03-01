@extends('layout')

@section('title', 'Clients')

@section('content')


<div class="card text-white bg-secondary mb-3">
<div class="card-header">Véhicules Clients</div>
    <div class="card-body">
    <h4 class="card-title">{{$voiture->marque}} </h4>
    
        
</div>
</div>


<div class="card text-white bg-secondary mb-3">
<form method="post" action="{{ route('vehicule.store') }}" enctype="multipart/form-data">
@csrf
<table class="table table-hover table-light border border-secondary">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col" style="width:100px">Voir</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mecaniciens as $mecanicien)
            <tr>
                <th scope="row">{{$mecanicien->id}}</th>
                <td>{{$mecanicien->nom}}</td>
                <td>{{$mecanicien->prenom}}</td>
                <td>
                <label><input type="checkbox" name="mecanicien[]" value="{{$mecanicien->id}}"></label>
                </td>
                
            </tr>
        @endforeach
    </tbody>
</table>
<input type="text"  name="voiture" hidden value="{{$voiture->id}}">
<div class="form-group text-center">
    <button type="submit" class="btn btn-primary btn-sm">Affecter</button>
</div>

</form>

</div>

<!--Select * from vehiculeMecaniciens where vehicule_id in $vehicules[] join vehicules on vehicules_id =vehicules.id-->


@endsection
