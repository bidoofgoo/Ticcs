<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vragenlijst;

class VragenlijstController extends Controller
{
  public function naarVragenLijst($id){
    if ($id > 3) {
      // code...
    }else{
      $vraag = Vragenlijst::find($id);
      return view('vragenlijst.vraag', ['id' => $id,'vraag' => $vraag]);
    }
  }
}
