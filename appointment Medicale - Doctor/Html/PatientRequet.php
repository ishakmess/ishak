


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
  <?php
          session_start();
// Connexion à la base de données
include("../../appointmentMedicale/Html/connect.php");
// Requête SQL pour récupérer les rendez-vous du médecin connecté
$doctor_id =  $_SESSION['medcin_id'] ;
echo 'id= '.$doctor_id;// ID du médecin connecté, vous devez le récupérer depuis votre session PHP ou votre formulaire de connexion

// Récupérez l'ID du client depuis la session
$client_id = $_SESSION['client_id'];
echo 'id= '.$client_id;
// Requête SQL pour récupérer les champs des patients
$query = "SELECT tmp_name FROM patient WHERE 	id_patient  = $client_id";

$result_patient_tmp_name = mysqli_query($con,$query);
$patient_row = mysqli_fetch_assoc($result_patient_tmp_name);
$patient_name = $patient_row['tmp_name'];
// Requête SQL pour récupérer le nom du médecin
$sql_doctor_name = "SELECT name,tmp_name FROM doctor WHERE 	id_medcin = $doctor_id";
$result_doctor_name = mysqli_query($con, $sql_doctor_name);
$doctor_row = mysqli_fetch_assoc($result_doctor_name);
$doctor_name = $doctor_row['name'];
$result_doctor_tmp_name = mysqli_query($con,$sql_doctor_name);
$doctor_row = mysqli_fetch_assoc($result_doctor_tmp_name);
$doctor_tmp_name = $doctor_row['tmp_name']; 
$query = "SELECT r.id ,r.namepatient, r.age, r.phonenmbr, r.date,r.etatrequete FROM requete r
          INNER JOIN patient p ON r.client_id  = p.id_patient
          WHERE r.doctor_id = $doctor_id";
    
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
              <a href="#">You <i class="fa-solid fa-chevron-down"></i></a>
              <div class="Doctors-option">
                <ul>
                <li><a href="./PatientRequet.php">Patient Request</a></li>

                  <li>
                    <a href="./EditInformationDoc.php">Profile Setting</a>
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
               <!-- <img src="../../img/doctors profile/doctor1/doctors1.jpg" alt="" />-->
              <?php
            // Vérifie si le champ "tmp_name" existe dans $doctor_row
            if (isset($doctor_row['tmp_name']) && !empty($doctor_row['tmp_name'])) {
                // Utilisez la valeur de tmp_name comme source pour l'image
                $tmp_name = $doctor_row['tmp_name'];
            } else {
                // Si tmp_name n'est pas défini ou est vide, utilisez l'image par défaut
                $tmp_name = "../../img/img_doctor.jpg";
            }
            ?>
            <!-- Affichage de l'image -->
            <div class="image-container" id="imageContainer">
                <img id="displayedImage" src="<?php echo htmlspecialchars($tmp_name, ENT_QUOTES, 'UTF-8'); ?>" alt="Doctor" class="DoCtor-img" />
            </div>
              </li>
              <!--<li>
                <h3>Dr. Darren Elder</h3>
                <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
              </li>-->
              <?php
    // Affichage du nom du médecin
    //echo "Nom du médecin connecté : " . $doctor_name ;
    echo "<h3>Dr. " . $doctor_name . "</h3>";

    
    ?>
              <li>
                <a href="./ProfileDoctor.php"
                  ><i class="fa-solid fa-user-tie"></i> Profile</a
                >
              </li>
              <li>
                <a href="EditInformationDoc.php"
                  ><i class="fas fa-user-cog"></i>Profile Setting</a
                >
              </li>
            
              <li>
                <a href="#"
                  ><i class="fas fa-calendar-check"></i> Appointment</a
                >
              </li>
             <!-- <li>
                <a href="./PatientList.HTML"
                  ><i class="fas fa-user-injured"></i> My Patient</a
                >
              </li>-->
              <li>
                <a href="./ChangePassword.php"
                  ><i class="fas fa-user-injured"></i>Change Password</a
                >
              </li>
              <li>
                <a href="#"id="Quitter"><i class="fas fa-sign-out-alt"></i> Log Out</a>
              </li>
            </ul>
          </div>
          <div class="Content-option">
          <?php
                    // Vérifier s'il y a des résultats
                    if (mysqli_num_rows($result) > 0) {
                        // Parcourir les résultats et afficher chaque rendez-vous dans le code HTML
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<div class="Appointment">';
                            echo '<div class="Requet">';
                            echo '<div>';

                            // Vérifie si le champ "tmp_name" existe dans $row et n'est pas vide
                            if (isset($patient_row['tmp_name']) && !empty($patient_row['tmp_name'])) {
                                // Utilisez la valeur de tmp_name comme source pour l'image
                                $tmp_name = $patient_row['tmp_name'];
                            } else {
                                // Si tmp_name n'est pas défini ou est vide, utilisez l'image par défaut
                                $tmp_name = "../../img/patientstatique.png";
                            }

                            // Affichage de l'image
                            echo '<img id="displayedImage" src="' . htmlspecialchars($tmp_name, ENT_QUOTES, 'UTF-8') . '" alt="Displayed Image" />';

                            echo '</div>';
                            echo '<div>';
                            //echo '<h3>' . $row['namepatient'] . '</h3>';
                            echo '<h3>Name patient : ' . htmlspecialchars($row['namepatient'], ENT_QUOTES, 'UTF-8') . '</h3>';
                            echo '<p><i class="far fa-clock"></i> ' . htmlspecialchars($row['date'], ENT_QUOTES, 'UTF-8') . '</p>';
                            echo '<p><i class="fa-solid fa-phone"></i> ' . htmlspecialchars($row['phonenmbr'], ENT_QUOTES, 'UTF-8') . '</p>';
                            echo '</div>';
                            echo '<div>';
                            if (($row['etatrequete'] != "accepté") && ($row['etatrequete'] != "refuser")) {
                                echo '<div>';
                                echo '<button>';
                                echo '<a href="accept.php?id=' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '"> <i class="fa-solid fa-check"></i> Accept</a>';
                                echo '</button>';
                                echo '</div>';
                                echo '<div>';
                                echo '<button>';
                                echo '<a href="refuse.php?id=' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '"><i class="fa-solid fa-xmark"></i> Refuse</a>';
                                echo '</button>';
                                echo '</div>';
                            }
                            echo '</div>';
                            echo '</div>';
                            echo '</div>';
                        }
                    } else {
                        // Si aucun rendez-vous trouvé, afficher un message approprié
                        echo "Aucun rendez-vous trouvé.";
                    }

                    // Fermer la connexion à la base de données
                    mysqli_close($con);
                    ?>
       


  
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
    <script src="../jS/boitdeConifrmation.Js"></script>
    <script src="../jS/Uplode.Js"></script>
  </body>
</html>
