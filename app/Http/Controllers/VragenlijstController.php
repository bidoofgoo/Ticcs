<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vragenlijst;
use DB;

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
    $vragen = DB::table('vragen')->where('id', '>', 3)->get();
    return view('vragenlijst.vragenlijst', ['vragen'=> $vragen]);
  }

  public function einde(){
    return view('einde');
  }
}
