window.onload = function() {
  console.log("JavaScript loaded");
  // p stands for the the panel en c for the color
  var panel1 = document.getElementById("rightrow1Col1");
  var panel2 = document.getElementById("rightrow1Col2");
  var panel3 = document.getElementById("rightrow2Col1");
  var panel4 = document.getElementById("rightrow2Col2");

  var color1 = "white";
  var color2 = "red";
  var color3 = "green";
  var color4 = "blue";

  var var1 = false;
  var var2 = false;
  var var3 = false;
  var var4 = false;
  var var5 = false;
  var var6 = false;

  // iniating functions, if you wanna add more its easy to do here
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
  };
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
    var x = document.getElementById(x);
  }
  console.log("scrip ended succesfully");
}
