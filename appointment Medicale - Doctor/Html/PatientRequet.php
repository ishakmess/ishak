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
    <link rel="stylesheet" href="../Css/RequetPatient.CSS" />
    <link rel="stylesheet" href="../Css/scrole.CSS" />
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
                    <a href="../Html/Fertility-Home.Html">
                      <img src="../../img/home/fitntly.jpg" alt="fitntly" />
                      <div>Fertility</div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- !  Home-option -->
            </li>

            <li class="Doctors">
              <a href="#">You <i class="fa-solid fa-chevron-down"></i></a>
              <div class="Doctors-option">
                <ul>
                  <li><a href="./SchduleTiming.HTML">Schedule Timing</a></li>
                  <li><a href="./PatientList.HTML">Patient List</a></li>

                  <li>
                    <a href="./EditInformationDoc.HTml">Profile Setting</a>
                  </li>
                  <li><a href="./RegisterDoctor.Html">Doctors Register</a></li>
                </ul>
              </div>
            </li>
            <li class="Patient">
              <a href="#">Doctors<i class="fa-solid fa-chevron-down"></i></a>
              <div class="Patient-option">
                <ul>
                  <li>
                    <a href="./MapGrid.HTML" class="option">Map Grid</a>
                  </li>
                  <li>
                    <a href="./MapList.php" class="option">Map List</a>
                  </li>
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

                  <li><a href="../Html/BlogsDetails.html">Blog Details</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>
      <img class="docbtn" src="../../Icons/doctor1.png" alt="" />
      <button class="Login">
        <i class="fa-regular fa-user"></i>
        <a href="../Html/Register.php"> Register</a>
      </button>
    </header>

    <!-- ! Main Start ................................................. -->
    <main>
      <!-- ! section About start  -->
      <section class="About">
        <h1>Patient Request</h1>
        <h5>
          <span><a href="../Html/generale-Home.html">Home</a></span> /<span
            >Patient Request</span
          >
        </h5>
      </section>
      <div class="scrole" id="scrole">
        <i class="fa-solid fa-arrow-up-long"></i>
      </div>
      <!-- ! section About end  -->
      <!-- ! about Section Profile Start  -->
      <section class="Profile">
        <div class="parentProfile">
          <div class="option-Profile">
            <ul>
              <li>
                <img src="../../img/doctors profile/doctor1/doctors1.jpg" alt="" />
              </li>
              <li>
                <h3>Dr. Darren Elder</h3>
                <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
              </li>
              <li>
                <a href="./ProfileDoctor.HTML"
                  ><i class="fa-solid fa-user-tie"></i> Profile</a
                >
              </li>
              <li>
                <a href="EditInformationDoc.HTml"
                  ><i class="fas fa-user-cog"></i>Profile Setting</a
                >
              </li>
              <li>
                <a href="./TimeEdit.HTML"
                  ><i class="fas fa-clock"></i> Timings Setting</a
                >
              </li>
              <li>
                <a href="./SchduleTiming.HTML"
                  ><i class="fas fa-clock"></i>Schedule Timings
                </a>
              </li>
              <li>
                <a href="#"
                  ><i class="fas fa-calendar-check"></i> Appointment</a
                >
              </li>
              <li>
                <a href="./PatientList.HTML"
                  ><i class="fas fa-user-injured"></i> My Patient</a
                >
              </li>
              <li>
                <a href="./ChangePassword.HTML"
                  ><i class="fas fa-user-injured"></i>Change Password</a
                >
              </li>
              <li>
                <a href="#"><i class="fas fa-sign-out-alt"></i> Log Out</a>
              </li>
            </ul>
          </div>
          <div class="Content-option">
         

  
         <div class="Appointment">
              <div class="Requet">
                <div>
                  <img src="../../img/doctors profile/doctor1/doctors1.jpg" alt="" />
                </div>
                <div>
                  <h3>Dr. Darren Elder</h3>
                  <p><i class="far fa-clock"></i> 14 Nov 2023, 10.00AM</p>
                  <p><i class="fa-solid fa-phone"></i> +1 923 782 4575</p>
                </div>
                <div>
                  <div>
                    <button>
                      <a href="#"> <i class="fa-solid fa-check"></i> Accept</a>
                    </button>
                  </div>
                  <div>
                    <button>
                      <a href="#"><i class="fa-solid fa-xmark"></i> Refuse</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="Appointment">
              <div class="Requet">
                <div>
                  <img src="../../img/doctors profile/doctor1/doctors1.jpg" alt="" />
                </div>
                <div>
                  <h3>Dr. Darren Elder</h3>
                  <p><i class="far fa-clock"></i> 14 Nov 2023, 10.00AM</p>
                  <p><i class="fa-solid fa-phone"></i> +1 923 782 4575</p>
                </div>
                <div>
                  <div>
                    <button>
                      <a href="#"> <i class="fa-solid fa-check"></i> Accept</a>
                    </button>
                  </div>
                  <div>
                    <button>
                      <a href="#"><i class="fa-solid fa-xmark"></i> Refuse</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ! about Section Profile End  -->
    </main>
    <!-- ! Main End .........................................s................................................. -->

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
    <script src="../jS/scrole.Js"></script>
  </body>
</html>
