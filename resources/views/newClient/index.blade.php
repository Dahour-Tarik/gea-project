
@extends('layout')

@section('title', 'Nouveau Client')

@section('content')

    {!! Form::open(['action' => ['ClientController@addNewClient'],'method','POST']) !!}
        
    
        <div class="form-group">
                    {{Form::label('name','Nom')}}
                    {{Form::text('name',null,['class'=>'form-control'])}}
                
        </div>
        <div class="form-group">
                    {{Form::label('prenom','Prenom')}}
                    {{Form::text('prenom',null,['class'=>'form-control'])}}
                
        </div>
        <div class="form-group">
                    {{Form::label('adresse','Adresse')}}
                    {{Form::text('adresse',null,['class'=>'form-control'])}}
                
        </div>
        <div class="form-group">
                    {{Form::label('ville','Ville')}}
                    {{Form::text('ville',null,['class'=>'form-control'])}}
                
        </div>
        <div class="form-group">
                    {{Form::label('telephone','telephone')}}
                    {{Form::text('telephone',null,['class'=>'form-control'])}}
                
        </div>
        <div class="form-group">
                    {{Form::label('email','Email')}}
                    {{Form::text('email','',['class'=>'form-control'])}}
                
        </div>
            {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        
    {!! Form::close() !!} 
   
@endsection