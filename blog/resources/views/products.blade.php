@extends('layout.baseLayout')

@section('content')

<div class="products_list">
<h1>Liste des T-shirt</h1>
    <div class="products">

      <table>
        <tr>
          <th>TShirt</th>
          <th>Taille</th>
          <th>Image selectionnée</th>
          <th>Modifier/Supprimer</th>
        </tr>

      @foreach ($products as $product)
        <tr>
        <td class="tshirt">{{ $product['modele'] }}</td>
          <td>  @foreach ($product['custom'] as $custom)
           {{ $custom }}
         @endforeach</td>
          <td><img class="fichier" src="{{{ URL::asset($product['fichier']) }}}" alt=""></td>
        <td>
        {{ Form::open(['url' => '/delete/product']) }}
        {{ Form::hidden('id', $product['id']) }}
        {{ Form::submit('Supprimer', ['class' => 'supprimer']) }}
        {{ Form::close() }}
        {{ Form::open(['url' => '/update/product']) }}
        {{ Form::hidden('id', $product['id']) }}
        {{ Form::submit('Modifier', ['class' => 'modifier']) }}
        {{ Form::close() }}
        </td>
      </tr>
      @endforeach
    </table>

    </div>
</div>
@endsection
