<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ticcs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Kreon:300,400|Open+Sans" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('public/css/rickstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/ticchome.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/ticc.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/vragen.css') }}" rel="stylesheet">

  </head>
  <body>
    <div class="background" style="background: radial-gradient(rgba(0,0,0,0.35), rgba(0, 0, 0, 0.75)), url('{{ asset('public/img/grayboi.png')}}');"></div>
    <header class="flex flexright padlr-2">

    </header>
    <main class="flex flexcenter flexmiddle fillings">
      <div class="boop">
        <h1 class="title">Welkom bij de vragenlijst</h1>
      </div>
    </main>
  </body>
</html>
