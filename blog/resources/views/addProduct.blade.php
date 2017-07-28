@extends('layout.baseLayout')

@section('content')

<h1>Personnalisez votre t-shirt</h1>

  <div class="panel-body">
    {{ Form::open(['url' => '/insert/product', 'files' => true]) }}
    {{ Form::label('modele', 'Choisissez une couleur :') }}
    {{ Form::text('modele') }}
    {{ Form::label('custom', 'Quelle est votre taille ?') }}
    {{ Form::select('custom', [$customs]) }}
    {{ Form::label('L\'image que vous souhaitez insérer') }}
    {{ Form::file('fichier') }}
    {{ Form::submit('Inserer!') }}
    {{ Form::close() }}
  </div>


<br>** : attention si la couleur  est inexistante la couleur par défault sera noire

@endsection
