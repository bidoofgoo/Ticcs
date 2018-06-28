@extends('layouts.ticcBase')

@section('background')
<div class="background"
  style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>
@endsection

@section('content')
<div class="⬛" onclick="this.style.display = 'none';">
   <iframe class="🍆" src="{{$vraag->info_link}}"></iframe>
   <p class="❌">x</p>
</div>
<main class="flex flexcenter flexmiddle fillings">
  <div class="boop">
    <h1 style="display: inline;">{{ $vraag->vraag}}</h1>
    <a class="information" style="vertical-align: top; margin-left: .5rem;" target="_blank"
    onclick="event.preventDefault();
            document.getElementsByClassName('⬛')[0].style.display = 'flex';" href="{{$vraag->info_link}}">i</a>
    <img style="display:block; margin: 2rem auto;" class="marb-2 vraagimage" height="300"
      src="{{ asset( 'public/img/' . $vraag->afbeelding_link )}}">
    <div class="poop">
      <a class="button marb-2" href="{{url('vragenlijst/' . ($id + 1))}}"
      onclick="
         event.preventDefault();
         document.getElementById('formVraag{{$id}}').value = 'true';
         document.getElementsByTagName('form')[0].submit();" style="font-size: 1.5rem;">Ja</a>
      <a class="button marb-2" href="{{url('vragenlijst/' . ($id + 1))}}"
         onclick="
            event.preventDefault();
            document.getElementsByTagName('form')[0].submit();" style="font-size: 1.5rem;">Weet ik niet</a>
      <a class="button marb-2" href="{{url('vragenlijst/' . ($id + 1))}}"
         onclick="
            event.preventDefault();
            document.getElementById('formVraag{{$id}}').value = 'false';
            document.getElementsByTagName('form')[0].submit();" style="font-size: 1.5rem;">Nee</a>
    </div>

    <div class="bottom" style="display:flex; justify-content:center;">
       @for($i = 0; $i < 4; $i++)
          <h2 style="margin: 0.5rem; cursor: default;">
             @if($i == ($id - 1))
                ⬤
             @else
                🞅
             @endif
          </h2>
       @endfor
    </div>
  </div>
</main>

<form style="display:none;" action="{{url('vragenlijst/'. ($id + 1))}}" method="post">
   @csrf
   @foreach($alleVragen as $vraag)
      @if( $data == null)
         @if(!($loop->index >= 3))
            <input id="formVraag{{$vraag->id}}" type="text" name="vraag{{ $vraag->id }}" value="null">
         @else
            <input id="formVraag{{$vraag->id}}" type="text" name="vraag{{ $vraag->id }}" value="false">
         @endif
      @else
         <input id="formVraag{{$vraag->id}}" type="text" name="vraag{{ $vraag->id }}" value="{{$data->input('vraag' . $vraag->id )}}">
      @endif
   @endforeach
</form>
@endsection
