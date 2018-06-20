window.onload = function() {

   setcolors();
   // clickfunctions();
}

function setcolors(){
   var vak = document.getElementsByClassName("vraag");
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

function clickfunctions(){
   console.log("JavaScript loaded");
   // p stands for the the panel en c for the color
   var array = document.getElementsByClassName("vraag");
   console.log(array);
   var booleanarray = [];

   // colors

   var color1 = "red";
   var color2 = "green";


   // variables for panels
   for (i = 0; i < array.length; i++) {
      booleanarray[i] = false;
   }

   // looping threw array
   for(i = 0; i < array.length; i++) {
      array[i].onclick = function() {
         console.log("clicking");
         changeVar(i, this);
      }
   }
   // reuseable funtions
   // must give a panel and color with the function $panel for which panel you want, $color for which color.
   // var for the personal boolean for the panel, and which panel;
   function changeVar(boolIndex, panel) {
      if (!booleanarray[boolIndex]) {
         booleanarray[boolIndex] = true;
         panel.style.backgroundColor = color1;
         // you can change the value here so it returns true or false for you forms
         console.log("false");
      }
      else {
         booleanarray[boolIndex] = false;
         panel.style.backgroundColor = color2;
         console.log("true");
      }
   }

   // get x
   function getElement(x) {
      var x = document.getElementById(x)
      return x;
   }
   console.log("scrip ended succesfully");
}
