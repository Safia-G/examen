@extends('layout.baseLayout')

@section('content')

<h1>Modifier ma commande</h1>

  <div class="panel-body">
    {{ Form::open(['url' => '/update/product/action']) }}
    {{ Form::label('modele', 'Modifier couleur') }}
    {{ Form::text('modele', $modele) }}
    {{ Form::label('custom', 'Modifier taille :') }}
    {{ Form::select('custom', [$customs]) }}
    {{ Form::hidden('id', $id) }}
    {{ Form::label('L\'image à modifier') }}
    {{ Form::file('fichier') }}
    {{ Form::submit('Modifier!') }}
    {{ Form::close() }}
  </div>

@endsection
