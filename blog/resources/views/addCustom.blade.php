@extends('layout.baseLayout')

@section('content')

<h1>Ajouter un Tshirt a votre panier</h1>


  <div class="panel-body">
    {{ Form::open(['url' => '/insert/custom']) }}
    {{ Form::label('name', 'Choix couleur') }}
    {{ Form::text('name') }}
    {{ Form::submit('Inserer!') }}
    {{ Form::close() }}
  </div>

@endsection
