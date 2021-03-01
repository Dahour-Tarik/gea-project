@extends('layout')

@section('title', 'Clients')

@section('content')

<div class="form-group">

<h1>Liste Clients</h1>

<form action="{{ route('searchClient.search')}}" class="d-flex">
        <input class="form-control me-2 mr-1" name="q" type="search" placeholder="Ville" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
</form>
</div>

<table class="table table-hover table-light border border-secondary">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col" style="width:100px">Voir</th>
            <th scope="col" style="width:100px">Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <th scope="row">{{$client->id}}</th>
                <td>{{$client->nom}}</td>
                <td>{{$client->prenom}}</td>
                <td>
                    <a href="{{route('clients.show', $client->id)}}" class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
                <td>
                    <a href="/removeClients/{{$client->id}}" class="btn btn-danger">
                        <i class="fas fa-user-slash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
