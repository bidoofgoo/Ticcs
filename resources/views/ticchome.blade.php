@extends('layouts.ticcBase')

@section('background')
<div class="background"
  style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>
@endsection

@section('content')
<main class="flex flexcenter flexmiddle fillings">
  <div class="boop">
    <h1 class="title">Heb ik lyme?</h1>
    <p class="padb-2">Doe de test nu!</p>
    <a class="button" href="{{url('vragenlijst/1')}}" style="font-size: 2rem; padding: 1rem;">🡳</a>
  </div>
</main>
@endsection
