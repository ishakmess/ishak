// let DarkModeON = document.getElementById("Dark");
// let head = document.getElementById("header");
// let body = document.getElementById("Boody");

// console.log("menu");
// DarkModeON.onclick = function toggleTextColor() {
//   head.style.backgroundColor = "black";
//   Boody.style.backgroundColor = "black";

//   var textElements = document.querySelectorAll(
//     "*:not(script):not(style):not(link):not(meta):not(title)"
//   );

//   textElements.forEach(function (element) {
//     var currentColor = getComputedStyle(element).color;
//     currentColor = currentColor.toLowerCase();

//     if (
//       currentColor === "rgb(31, 41, 55)" ||
//       currentColor === "#1f2937" ||
//       currentColor === "black"
//     ) {
//       element.style.color = "white";
//     } else if (currentColor === "white" || currentColor === "#ffffff") {
//       element.style.color = "black";
//     }
//   });
//   var elements = document.querySelectorAll('[id="optionin"]');

//   elements.forEach(function (element) {
//     element.style.color = "black";
//   });
//   var ele = document.querySelectorAll('[id="stp"]');
//   ele.forEach(function (element) {
//     element.style.color = "white";
//   });
//   let footer = document.getElementsByTagName("footer")[0];
//   footer.style.backgroundColor = "black";
//   footer.style.borderTop = "2px solid  white";
// };
let DarkModeON = document.getElementById("Dark");
let head = document.getElementById("header");
let body = document.getElementById("Boody");

// Check if dark mode is enabled in localStorage
let isDarkMode = localStorage.getItem("darkMode") === "true";

// Function to toggle dark mode
function toggleDarkMode() {
  if (isDarkMode) {
    head.style.backgroundColor = "white";
    body.style.backgroundColor = "white";
    var textElements = document.querySelectorAll(
      "*:not(script):not(style):not(link):not(meta):not(title)"
    );
    textElements.forEach(function (element) {
      element.style.color = "black";
    });
    var elements = document.querySelectorAll('[id="optionin"]');
    elements.forEach(function (element) {
      element.style.color = "black";
    });
    var ele = document.querySelectorAll('[id="stp"]');
    ele.forEach(function (element) {
      element.style.color = "black";
    });
    let footer = document.getElementsByTagName("footer")[0];
    footer.style.backgroundColor = "white";
    footer.style.borderTop = "2px solid black";
  } else {
    head.style.backgroundColor = "black";
    body.style.backgroundColor = "black";
    var textElements = document.querySelectorAll(
      "*:not(script):not(style):not(link):not(meta):not(title)"
    );
    textElements.forEach(function (element) {
      var currentColor = getComputedStyle(element).color;
      currentColor = currentColor.toLowerCase();
      if (
        currentColor === "rgb(31, 41, 55)" ||
        currentColor === "#1f2937" ||
        currentColor === "black"
      ) {
        element.style.color = "white";
      } else if (currentColor === "white" || currentColor === "#ffffff") {
        element.style.color = "black";
      }
    });
    var elements = document.querySelectorAll('[id="optionin"]');
    elements.forEach(function (element) {
      element.style.color = "black";
    });
    var ele = document.querySelectorAll('[id="stp"]');
    ele.forEach(function (element) {
      element.style.color = "white";
    });
    let footer = document.getElementsByTagName("footer")[0];
    footer.style.backgroundColor = "black";
    footer.style.borderTop = "2px solid  white";
  }
}

DarkModeON.onclick = function () {
  isDarkMode = !isDarkMode;
  localStorage.setItem("darkMode", isDarkMode);
  toggleDarkMode();
  let darkicon = document.getElementsByClassName("Darky");
  darkicon.style.color = "black";
};

let light = document.querySelector(".Light");
light.onclick = function () {
let a=localStorage.setItem("", isDarkMode);



}  

toggleDarkMode();
