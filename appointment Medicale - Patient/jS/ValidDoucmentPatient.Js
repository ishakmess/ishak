var dateInput = document.getElementById("dateInput");
var Formpatient = document.getElementById("Requestpatient");
console.log(dateInput);
Formpatient.onsubmit = function restrictPastDates(e) {
  var today = new Date().toISOString().split("T")[0];

  dateInput.min = today;

  var selectedDate = dateInput.value;
  if (selectedDate < today) {
    e.preventDefault();
  }
};
