
@extends('layout')

@section('title', 'nouvelle Voiture')
@section('content')

    {!! Form::open(['action' => ['VehiculeController@addNewVoiture'],'method','POST']) !!}

    
        <div class="form-group">
                    {{Form::label('marque','Marque')}}
                    {{Form::text('marque',null, ['class'=>'form-control'])}}
                
        </div>
        <div class="form-group">
                    {{Form::label('modele','Modele')}}
                    {{Form::text('modele',null, ['class'=>'form-control'])}}
                
        </div>
        <div class="form-group">
                    {{Form::label('annee','Date')}}
                    {{Form::text('annee',null, ['class'=>'form-control'])}}
        </div>
        <div class="form-group">
                    {{Form::label('immat','Matricule')}}
                    {{Form::text('immat',null, ['class'=>'form-control', 'value'=>'2011-08-19', 'id'=>'example-date-input'])}}
                
        </div>
        <div class="form-group">
        
        <label for="nameClient">Propriétaire</label>
            <select class="form-control" id="nameClient" name="element" >
                    @foreach ($clients as $client )
                    <option value="{{$client->id}}"> {{$client->nom}} </option>
                    @endforeach
            </select>
                   
        </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!} 
   
@endsection