@extends('layouts.ticcBase')

@section('background')
<div class="background"
  style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>
@endsection

@section('content')
<main class="flex flexcenter flexmiddle fillings">
  <div class="boop">
    <h1 class="padb-2">{{ $vraag->vraag}}</h1>
    <img height="300" src="{{ $vraag->afbeelding_link}}">
    <a class="button marb-2" href="{{url('vragenlijst/' . ($id + 1))}}" style="font-size: 1.5rem;">Ja</a>
    <a class="button marb-2" href="{{url('vragenlijst/' . ($id + 1))}}" style="font-size: 1.5rem;">Nee</a>
    <a class="button" href="{{url('vragenlijst/' . ($id + 1))}}" style="font-size: 1.5rem;">Weet ik niet</a>
  </div>
</main>
@endsection
