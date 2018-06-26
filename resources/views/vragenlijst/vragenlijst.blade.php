<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Ticcs</title>
   <link rel="shortcut icon" href="{{ asset('public/img/fav.png') }}">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link href="https://fonts.googleapis.com/css?family=Kreon:300,400|Open+Sans" rel="stylesheet">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <link href="{{ asset('public/css/rickstrap.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/ticchome.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/ticc.css') }}" rel="stylesheet">
   <link href="{{ asset('public/css/vragen2.css') }}" rel="stylesheet">
   <script type="text/javascript" src="{{ asset('public/js/script.js') }}"></script>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

   <!-- Popper JS -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
   <div class="background"
   style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>

   <div class="popup">
      <h3>Klik op de symptomen die u heeft. Als u klaar bent, klikt u op de klaar knop. </h3>
   </div>

   <a class="klaarknop" href="{{url('einde')}}" onclick="
      event.preventDefault();
      document.getElementsByTagName('form')[0].submit();">Klaar</a>

   <div class="row" style="margin-top: 3rem;">

      <div class="col-lg-9" id="colRight">
         <div class="row halfvh">
            <?php $vraagno = 0; ?>
            @foreach($vragen as $vraag)
            <div class="col-md-4 vraag" data-vraagno="{{$vraagno + 4}}"
            style="background-image: url('{{ asset('public/img/icons/' . $vraag->afbeelding_link) }}');">
               <h2>{{$vraag->vraag}} <a target="_blank" class="information2"
                  href="{{$vraag->info_link}}" style="vertical-align:top;">i</a></h2>
            </div>
            @if($vraagno % 3 == 3 - 1 && $vraagno != 0 && !$loop->last )
         </div>
         <div class="row halfvh">
            @endif
            <?php $vraagno++; ?>
            @endforeach
         </div>
      </div>
   </div>
   <footer class="row" style="height: 2.5rem;">

   </footer>
   <form style="display:none;" action="{{url('resultaat')}}" method="post">
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
</body>
</html>
