@extends('layout')

@section('title', 'Voiture')

@section('content')

<h1>Liste Voitures</h1>

<table class="table table-hover table-light border border-secondary">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Marque</th>
            <th scope="col">Matricule</th>
            <th scope="col" style="width:100px">Propriétaire</th>
            <th scope="col" style="width:100px">Déléguer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($voitures as $voiture)
            <tr>
                <th scope="row">{{$voiture->id}}</th>
                <td>{{$voiture->marque}}</td>
                <td>{{$voiture->immat}}</td>
                <td>
                    <a href="{{route('vehicule.show', $voiture->id)}}" class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
                <td>
                    <a href="{{route('vehicule.addmec', $voiture->id)}}" class="btn btn-primary">
                    <i class="fas fa-tools"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>



@endsection