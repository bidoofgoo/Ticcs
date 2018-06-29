@extends('layouts.ticcBase')

@section('background')
<div class="background"
  style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>
@endsection

@section('content')
<main class="flex flexcenter flexmiddle fillings">
  <div class="boop">
    <h1 >De resultaten zijn geopend in een nieuw tabblad.</h1>
    <h1 style="margin-bottom: 2rem;">Wij hopen dat we ondersteuning hebben kunnen bieden bij uw problemen.</h1>
    <a class="button" href="{{url('/')}}" style="font-size: 1.5rem; padding: 1rem; width: 20rem;">Terug naar home</a>
  </div>
</main>
@endsection
