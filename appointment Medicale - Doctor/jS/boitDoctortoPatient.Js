let Confirme = document.getElementById("FirstButn");

Confirme.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc1 = document.getElementById("Doc1");
Doc1.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc2 = document.getElementById("Doc2");
Doc2.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc3 = document.getElementById("Doc3");
Doc3.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */ /* ************************************************ */
let Doc4 = document.getElementById("Doc4");
Doc4.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */ /* ************************************************ */ /* ************************************************ */

let Doc5 = document.getElementById("Doc5");
Doc5.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc6 = document.getElementById("Doc6");
Doc6.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc7 = document.getElementById("Doc7");
Doc7.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */

let Doc8 = document.getElementById("Doc8");
Doc8.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */

let Doc9 = document.getElementById("Doc9");
Doc9.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */

let Doc10 = document.getElementById("Doc10");
Doc10.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */

let Doc11 = document.getElementById("Doc11");
Doc11.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc12 = document.getElementById("Doc12");
Doc12.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc13 = document.getElementById("Doc13");
Doc13.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc14 = document.getElementById("Doc14");
Doc14.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
let Doc15 = document.getElementById("Doc15");
Doc15.onclick = function () {
  let confirmBox = document.createElement("div");
  confirmBox.classList.add("confirmBox");
  confirmBox.style.cssText =
    "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

  let header = document.createElement("div");
  header.classList.add("header");
  header.textContent =
    "Your are register as a Doctor , To be abele To take an appointment make only a register Patient .   ";
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
    let genralepageback = "../Html/Register.Html";
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
/* ************************************************ */
