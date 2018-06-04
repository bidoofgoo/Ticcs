<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VragenlijstController extends Controller
{
  public function naarVragenLijst(){
    return view('vragenlijst.vraag');
  }
}
