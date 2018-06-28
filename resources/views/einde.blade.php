@extends('layouts.ticcBase')

@section('background')
<div class="background"
  style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>
@endsection

@section('content')
<main class="flex flexcenter flexmiddle fillings">
  <div class="boop">
    <h1 >De vragenlijst is geopend op een nieuwe pagina.</h1>
    <h1 style="margin-bottom: 2rem;">Wij hopen dat we ondersteuning hebben kunnen bieden bij uw problemen.</h1>
    <a class="button" href="{{url('vragenlijst/1')}}" style="font-size: 2rem; padding: 1rem; width: 20rem;"> Doe de test opnieuw </a>
  </div>
</main>
@endsection
