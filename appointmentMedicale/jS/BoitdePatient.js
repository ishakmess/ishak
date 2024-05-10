let Confirme = document.getElementById("Consult");

Confirme.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointmentMedicale/Html/Register.php";
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
//************************************************************************************* */

let consult = document.getElementById("consult");
consult.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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

/* ********************************************************* */

let co = document.getElementById("co");
co.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* ****************************************************** */

let cot = document.getElementById("ctm");
cot.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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

/* ******************************************************************** */

/* ******************************************************************** */

let ct = document.getElementById("ctm");
ct.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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

/* ********************************************* */

let rf = document.getElementById("cory");
rf.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* ********************************************* */

let rdo = document.getElementById("rd");
rdo.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
let ro = document.getElementById("cm");
ro.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* ************************************************************************************************* */

let rg = document.getElementById("aa");
rg.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
let rgo = document.getElementById("tp");
rgo.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* ***************************************** */

let zz = document.getElementById("zz");
zz.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* *************************** */

let ee = document.getElementById("ee");
ee.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* *************************************** */
let cop = document.getElementById("rr");
cop.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* *************************** */

let copt = document.getElementById("yy");
copt.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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

let coptt = document.getElementById("uu");
coptt.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* /***************************** */
let opt = document.getElementById("ii");
opt.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
/* ************************** */
let cn = document.getElementById("oo");
cn.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "You Must be   register to be able to make an appointment  ";
  confirmBox.appendChild(header);
  header.style.cssText =
    "margin-bottom:15px ; font-size: 20px ;font-weight: 550;   text-align: center;";
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
    let genralepageback = "../../appointment Medicale/Html/Register.php";
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
