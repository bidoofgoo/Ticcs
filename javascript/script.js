window.onload = function() {
  // p stands for the the panel en c for the color
  var panel1 = document.getElementById("rightrow1Col1");
  var panel2 = document.getElementById("rightrow1Col2");
  var panel3 = document.getElementById("rightrow2Col1");

  console.log("JavaScript loaded");

  var color1 = "white";
  var color2 = "red";
  var color3 = "green";
  var color4 = "blue";

  panel1.onclick = function(){
    changePanel1();
  };
  panel2.onclick = function(){
    changePanel2();
  };
  panel3.onclick = function(){
    changePanel3();
  };
  panel4.onclick = function(){
    changePanel4();
  };

  function changeColor(panel, color) {
    panel.style.backgroundColor = color;
  }

  function changePanel1() {
    console.log("function 1 loaded");
    changeColor(panel1, color1);
  }
  function changePanel2() {
    changeColor(panel2, color2);
  }
  function changePanel3() {
    changeColor(panel3, color3);
  }
  function changePanel4() {
    changeColor(panel4, color4);
  }
}
