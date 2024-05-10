let formSubmit = document.getElementById("Register");
console.log(formSubmit);
let FirstName = document.querySelector("[name='FirstName']");
console.log(FirstName);
let LastName = document.querySelector("[name='LastName']");
let Email = document.querySelector("[name='Email']");
let password = document.querySelector("[name='Password']");
let ConfirmPassword = document.querySelector("[name='ConfirmPassword']");
console.log(FirstName);
console.log(FirstName.value);
console.log(FirstName.value.length);
formSubmit.onsubmit = function (element) {
  FirstNameValidate = false;
  EmailValidate = false;
  LastNameValidate = false;
  if (
    FirstName.value.length >= 4 &&
    LastName.value.length >= 4 &&
    Email.value.length !== ""
  ) {
    FirstNameValidate = true;
    LastNameValidate = true;
    EmailValidate = true;
  }

  if (!isNaN(FirstName.value[0]) || !isNaN(LastName.value[0])) {
    LastNameValidate = false;
    FirstNameValidate = false;
  }
  PasswordValidate = false;
  PasswordConfirmValidate = false;
  if (password.value.length >= 8 && ConfirmPassword.value.length >= 8) {
    if (password.value.length === ConfirmPassword.value.length) {
      if (password.value === ConfirmPassword.value) {
        PasswordConfirmValidate = true;
        PasswordValidate = true;
      } else {
        PasswordConfirmValidate = false;
        PasswordValidate = false;
      }
    } else {
      PasswordConfirmValidate = false;
      PasswordValidate = false;
    }
  }

  if (
    FirstNameValidate === false ||
    LastNameValidate === false ||
    EmailValidate === false ||
    PasswordValidate === false ||
    PasswordConfirmValidate === false
  ) {
    element.preventDefault();
  }
};

window.onload = function () {
  FirstName.focus();
};
