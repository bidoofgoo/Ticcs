<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vragenlijst;

class VragenlijstController extends Controller
{
  public function naarVragenLijst($id){
    if ($id > 3) {
      return $this->Vragen();
    }else{
      $vraag = Vragenlijst::find($id);
      return view('vragenlijst.vraag', ['id' => $id,'vraag' => $vraag]);
    }
  }

  public function Vragen(){
    return view('vragenlijst');
  }

  public function einde(){
    return view('einde');
  }
}
