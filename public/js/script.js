window.onload = function() {
  console.log("JavaScript loaded");
  // p stands for the the panel en c for the color
  var array = document.getElementsByClassName("vraag");

  // colors

  var color1 = "red";
  var color2 = "green";


  // variables for panels
  for (i = 0; i = array.length; i++) {
    var "var"+ i + 1 = false;
  }

  // looping threw array
  for(i = 0; i = array.length; i++) {
    array[i].onclick = function() {
      changeVar("var"+i, array[i]);
    }
  }
  // reuseable funtions
  // must give a panel and color with the function $panel for which panel you want, $color for which color.
  // var for the personal boolean for the panel, and which panel;
  function changeVar(var, panel) {
    if (!var) {
      var = true;
        panel.style.backgroundColor = color1;
      // you can change the value here so it returns true or false for you forms
      console.log("false");
    }
    else {
      var = false;
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
