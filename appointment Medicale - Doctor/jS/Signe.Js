let sbmit = document.getElementById("Login");
let emailValue = document.querySelector("[name='Email']");
let passwordValue = document.querySelector("[name='Password']");

sbmit.onsubmit = function (ele) {
  let emailvalidait = false;
  let passwordvalidait = false;
  if (passwordValue.value.length >= 8) {
    passwordvalidait = true;
  }
  console.log(passwordValue.value.length);
  if (emailValue.value !== "") {
    emailvalidait = true;
  }
  if (emailvalidait === false || passwordvalidait === false) {
    ele.preventDefault();
  }
};

window.onload = function (ele) {
  emailValue.focus();
};
