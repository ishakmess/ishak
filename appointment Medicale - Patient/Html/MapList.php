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
  <?php
          session_start();
// Connexion à la base de données
include("../../appointmentMedicale/Html/connect.php");
// Requête SQL pour récupérer les rendez-vous du médecin connecté
$doctor_id =  $_SESSION['medcin_id'] ;
echo 'id= '.$doctor_id;// ID du médecin connecté, vous devez le récupérer depuis votre session PHP ou votre formulaire de connexion
// Requête SQL pour récupérer le nom du médecin
$query = "SELECT name,email,speciality,location,workingdays,price,tmp_name FROM doctor WHERE 	id_medcin = $doctor_id";
$result_doctor_name = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_name);
$doctor_name = $doctor_row['name'];
$doctor_name = $doctor_row['speciality'];
$result_doctor_location = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_location);

$result_doctor_tmp_name = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_tmp_name);
$doctor_name = $doctor_row['tmp_name'];

         
$result = mysqli_query($con, $query);
?>
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
              <a href="./doucmentPatient.Html"
                >Doctors <i class="fa-solid fa-chevron-down"></i
              ></a>
              <div class="Doctors-option">
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
            <li class="Patient">
              <a href="./doucmentPatient.Html"
                >Patient <i class="fa-solid fa-chevron-down"></i
              ></a>
              <div class="Patient-option">
                <ul>
                  <li>
                    <a href="../Html/PatientProfile.php">Profile Setting</a>
                  </li>
                  <li><a href="../Html/yoursituation.php">Your Situation</a></li>
                  <li>
                    <a href="../Html/changepasswordP.php">Change Password</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="Page">
              <a href="./doucmentPatient.Html">
                Pages<i class="fa-solid fa-chevron-down"></i
              ></a>
              <div class="Page-option">
                <ul>
                  <li><a href="../Html/Contact-Us.Html">Contact Us</a></li>
                  <li><a href="../Html/About-Us.Html">About Us</a></li>
                </ul>
              </div>
            </li>
            <li class="Pharmacy">
              <a href="./doucmentPatient.Html"
                >Setting<i class="fa-solid fa-chevron-down"></i>
              </a>
              <div class="Pharmacy-option">
                <ul>
                  <li><a href="./doucmentPatient.Html">Languages</a></li>
                  <li><a href="./doucmentPatient.Html">Dark-Mode</a></li>
                  <li><a href="./doucmentPatient.Html">Light-Mode</a></li>
                </ul>
              </div>
            </li>
            <li class="Blog">
              <a href="./doucmentPatient.Html"
                >Blog <i class="fa-solid fa-chevron-down"></i
              ></a>
              <div class="Blog-option">
                <ul>
                  <li><a href="../Html/Blog-list.HTML">Blog List</a></li>
                  <li><a href="../Html/BlogDetails.html">Blog Details</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
      </div>

      <img src="../../Icons/patient1.png" class="iconPatient" />
      <img src="../../Icons/patient2.png" class="iconPatient" />
      <img src="../../Icons/patient3.png" class="iconPatient" />
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
     // Vérifier si la spécialité est "General Doctor"
     if ($row['speciality'] == 'Generale Doctor') {
      $tmp_name = !empty($row['tmp_name']) ? $row['tmp_name'] : "../../img/img_doctor.jpg";
    ?>
    <div class="Card-CContainer">
      <div class="header-CCard">
            <!-- Affichage de l'image -->
            
            <img id="displayedImage" src="<?php echo htmlspecialchars($tmp_name, ENT_QUOTES, 'UTF-8'); ?>" alt="Doctor" class="DoCtor-img" />
        <br />
       
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
    <a href="./doucmentPatient.php?id=<?php echo $row['id_medcin']; ?>">Consult</a>
</button>

      </div>
    </div>
    <?php
  }
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult</a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- ! Cardiology Doctors ***************************** -->
      <section class="Card-Doctor">
        <h1>Cardiology Doctor</h1>
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
              // Vérifier si la spécialité est "General Doctor"
            if ($row['speciality'] == 'cardiology') {
              $tmp_name = !empty($row['tmp_name']) ? $row['tmp_name'] : "../../img/img_doctor.jpg";
            
              ?>
              
              <div class="Card-CContainer">
                <div class="header-CCard">
            
            <!-- Affichage de l'image -->
            
            <img id="displayedImage" src="<?php echo htmlspecialchars($tmp_name, ENT_QUOTES, 'UTF-8'); ?>" alt="Doctor" class="DoCtor-img" />
                  <br />
               
                  
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
    <a href="./doucmentPatient.php?id=<?php echo $row['id_medcin']; ?>">Consult</a>
</button>
          
                </div>
              </div>
              <?php
              } // fin de la condition if pour vérifier la spécialité
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult</a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- !Eye Doctor start  -->
      <section class="Card-Doctor">
        <h1>Ophthalmologist Doctor</h1>
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
              // Vérifier si la spécialité est "General Doctor"
            if ($row['speciality'] == 'Eye care') {
              $tmp_name = !empty($row['tmp_name']) ? $row['tmp_name'] : "../../img/img_doctor.jpg";
            
              ?>
              
              <div class="Card-CContainer">
                <div class="header-CCard">
            
            <!-- Affichage de l'image -->
            
            <img id="displayedImage" src="<?php echo htmlspecialchars($tmp_name, ENT_QUOTES, 'UTF-8'); ?>" alt="Doctor" class="DoCtor-img" />
                  <br />
               
                  
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
    <a href="./doucmentPatient.php?id=<?php echo $row['id_medcin']; ?>">Consult</a>
</button>
          
                </div>
              </div>
              <?php
              } // fin de la condition if pour vérifier la spécialité
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- ! Fertilty Doctor  -->
      <section class="Card-Doctor">
        <h1>Fertility Doctor</h1>
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
              // Vérifier si la spécialité est "General Doctor"
            if ($row['speciality'] == 'fritility') {
              $tmp_name = !empty($row['tmp_name']) ? $row['tmp_name'] : "../../img/img_doctor.jpg";
            
              ?>
              
              <div class="Card-CContainer">
                <div class="header-CCard">
            
            <!-- Affichage de l'image -->
            
            <img id="displayedImage" src="<?php echo htmlspecialchars($tmp_name, ENT_QUOTES, 'UTF-8'); ?>" alt="Doctor" class="DoCtor-img" />
                  <br />
               
                  
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
    <a href="./doucmentPatient.php?id=<?php echo $row['id_medcin']; ?>">Consult</a>
</button>
          
                </div>
              </div>
              <?php
              } // fin de la condition if pour vérifier la spécialité
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
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
              <button>
                <a href="./doucmentPatient.Html">Consult </a>
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- ! Section Ours Services End -->
    </main>

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
              <a href="./doucmentPatient.Html">Privacy Police </a> |
              <a href="./doucmentPatient.Html"> Terms and Condition</a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    <script src="../jS/scrole.Js"></script>
  </body>
</html>
