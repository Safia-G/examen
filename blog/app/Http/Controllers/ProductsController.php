<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product as Product;
use App\Custom as Custom;

class ProductsController extends Controller
{
  public function index()
{
$products = Product::all();
$value = array();
$i = 0;
foreach ($products as $product) {
  array_push($value, [
    "modele" => $product->modele,
    "custom" => array(),
    "id" => $product->id,
    "fichier" =>$product->fichier,
  ]
);
  foreach ($product->customs as $custom)
  {
    array_push($value[$i]["custom"], $custom->taille);
  };
  $i ++;
};
return view('products', ["products" => $value]);
}
public function addProduct() {
  $customs = Custom::all();
  $customsList = array();
  foreach ($customs as $custom) {
    $customsList[$custom->id] = $custom->taille;
  }
  return view('addProduct', ['customs' => $customsList]);
}
public function insertProduct(Request $request) {
  // var_dump($request->custom);die;
  $store = $request->fichier->store('public/img');
  $store = str_replace("public", "storage", $store);
  $product = new Product;
  $product->modele = $request->modele;
  $product->custom = $request->custom;
  $product->fichier = $store;
  $product->save();
  return redirect('/products');
}
public function deleteProduct(Request $request) {
  $product = Product::find($request->id);
  $product->customs()->detach();
  $product->delete();
  return redirect('/products');
}
public function updateProduct(Request $request) {
  $product = Product::find($request->id);
  $customs = Custom::all();
  $customsList = array();
  foreach ($customs as $custom) {
    $customsList[$custom->id] = $custom->taille;
  }

  return view('updateProduct', ['modele' => $product->modele, 'customs' => $customsList, 'id' => $product->id]);
}
public function updateProductAction(Request $request) {
  $product = Product::find($request->id);
  $product->modele = $request->modele;
  $product->save();

  $product->customs()->detach();
  $product->customs()->attach($request->custom);
  return redirect('/products');
  }
}
