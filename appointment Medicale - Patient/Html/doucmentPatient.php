<?php
session_start(); // Démarrez la session si ce n'est pas déjà fait


    // Vérifiez si l'ID client et l'ID médecin sont présents dans la session et l'URL
    if (isset($_SESSION['client_id']) && isset($_GET['id'])) {
        // Récupérez et validez l'ID médecin
        if (is_numeric($_GET['id'])) {
            $id_medcin = intval($_GET['id']);
        } else {
            echo "Erreur: ID médecin invalide.";
            exit; // Arrêtez l'exécution du script si l'ID médecin est invalide
        }

        // Récupérez l'ID du client depuis la session
        $client_id = $_SESSION['client_id'];

        // Vérifiez si tous les champs du formulaire sont présents et non vides
        if (
            isset($_POST['Name']) && !empty($_POST['Name']) &&
            isset($_POST['Age']) && !empty($_POST['Age']) &&
            isset($_POST['Number']) && !empty($_POST['Number']) &&
            isset($_POST['dateInput']) && !empty($_POST['dateInput'])
        ) {
            // Connexion à la base de données
            include ("../../appointmentMedicale/Html/connect.php");

            // Échappez les données du formulaire pour éviter les injections SQL
            $name = mysqli_real_escape_string($con, $_POST['Name']);
            $age = mysqli_real_escape_string($con, $_POST['Age']);
            $number = mysqli_real_escape_string($con, $_POST['Number']);
            $date = mysqli_real_escape_string($con, $_POST['dateInput']);

            // Requête d'insertion
            $sql = "INSERT INTO requete (client_id, doctor_id, namepatient, age, phonenmbr, date) 
                    VALUES ('$client_id', '$id_medcin','$name', '$age', '$number', '$date')";

            if ($con->query($sql) === TRUE) {
                echo "Rendez-vous envoyé avec succès!";
            } else {
                echo "Erreur lors de l'envoi du rendez-vous: " . $con->error;
            }

            // Fermez la connexion à la base de données
            $con->close();
        } else {
            echo "Erreur: Tous les champs du formulaire doivent être remplis.";
        }
    } else {
        echo "Erreur: ID client ou ID médecin manquant.";
    }

?>

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
    <link rel="stylesheet" href="../Css/doucmentPatient.CSS" />
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
              <a href="#">Doctors <i class="fa-solid fa-chevron-down"></i></a>
              <div class="Doctors-option">
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
            <li class="Patient">
              <a href="#">Patient <i class="fa-solid fa-chevron-down"></i></a>
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

    <!-- ! main Start **************************************************************** -->
    <main>
      <div class="scrole">
        <div id="progress">
          <a href="#" id="prograsse-value"
            ><i class="fa-solid fa-arrow-up-long"></i
          ></a>
        </div>
      </div>

      <section class="doucmentPatient">
        <div class="container">
        <form action="" method="post">
            <div>
              <p>Patient Appointment Request</p>
            </div>
            <div>
              <label for="">Name</label>
              <input
              
                name="Name"
                type="text"
                placeholder="Patient Name"
                />
            </div>

            <div>
              <label for="">Age</label>
              <input
             
             
                name="Age"
                type="text"
                placeholder="Patient Age "
                />
            </div>
            <div>
              <label for="">Number</label>
              <input
                name="Number"
                type="text"
                placeholder="Patient Number "
                />
            </div>
            <div>
              <label for="dateInput">Select Date:</label>
              <input
                id="dateInput"
                type="date"
                id="dateInput"
                name="dateInput" />
            </div>
            <div class="submit">
              <button type="submit">Send The Appointment request</button>
            </div>
          </form>
        </div>
      </section>
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
    <script src="../jS/scrole.Js"></script>
    <script src="../jS/ValidDoucmentPatient.Js"></script>
  </body>
</html>
