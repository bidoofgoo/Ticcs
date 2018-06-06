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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script type="text/javascript" src="color.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      window.onload = function() {

        var vak = document.getElementsByClassName("col-md-4");
        // element.style.property = new style
        var kleuren = ["#ffcc7f", "#ffc166", "#ffb74c", "#ffbc59"];
        var random;
        console.log(vak.length);
        for (i = 0; i < vak.length;i++ ) {
                random = Math.floor(Math.random() * 3);
                vak[i].style.backgroundColor = kleuren[random];
                console.log(vak[i]);
        }

      }
    </script>
  </head>
  <body>

    <div class="row" id="row1">

            <div class="col-lg-9" id="colRight">
              <div class="row" id="rightrow1">

                    <div class="col-md-4" onclick="document.col-md-6.style.backgroundColor = 'green';" id="rightrow1Col1">
                      <h2>Hoofdpijn?</h2>
                    </div>
                    <div class="col-md-4" id="rightrow1Col2">
                      <h2>Gewrichtspijn?</h2>
                    </div>
                    <div class="col-md-4" id="rightrow1Col2">
                      <h2>Botbreuk?</h2>
                    </div>

                  </div>

                <div class="row" id="rightrow2">
                  <div class="col-md-4" id="rightrow2Col1">
                      <h2>Oogontsteking?</h2>
                  </div>

                  <div class="col-md-4" id="rightrow2Col2">
                      <h2>Hartkloppingen?</h2>
                  </div>
                  <div class="col-md-4" id="rightrow1Col2">
                    <h2>Uitslag?</h2>
                  </div>
                </div>
              </div>
            </div>

            <div class="row" id="row1">

              <div class="col-lg-9" id="colRight">
                <div class="row" id="rightrow1">

                      <div class="col-md-4" onclick="document.col-md-6.style.backgroundColor = 'green';" id="rightrow1Col1">
                        <h2>Moeheid?</h2>
                      </div>
                      <div class="col-md-4" id="rightrow1Col2">
                        <h2>Diarree?</h2>
                      </div>
                      <div class="col-md-4" id="rightrow1Col2">
                        <h2>Misselijkheid?</h2>
                      </div>

                    </div>

                  <div class="row" id="rightrow2">
                    <div class="col-md-4" id="rightrow2Col1">
                        <h2>Rare bulten?</h2>
                    </div>

                    <div class="col-md-4" id="rightrow2Col2">
                        <h2>Blauwe Plekken?</h2>
                    </div>
                    <div class="col-md-4" id="rightrow1Col2">
                      <h2>Slaap tekort?</h2>
                    </div>
                  </div>
                </div>
              </div>
  </body>
</html>
