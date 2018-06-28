<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <title>Resultaten</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://fonts.googleapis.com/css?family=Kreon:300,400|Open+Sans" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('public/css/resultaten.css')}}">
</head>
<body>
   <header style="display: flex; justify-content: space-between;">
      <h2>Heb ik lyme? Resultaten lijst.</h2>
      <a onclick="window.print()" style="vertical-align: middle; cursor:pointer;">Print resultaten</a>
   </header>
   <main>
      <h3>Informatie</h3>
      <p style="padding-bottom: 1rem;">Deze vragenlijst is uitsluitend bedoelt ter inlichting van een persoon met klachten
      en doet hierop het advies om deze pagina mee te nemen naar de huisarts. Bij de huisarts zal u verder worden ondersteund.
      Deze pagina is op te sturen via de url of uit te draaien.<br><br>
      Als u besluit om niet deze lijst mee te nemen, dan is het van uiterst belang dat u de kernzaken noemt die hier onder staan vermeld.
      Deze punten zijn fundamenteel aan het stellen van een juiste diagnose.</p>
      <h3>Hoofdpunten:</h3>
      <ul>
         @foreach($alleVragen as $vraag)
            <?php $data = $_GET['vraag' . ($loop->index+1)] ?>
            @if( $loop -> index == 0)
               @if($data == "true")
               <li>Patiënt is afgelopen jaar gebeten door een teek.</li>
               @elseif($data == "null")
               <li>Patiënt weet niet of hij/zij afgelopen jaar is gebeten door een teek.</li>
               @else
               <li>Patiënt is niet gebeten door een teek in het afgelopen jaar.</li>
               @endif
            @elseif($loop -> index == 1)
               @if($data == "true")
                  <li>Patiënt heeft een kring op zijn huid gevonden.</li>
               @elseif($data == "null")
                  <li>Patiënt weet niet of hij/zij last heeft gehad van een kring op de huid.</li>
               @else
                  <li>Patiënt heeft geen last gehad van een kring op de huid.</li>
               @endif
            @elseif($loop -> index == 2)
               @if($data == "true")
                  <li>Patiënt heeft eerder last gehad van lyme.</li>
               @elseif($data == "null")
                  <li>Patiënt weet niet of hij/zij eerder last heeft gehad van lyme.</li>
               @else
                  <li>Patiënt heeft niet eerder last gehad van lyme.</li>
               @endif
            @endif

            @if($loop->index > 2)
               @if($data != "false")
                  <li>{{$vraag -> vraag}}</li>
               @endif
            @endif
            @if( $loop->index == 2 )
      </ul>
      <h3>Verder heeft de patiënt last van:</h3>
      <ul>
            @endif
         @endforeach
      </ul>
   </main>
</body>
</html>
