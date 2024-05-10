let Confirme = document.getElementById("Consult");
Confirme.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};
let Save = document.getElementById("fileInput");
Save.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");
  confirmBox.appendChild(messageBox);
  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};
/* ************************************************************************ */

let Confirm = document.getElementById("Save");
Confirm.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};
/* ************************************************************************* */

let Co = document.getElementById("refuse");
Co.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};
/* *********************************************************** */

let Cot = document.getElementById("profileSetting");
Cot.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};
/* **************************************** */

let Cotp = document.getElementById("accept");
Cotp.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};

/* ****************************************************************** */

let po = document.getElementById("Schedule");
po.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};

/* ****************************************************************** */

let appiontment = document.getElementById("A3ppointment");
appiontment.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};

/* ****************************************************************** */

let app = document.getElementById("logout");
app.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};

/* ********************************* */
let appO = document.getElementById("Patient");
appO.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};

/* ********************************* */
let ap = document.getElementById("Patient");
ap.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};

/* ********************************* */
let password = document.getElementById("changepassword");
password.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";
  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "This page is it only to display the option of a doctor , if you want to be a doctor in ours sit just Go and make your register";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; text-align:center; font-size: 20px ;font-weight: 550;";
  let messageBox = document.createElement("div");
  messageBox.classList.add("msgbox");

  confirmBox.appendChild(messageBox);

  let buttonbox = document.createElement("div");
  buttonbox.classList.add("btnbox");
  confirmBox.appendChild(buttonbox);
  let okbtn = document.createElement("button");
  okbtn.classList.add("okbtn");
  okbtn.textContent = "GO";
  okbtn.style.cssText =
    "   margin: 20px;background-color:  rgba(15, 183, 107, 0.12) !important; cursor:pointer; ;color:#007fff ;border:#007fff 1px solid;padding:5px 10px";
  buttonbox.appendChild(okbtn);
  okbtn.onclick = function okClick() {
    let genralepageback = "/appointment Medicale/Html/RegisterDoctor.Html";
    window.location.href = genralepageback;
    confirmBox.remove();
  };

  let cancel = document.createElement("button");
  cancel.classList.add("cancel");
  cancel.textContent = "Cancel";
  buttonbox.appendChild(cancel);
  cancel.style.cssText =
    " background-color:rgba(230, 60, 60, 0.2);cursor:pointer;color: rgb(230, 60, 60) !important ;border:rgba(230, 60, 60, 0.2) 1px solid;padding:5px 10px";
  cancel.onclick = function canncleclick() {
    confirmBox.remove();
  };

  document.body.appendChild(confirmBox);
};
