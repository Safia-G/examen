@extends('layout.baseLayout')

@section('content')

<h1>Personnalisez votre t-shirt</h1>

  <div class="panel-body">
    {{ Form::open(['url' => '/insert/product', 'files' => true]) }}
    {{ Form::label('name', 'Choix couleur') }}
    {{ Form::text('name') }}
    {{ Form::label('taille', 'Taille') }}
    {{ Form::select('taille[]', array('multiple' => 'S', 'M', 'L', 'XL')) }}
    {{ Form::label('Image que vous souhaitez insérer') }}
    {{ Form::file('fichier') }}
    {{ Form::submit('Inserer!') }}
    {{ Form::close() }}
  </div>


<br>** : attention si la couleur  est inexistante la couleur par défault sera noire

@endsection
