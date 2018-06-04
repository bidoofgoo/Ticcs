@extends('layouts.ticcBase')

@section('background')
<div class="background"
  style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>
@endsection

@section('content')
<main class="flex flexcenter flexmiddle fillings">
  <div class="boop">
    <h1 class="padb-2">Bent u in de afgelopen 6 maanden gebeten door een teek?</h1>
    <a class="button marb-2" href="{{url('vragenlijst')}}" style="font-size: 1.5rem;">Ja</a>
    <a class="button marb-2" href="{{url('vragenlijst')}}" style="font-size: 1.5rem;">Nee</a>
    <a class="button" href="{{url('vragenlijst')}}" style="font-size: 1.5rem;">Weet ik niet</a>
  </div>
</main>
@endsection
