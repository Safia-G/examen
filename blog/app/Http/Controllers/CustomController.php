<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Custom as Custom;

class CustomController extends Controller
{
  public function addCustom() {
  $customs = Custom::all();
  $return = array();
  foreach ($customs as $custom) {
    array_push($return, $custom->taille);
  }
  return view('addCustom', ['customs' => $return]);
  }
  public function insertCustom(Request $request) {
  $custom = new Custom;
  $custom->taille = $request->taille;
  $custom->save();
  return redirect('/add/custom');
  }
}
