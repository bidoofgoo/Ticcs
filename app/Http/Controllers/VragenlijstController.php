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
         $alleVragen = Vragenlijst::all();
         return view('vragenlijst.vraag', ['id' => $id,'vraag' => $vraag,
         'alleVragen' => $alleVragen, 'data' => null]);
      }
   }

   public function naarVragenLijstPost(Request $req, $id){
      if ($id > 3) {
         return $this->VragenPost($req);
      }else{
         $vraag = Vragenlijst::find($id);
         $alleVragen = Vragenlijst::all();
         return view('vragenlijst.vraag', ['id' => $id,'vraag' => $vraag,
         'alleVragen' => $alleVragen, 'data' => $req]);
      }
   }

   public function Vragen(){
      $vragen = DB::table('vragen')->where('id', '>', 3)->get();
      $alleVragen = Vragenlijst::all();
      return view('vragenlijst.vragenlijst', ['vragen'=> $vragen,
      'alleVragen'=>$alleVragen, 'data' => null]);
   }

   public function VragenPost(Request $req){
      $vragen = DB::table('vragen')->where('id', '>', 3)->get();
      $alleVragen = Vragenlijst::all();
      return view('vragenlijst.vragenlijst', ['vragen'=> $vragen,
      'alleVragen'=>$alleVragen, 'data' => $req]);
   }

   public function einde(){
      return view('einde');
   }
}
