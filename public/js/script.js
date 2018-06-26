window.onload = function() {

   setcolors();
   clickfunctions();
}

function setcolors(){
   var vak = document.getElementsByClassName("vraag");
   // element.style.property = new style
   var kleuren = ["#ffcc7f", "#ffc166", "#ffb74c", "#ffbc59"];
   var random;
   console.log(vak.length);

<<<<<<< HEAD
   previousRand = 10;
   random = 10;
=======
>>>>>>> e6e1337e9bfa25b5a45d556287c6ac185341bfa5
   for (i = 0; i < vak.length;i++ ) {
      while(random == previousRand){
         random = Math.floor(Math.random() * 4) + 1;
      }
      vak[i].className += " kleur" + random;
      console.log(vak[i]);
      previousRand = random;
   }
}

function clickfunctions(){
   console.log("JavaScript loaded");
   // p stands for the the panel en c for the color
   var array = document.getElementsByClassName("vraag");
   console.log(array);
<<<<<<< HEAD
=======
   var booleanarray = [];

   function changeVar(index, panel) {
      if (!boolean[index]) {
         booleanarray[index] = true;
         panel.style.backgroundColor = color1;
         // you can change the value here so it returns true or false for you forms
      }
      else {
         booleanarray[index] = false;
         panel.style.backgroundColor = color2;
         console.log("true");
      }
   }
   // colors
>>>>>>> e6e1337e9bfa25b5a45d556287c6ac185341bfa5

   // // colors
   //
   // var color1 = "red";
   // var color2 = "green";


   // variables for panels
<<<<<<< HEAD
   // for (i = 0; i < array.length; i++) {
   //    booleanarray[i] = false;
   // }
=======
   for (i = 0; i < array.length; i++) {
      booleanarray[i] = false;
      console.console.log(booleanarray[i]);
   }
>>>>>>> e6e1337e9bfa25b5a45d556287c6ac185341bfa5

   // looping threw array
   for(i = 0; i < array.length; i++) {
      array[i].onclick = function() {
         // console.log("clicking");
         changeVar(this);
      }
   }

   // reuseable funtions
   // must give a panel and color with the function $panel for which panel you want, $color for which color.
   // var for the personal boolean for the panel, and which panel;
<<<<<<< HEAD
   function changeVar(panel) {
      var form= document.getElementsByTagName('form')[0];
      if (panel.className.includes('kleur')) {
         panel.className = panel.className.replace('kleur', 'clicked');
         // you can change the value here so it returns true or false for you forms
         // console.log("false");
         document.getElementById('formVraag' + panel.dataset.vraagno).value = "true";
      }
      else {
         panel.className = panel.className.replace('clicked', 'kleur');
         // console.log("true");
         document.getElementById('formVraag' + panel.dataset.vraagno).value = "false";
      }
   }
=======

>>>>>>> e6e1337e9bfa25b5a45d556287c6ac185341bfa5

   // get x
   function getElement(x) {
      var x = document.getElementById(x)
      return x;
   }
   console.log("scrip ended succesfully");
}
