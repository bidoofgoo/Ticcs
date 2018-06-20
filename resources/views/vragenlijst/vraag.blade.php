@extends('layouts.ticcBase')

@section('background')
<div class="background"
  style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>
@endsection

@section('content')
<main class="flex flexcenter flexmiddle fillings">
  <div class="boop">
    <h1 style="display: inline;">{{ $vraag->vraag}}</h1>
    <a class="information" style="vertical-align: top; margin-left: .5rem;" target="_blank" href="{{$vraag->info_link}}">i</a>
    <img style="display:block; margin: 2rem auto;" class="marb-2 vraagimage" height="300"
      src="{{ asset( 'public/img/' . $vraag->afbeelding_link )}}">
    <div class="poop">
      <a class="button marb-2" href="{{url('vragenlijst/' . ($id + 1))}}" style="font-size: 1.5rem;">Ja</a>
      <a class="button marb-2" href="{{url('vragenlijst/' . ($id + 1))}}" style="font-size: 1.5rem;">Weet ik niet</a>
      <a class="button marb-2" href="{{url('vragenlijst/' . ($id + 1))}}" style="font-size: 1.5rem;">Nee</a>
    </div>
  </div>
</main>
@endsection
