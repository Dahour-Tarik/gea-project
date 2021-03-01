@extends('layout')

@section('title', 'Clients')

@section('content')

<h1>Liste Mecaniciens</h1>

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
                    <a href="{{route('mecaniciens.show', $mecanicien->id)}}" class="btn btn-primary">
                        <i class="fas fa-eye"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection
