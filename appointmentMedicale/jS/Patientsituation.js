let parent = document.getElementById("parent");
console.log(parent);

/* ************************************************************ */
let doctorName = "Dr. Darren Elder";
/* ************************************************************* */
function BookingSuccessfully(doctorName) {
  // Create icon element
  let icon = document.createElement("i");
  icon.className = "fas fa-check";
  icon.style.cssText = "font-size: 40px; color: #0bda51; margin-right: 10px;";

  // Create message span
  let messageText = document.createElement("span");
  messageText.style.cssText =
    "font-size: 18px; color: #333; margin-right: 5px;";
  messageText.textContent = "Appointment booked Successfully! With";

  // Create doctor name span
  let doctorNameText = document.createElement("span");
  doctorNameText.style.cssText =
    "font-size: 18px; color: #0bda51; font-weight: bold; margin-left: 5px;";
  doctorNameText.textContent = doctorName;

  // Create container div
  let containerDiv = document.createElement("div");
  containerDiv.style.cssText =
    "display: flex; justify-content: center; align-items: center;border: 2px solid  #0bda51;padding:10px;width:60%; border-radius: 15px;";

  // Append elements to container div
  containerDiv.appendChild(icon);
  containerDiv.appendChild(messageText);
  containerDiv.appendChild(doctorNameText);

  // Append container to parent
  parent.appendChild(containerDiv);
}
BookingSuccessfully(doctorName);

/* *************************************************************** */
function Nothing() {
  // Create icon element
  let icon = document.createElement("i");
  icon.className = "fa-regular fa-face-smile";
  icon.style.cssText = "font-size: 40px; color: #007fff; margin-right: 10px;";

  // Create message span
  let messageText = document.createElement("span");
  messageText.style.cssText =
    "font-size: 18px; color: #333; margin-right: 5px;";
  messageText.textContent = "you don't make any appointment . ";

  // Create doctor name span
  let doctorNameText = document.createElement("span");
  doctorNameText.style.cssText =
    "font-size: 18px; color: #0bda51; font-weight: bold; margin-left: 5px;";
  doctorNameText.textContent = doctorName;

  // Create container div
  let containerDiv = document.createElement("div");
  containerDiv.style.cssText =
    "display: flex; justify-content: center; align-items: center; border: 2px solid #007fff;padding:10px;width:50%; border-radius: 15px;";

  // Append elements to container div
  containerDiv.appendChild(icon);
  containerDiv.appendChild(messageText);

  // Append container to parent
  parent.appendChild(containerDiv);
}
Nothing();
/* ******************************************************** */
function BookingFaild(doctorName) {
  // Create icon element
  let icon = document.createElement("i");
  icon.className = "fa-solid fa-x";
  icon.style.cssText = "font-size: 40px; color: #FF0800; margin-right: 10px;";

  // Create message span
  let messageText = document.createElement("span");
  messageText.style.cssText =
    "font-size: 18px; color: #333; margin-right: 5px;";
  messageText.textContent = "Appointment failed  With";

  // Create doctor name span
  let doctorNameText = document.createElement("span");
  doctorNameText.style.cssText =
    "font-size: 18px; color: #FF0800; font-weight: bold; margin-left: 5px;";
  doctorNameText.textContent = doctorName;

  // Create container div
  let containerDiv = document.createElement("div");
  containerDiv.style.cssText =
    "display: flex; justify-content: center; align-items: center; border: 2px solid #FF0800;padding:10px;width:50%; border-radius: 15px; ";

  // Append elements to container div
  containerDiv.appendChild(icon);
  containerDiv.appendChild(messageText);
  containerDiv.appendChild(doctorNameText);

  // Append container to parent
  parent.appendChild(containerDiv);
}
BookingFaild(doctorName);
/* *********************** */
function wait(doctorName) {
  // Create icon element
  let icon = document.createElement("i");
  icon.className = "fa-regular fa-clock";
  icon.style.cssText = "font-size: 40px; color: #848482; margin-right: 10px;";

  // Create message span
  let messageText = document.createElement("span");
  messageText.style.cssText =
    "font-size: 18px; color: #333; margin-right: 5px;";
  messageText.textContent = "just wait the answer of Doctor ";

  // Create doctor name span
  let doctorNameText = document.createElement("span");
  doctorNameText.style.cssText =
    "font-size: 18px; color: #848482 ; font-weight: bold; margin-left: 5px;";
  doctorNameText.textContent = doctorName;

  // Create container div
  let containerDiv = document.createElement("div");
  containerDiv.style.cssText =
    "display: flex; justify-content: center; align-items: center;  border: 2px solid #848482;padding:10px;width:50%; border-radius: 15px; ";

  // Append elements to container div
  containerDiv.appendChild(icon);
  containerDiv.appendChild(messageText);
  containerDiv.appendChild(doctorNameText);

  // Append container to parent
  parent.appendChild(containerDiv);
}
wait(doctorName);