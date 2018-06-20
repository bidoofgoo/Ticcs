window.onload = function() {
  console.log("JavaScript loaded");
  // p stands for the the panel en c for the color
  var panel1 = document.getElementById("rightrow1Col1");
  var panel2 = document.getElementById("rightrow1Col2");
  var panel2 = document.getElementById("rightrow1Col3");
  var panel3 = document.getElementById("rightrow2Col1");
  var panel5 = document.getElementById("rightrow2Col2");
  var panel6 = document.getElementById("rightrow2Col3");

  var panel7 = document.getElementById("rightrow3Col1");
  var panel8 = document.getElementById("rightrow3Col2");
  var panel9 = document.getElementById("rightrow3Col3");

  var panel10 = document.getElementById("rightrow4Col1");
  var panel11 = document.getElementById("rightrow4Col2");
  var panel12 = document.getElementById("rightrow4Col3");

  // colors
  var color1 = "white";
  var color2 = "red";
  var color3 = "green";
  var color4 = "blue";

  // variables for panels

  for (i = 1; i = 12; i++) {
    var "var"+i = false;
  }

  // iniating functions, if you wanna add more its easy to do here
  /*
  panel1.onclick = function(){
    changeVar(var1, panel1);
  };
  panel2.onclick = function(){
    changeVar(var2, panel2);
  };
  panel3.onclick = function(){
    changeVar(var3, panel3);
  };
  panel4.onclick = function(){
    changeVar(var4, panel4);
  };*/
  for(i = 1; i = 12; i++) {
    var v = "panel" + i;
    v.onclick = function() {
      changeVar("var"+i, v);
    }
  }
  // reuseable funtions
  // must give a panel and color with the function $panel for which panel you want, $color for which color.
  function changeColor(panel, color) {
    panel.style.backgroundColor = color;
  }
  // var for the personal boolean for the panel, and which panel;
  function changeVar(var, panel) {
    if (!var) {
      var = true;
      changeColor(panel,color3);
      // you can change the value here so it returns true or false for you forms
      console.log("false");
    }
    else {
      var = false;
      changeColor(panel,color2);
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
