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
    <link rel="stylesheet" href="../Css/MapList.CSS" />
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
                    <a href="./MapList.HTML" class="option">Map List</a>
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
    <main>
      <!-- ! section About start  -->
      <section class="MapGrid">
        <h1>Map List</h1>
        <h5>
          <span><a href="../Html/generale-Home.html">Home</a></span> /
          <span> Map List</span>
        </h5>
      </section>
      <div class="scrole" id="scrole">
        <i class="fa-solid fa-arrow-up-long"></i>
      </div>
      <!-- ! section About end  -->
      <!-- ! Section Ours Services Start  -->
      <section class="Card-Doctor">
        <h1>Generale Doctor</h1>
        <div class="Card-Father">
          <?php
          // Requête pour récupérer les médecins
          include "../../appointmentMedicale/Html/connect.php";
          $sql = "SELECT * FROM doctor";
          $result = $con->query($sql);
          
          // Vérifier s'il y a des résultats
          if ($result->num_rows > 0) {
            // Afficher les données dans le code HTML avec une boucle foreach
            while ($row = $result->fetch_assoc()) {
              ?>
              <div class="Card-CContainer">
                <div class="header-CCard">
                <?php
                  // Vérifier si l'URL de la photo est vide ou non
                  if (!empty($row['photo'])) {
                    // Si une URL est disponible, afficher la photo du médecin
                    ?>
                    <img src="<?php echo $row['photo']; ?>" alt="Doctor" class="DoCtor-img" />
                    <?php
                  } else {
                    // Si l'URL est vide, afficher l'image statique
                    ?>
                    <img src="../../img/img_doctor.jpg" alt="Doctor" class="DoCtor-img" />
                    <?php
                  }
                  ?>
                  <br />
                 <!-- <img src="<?php echo $row['photo']; ?>" alt="Doctor" class="DoCtor-img" />
                  <br />-->
                  <div class="Specialité-Doc">
                    <div class="Specialité-génerale"><?php echo $row['speciality']; ?></div>
                    <div class="Specialité-Details">Doctor</div>
                  </div>
                </div>
          
           
          
                <div>
                  <h3><?php echo $row['name'] ; ?></h3><br>
                 <h4>working days</h4> <?php echo $row['workingdays'] ; ?>
                 <h4>Price of consultation</h4> <?php echo $row['price'] ; ?>
                  <div>
                  
                    <div><i class="fa-solid fa-location-dot"></i></div>
                    <div><?php echo $row['location']; ?></div>
                  </div>
                  
                  <button>
              <a href="#id=<?php echo $row['id_medcin']; ?>">Consult</a>
          </button>
          
                </div>
              </div>
              <?php
            }
          } else {
            echo "Aucun résultat trouvé";
          }
          
          // Fermer la connexion
          $con->close();
          ?>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/doctor1.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Generale</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Yazid <br />
                MAHIDDINE
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>BBA 1008,ALG</div>
              </div>
              <button id="FirstButn">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/DOCTOR2.jpg "
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Generale</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>Dr Bouziane <br />Ahmed</h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>Batna 217,ALG</div>
              </div>
              <button id="Doc1">
                <a href="##">Consult </a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/doctor3.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Generale</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Mssouade <br />
                Kloufi
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>Bja 1008,ALG</div>
              </div>
              <button id="Doc2">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/doctor4.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Generale</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Rokia <br />
                Belhaje
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>BBA 1008,ALG</div>
              </div>
              <button id="Doc3">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- ! Cardiology Doctors ***************************** -->
      <section class="Card-Doctor">
        <h1>Cardiology Doctor</h1>
        <div class="Card-Father">
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/cardiology1.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Cardiology</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Yassmin <br />
                Thmer
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>BBA ben ammrane,ALG</div>
              </div>
              <button id="Doc4">
                <a href="##">Consult </a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/cardiology2.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Cardiology</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Ammale <br />
                Sayah
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>BBA Koucha,ALG</div>
              </div>
              <button id="Doc5">
                <a href="##">Consult </a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/cardiology3.png"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Cardiology</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Amir <br />
                bn Amour
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>Alg Bourj Kifane,ALG</div>
              </div>
              <button id="Doc6">
                <a href="##">Consult </a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/cardiology4.png"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Cardiology</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>Dr Mounir <br />Mammer</h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>Stf Ain hjar,ALG</div>
              </div>
              <button id="Doc7">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- !Eye Doctor start  -->
      <section class="Card-Doctor">
        <h1>Ophthalmologist Doctor</h1>
        <div class="Card-Father">
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID//ophthalmologist.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">ophthalmologist</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Imane <br />
                amare
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>BBA 12hktar,ALG</div>
              </div>
              <button id="Doc8">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID//ophthalmologist2.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">ophthalmologist</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Bachir <br />
                Ariche
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>Stf ain Welman,ALG</div>
              </div>
              <button id="Doc9">
                <a href="##">Consult </a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/ophthalmologist3.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">ophthalmologist</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Kamar <br />
                Zmman
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>BBA sidi mbark,ALG</div>
              </div>
              <button id="Doc10">
                <a href="##">Consult </a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/ophthalmologist4.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">ophthalmologist</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Mahdi <br />
                Brahim
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>BBA Blda,ALG</div>
              </div>
              <button id="Doc11">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- ! Fertilty Doctor  -->
      <section class="Card-Doctor">
        <h1>Fertility Doctor</h1>
        <div class="Card-Father">
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/fertilty1.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Fertility</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>Dr Rahma <br />Rahale</h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>Anaba BabeBhare,ALG</div>
              </div>
              <button id="Doc12">
                <a href="##">Consult </a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/fertilty1.png"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Fertility</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Manale <br />
                Blaiide
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>Costantione 1500,ALG</div>
              </div>
              <button id="Doc13">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/fetilty4.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Fertility</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>
                Dr Soundase <br />
                Rahale
              </h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>BBA 1008,ALG</div>
              </div>
              <button id="Doc14">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
          <div class="Card-CContainer">
            <div class="header-CCard">
              <img
                src="../../img/MAPGRID/fertiltiy3.jpg"
                alt="Doctor"
                class="DoCtor-img" />
              <br />
              <div class="Specialité-Doc">
                <div class="Specialité-génerale">Fertility</div>
                <div class="Specialité-Details">Doctor</div>
              </div>
            </div>
            <div>
              <h3>Dr Chaima <br />Ben Kchida</h3>
              <div>
                <div><i class="fa-solid fa-location-dot"></i></div>
                <div>Oran 5021,ALG</div>
              </div>
              <button id="Doc15">
                <a href="##">Consult</a>
              </button>
            </div>
          </div>
        </div>
      </section>

      <!-- ! Section Ours Services End -->
    </main>
    <!-- ! main End ************************************************************************ -->
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
    <script src="../jS/boitDoctortoPatient.Js"></script>
  </body>
</html>
