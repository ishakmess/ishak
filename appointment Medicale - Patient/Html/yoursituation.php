<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Medical Appointment</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link
      rel="shortcut icon"
      href="../Icons/logo-small.png"
      type="image/x-icon" />
    <link rel="stylesheet" href="../Css/yoursituation.css" />
    <link rel="stylesheet" href="scrole.CSS" />
  </head>
 
  <body>
    <header>
      <div class="Logo">
        <img src="../img/logo.png" alt=" Logo" width="150px" />
      </div>
      <div class="menu">
        <nav>
          <ul class="heder-Option">
            <li class="Home">
              <a href="../Html/generale-Home.html">
                Home <i class="fa-solid fa-chevron-down"></i
              ></a>
              <!-- !  Home-option -->
              <div class="Home-option">
                <ul>
                  <li>
                    <a href="../Html/Cardeiologie-Home.HTML"
                      ><img
                        src="../../img/home/Cardiology-Home.jpg"
                        alt="img-cardiology" />
                      <div>Cardiology Home</div>
                    </a>
                  </li>
                  <li>
                    <a href="../Html/Eye-Care-Home.HTML">
                      <img src="../../img/home/Eye care.jpg" alt="Eye-Care" />
                      <div>Eye Care Home</div>
                    </a>
                  </li>
                  <li>
                    <a href="/appointment Medicale/Html/Fertility-Home.Html">
                      <img src="../../img/home/fitntly.jpg" alt="fitntly" />
                      <div>Fertility</div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- !  Home-option -->
            </li>

            <li class="Doctors">
              <a href="#">Doctors <i class="fa-solid fa-chevron-down"></i></a>
              <div class="Doctors-option">
                <ul>
                  <li><a href="./SchduleTiming.HTML">Schedule Timing</a></li>
                  <li><a href="./PatientList.HTML">Patient List</a></li>

                  <li>
                    <a href="./EditInformationDoc.HTml">Profile Setting</a>
                  </li>
                  <li><a href="./RegisterDoctor.php">Doctors Register</a></li>
                </ul>
              </div>
            </li>
            <li class="Patient">
              <a href="#">Patient <i class="fa-solid fa-chevron-down"></i></a>
              <div class="Patient-option">
                <ul>
                  <li>
                    <a href="#" class="Doct"> Doctors </a
                    ><i class="fa-solid fa-chevron-right"></i>
                    <ul class="DoctorsOption">
                      <li>
                        <a href="./MapGrid.HTML" class="option">Map Grid</a>
                      </li>
                      <li>
                        <a href="./MapList.HTML" class="option">Map List</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="../Html/PatientProfile.HTML">Profile Setting</a>
                  </li>
                  <li><a href="#">Your Situation</a></li>
                </ul>
              </div>
            </li>
            <li class="Page">
              <a href="#"> Pages<i class="fa-solid fa-chevron-down"></i></a>
              <div class="Page-option">
                <ul>
                  <li><a href="../Html/Contact-Us.Html">Contact Us</a></li>
                  <li><a href="../Html/About-Us.Html">About Us</a></li>
                </ul>
              </div>
            </li>
            <li class="Pharmacy">
              <a href="#">Setting<i class="fa-solid fa-chevron-down"></i> </a>
              <div class="Pharmacy-option">
                <ul>
                  <li><a href="#">Languages</a></li>
                  <li><a href="#">Dark-Mode</a></li>
                  <li><a href="#">Light-Mode</a></li>
                </ul>
              </div>
            </li>
            <li class="Blog">
              <a href="#">Blog <i class="fa-solid fa-chevron-down"></i></a>
              <div class="Blog-option">
                <ul>
                  <li><a href="../Html/Blog-list.HTML">Blog List</a></li>
                  <li><a href="../Html/BlogDetails.HTML">Blog Details</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <div class="Login">
        <i class="fa-regular fa-user"></i>
        <a href="../Html/Register.php"> Register</a>
      </div>
      <div class="Login">
        <i class="fa-solid fa-lock"></i>
        <a href="../../appointmentMedicale/Html/Login.php"> Singe </a>
      </div>
    </header>
    <!-- ! main Start **************************************************************** -->
    <main>
      <!-- ! Section Booking Success start  -->

      <section class="Booking">
        <h1>Booking</h1>
        <h5>
          <span><a href="../Html/generale-Home.html">Home</a></span> /<span
            >Booking</span
          >
        </h5>
      </section>
      <!-- !-- ! Section Booking Success End -->

      <!-- ! Section Booking eta Start  -->

      <section class="situation">
        <div class="parent" id="parent">
         
        </div>
      </section>
      <!-- ! Section Booking eta End  -->
    </main>
    <!-- ! main End **************************************************************** -->
    <footer>
      <div class="Footer-element">
        <div class="endpage">
          <ul class="Description">
            <li><img src="../img/logo.png" alt="Logo" /></li>
            <li>
              <p>
                We Hope you get the best <br />
                experience with DOCCURE
              </p>
            </li>
          </ul>
          <ul class="Social-Media">
            <li><h1>Social Media</h1></li>
            <li>
              <i class="fa-brands fa-facebook"></i><a href="#">facebook</a>
            </li>
            <li>
              <i class="fa-brands fa-instagram"></i> <a href="#">instagram</a>
            </li>
            <li>
              <i class="fa-brands fa-twitter"></i><a href="#">Twitter </a>
            </li>
            <li>
              <i class="fa-brands fa-telegram"></i><a href="#"> Telegram</a>
            </li>
          </ul>

          <ul class="Contact">
            <li><h1>Contact Us</h1></li>
            <li><i class="fa-solid fa-location-dot"></i> 3356 BBA,ALG</li>
            <li><i class="fa-solid fa-phone"></i> 0554064269</li>
            <li>
              <i class="fa-solid fa-envelope"></i>Sayah-Messouafe@gmail.com
            </li>
          </ul>
        </div>

        <div class="End">
          <ul>
            <li>A&copy; 2024 Medical Appointment</li>
            <li>
              <a href="#">Privacy Police </a> |
              <a href="#"> Terms and Condition</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
  
    <script>
document.addEventListener("DOMContentLoaded", function() {
    let parent = document.getElementById("parent");
/* ************************************************************ */
let doctorName = "";
    fetch("requete.php")
        .then(response => response.json())
        .then(appointments => {
            if (appointments.length > 0) {
                appointments.forEach(appointment => {
                    if (appointment.etatrequete === 'accepté') {
                        BookingSuccessfully(appointment.doctor_name);
                    } else if (appointment.etatrequete === 'refuser') {
                        BookingFaild(appointment.doctor_name);
                    } else {
                        wait(appointment.doctor_name);
                    }
                });
            } else {
                Nothing();
            }
        })
        .catch(error => {
            console.error('Error fetching appointments:', error);
            BookingFaild('Unknown Doctor');  // Handle the error case appropriately
        });

    function BookingSuccessfully(doctorName) {
        // Create elements and append to parent (similar to the original script)
        
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

    function Nothing() {
        // Create elements and append to parent (similar to the original script)
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

    function BookingFaild(doctorName) {
        // Create elements and append to parent (similar to the original script)
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

    function wait(doctorName) {
        // Create elements and append to parent (similar to the original script)
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
});
</script>
  </body>
</html>