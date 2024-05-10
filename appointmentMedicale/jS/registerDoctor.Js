let formDoctor = document.getElementById("FormDoctor");

let nameDoctor = document.querySelector("[name='NameDoctor']");
let EmailDoctor = document.querySelector("[name='emailDoctor']");
let PasswordDoctor = document.querySelector("[name='PasswordDoctor']");
let ConfirmPasswordDoctor = document.querySelector(
  "[name='ConfirmPasswordDoctor']"
);
let LocationDoctor = document.querySelector("[name='Location']");

formDoctor.onsubmit = function (ele) {
  NameValidate = false;
  if (nameDoctor.value.length >= 4) {
    NameValidate = true;
  }
  if (!isNaN(nameDoctor.value[0])) {
    NameValidate = false;
  }

  EmailValidate = false;
  LocationDoctorValidate = false;

  if (EmailDoctor.value.length !== "" && LocationDoctor.value.length) {
    EmailValidate = true;
    LocationDoctorValidate = true;
  }
  PasswordValidate = false;
  confirmPasswordValidate = false;
  if (
    PasswordDoctor.value.length >= 8 &&
    ConfirmPasswordDoctor.value.length >= 8
  ) {
    if (PasswordDoctor.value.length === ConfirmPasswordDoctor.value.length) {
      if (PasswordDoctor.value === ConfirmPasswordDoctor.value) {
        PasswordValidate = true;
        confirmPasswordValidate = true;
      } else {
        PasswordValidate = false;
        confirmPasswordValidate = false;
      }
    }
  }

  if (
    NameValidate === false ||
    EmailValidate === false ||
    PasswordValidate === false ||
    confirmPasswordValidate === false ||
    LocationDoctorValidate === false
  ) {
    ele.preventDefault();
  }
};
window.onload = function () {
  nameDoctor.focus();
};
document.getElementById("readMoreBtn").addEventListener("click", function () {
  var moreText = document.querySelector(".more");
  if (moreText.style.display === "none") {
    moreText.style.display = "block";
    this.textContent = "Read Less";
  } else {
    moreText.style.display = "none";
    this.textContent = "Read More";
  }
});
