/* let icons = document.getElementsByClassName("fa-solid");

Array.from(icons).forEach(icon => {
    let originalColor = icon.style.color; 
    icon.onclick = function () {
        if (icon.style.color === originalColor) {
            icon.style.color = "rosybrown";
        } else {
            icon.style.color = originalColor;
        }
    }
}); */
function createConfirmationBox() {
    let confirmBox = document.createElement("div");
    confirmBox.classList.add("confirmBox");
    confirmBox.style.cssText =
        "background:#f2f6f6;  border:2px solid #007fff; display: flex; flex-direction: column; justify-content: center; align-items: center; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 500px; height: 200px; padding: 20px; border-radius: 10px; z-index: 9000;";

    let header = document.createElement("div");
    header.classList.add("header");
    header.textContent =
        "You Must be registered to be able to make an appointment";
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
        let genralepageback = "../Html/Register.php";
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
}

// Find all elements with class "Consult"
const consultElements = document.getElementsByClassName("Consult");

// Attach event listener to each element
Array.from(consultElements).forEach((element) => {
    element.addEventListener("click", createConfirmationBox);
});