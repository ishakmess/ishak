

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Medical Appointment</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="shortcut icon" href="../Icons/logo-small.png" type="image/x-icon" />
  <link rel="stylesheet" href="../Css/EditInformationDoc.CSS" />
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
$result_doctor_email = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_email);
$doctor_name = $doctor_row['email'];
$result_doctor_speciality = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_speciality);
$doctor_name = $doctor_row['speciality'];
$result_doctor_location = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_location);
$doctor_name = $doctor_row['location'];
$result_doctor_workingdays = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_workingdays);
$doctor_name = $doctor_row['workingdays'];
$result_doctor_price = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_price);
$doctor_name = $doctor_row['price'];
$result_doctor_tmp_name = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_tmp_name);
$doctor_name = $doctor_row['tmp_name'];
// Vérifie si un fichier a été téléchargé
if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
  $target_dir = "../../img/";
  $nom_du_fichier = $_FILES["image"]["name"];
  $target_file = $target_dir . basename($nom_du_fichier);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  // Vérification du type de fichier
  if ($imageFileType !== "jpg" && $imageFileType !== "png" && $imageFileType !== "jpeg" && $imageFileType !== "gif") {
      die("Seuls les fichiers JPG, JPEG, PNG et GIF sont autorisés.");
  }

  // Déplacement du fichier vers le répertoire cible
  if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      die("Erreur lors du téléchargement du fichier.");
  }

  // Chemin complet de l'image
  $image_path = $target_file;

 

  // Requête SQL pour mettre à jour le champ 'img' du patient dans la base de données
  $query = "UPDATE doctor SET tmp_name = '$image_path' WHERE id_medcin = $doctor_id";
  $result = mysqli_query($con, $query);

  if ($result) {
      echo "L'image a été téléchargée avec succès.";
  } else {
      echo "Erreur lors de l'enregistrement de l'image dans la base de données.";
  }
} else {
  echo "Erreur lors du téléchargement de l'image.";
}
// Vérifier si le formulaire a été soumis
if(isset($_POST['save_changes']) && !empty($_POST['location']) && !empty($_POST['workingdays']) && !empty($_POST['price'])) {
  // Récupération des nouvelles valeurs des champs du formulaire
 
  $new_location = $_POST['location'];
  $new_workingdays = $_POST['workingdays'];
  $new_price = $_POST['price'];
  // Requête SQL pour mettre à jour les champs 'firstname' et 'lastname' du patient dans la base de données
  $query = "UPDATE  doctor SET location = '$new_location', workingdays = '$new_workingdays', price = ' $new_price' WHERE id_medcin = $doctor_id";
  $result = mysqli_query($con, $query);
  
 
  if ($result) {
      echo "Les changements ont été enregistrés avec succès.";
  } else {
      echo "Erreur lors de l'enregistrement des changements.";
  }
}         
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
              Home <i class="fa-solid fa-chevron-down"></i></a>
            <!-- !  Home-option -->
            <div class="Home-option">
              <ul>
                <li>
                  <a href="../Html/Cardeiologie-Home.HTML"><img src="../../img/home/Cardiology-Home.jpg"
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
    <!-- ! section INFO start  -->
    <section class="INFO">
      <h1>Profile Setting</h1>
      <h5>
        <span><a href="../Html/generale-Home.html">Home</a></span> /<span>Profile Setting</span>
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
             <!-- <img src="../../img/doctors profile/doctor1/doctors1.jpg"alt="Doctor" class="DoCtor-img" />-->
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
           <!-- <li>
              <h3>Dr. Darren Elder</h3>
              <p>BDS, MDS - Oral & Maxillofacial Surgery</p>
            </li>-->
            
         
    <!-- Affichage du nom du médecin
    -->
   
    <h3>Dr.<?php echo $doctor_row['name']; ?></h3>
            <li>
              <a href="./ProfileDoctor.php"><i class="fa-solid fa-user-tie"></i>Profile</a>
            </li>
            <li>
              <a href="#"><i class="fas fa-user-cog"></i>Profile Setting</a>
            </li>
            <!--<li>
              <a href="./TimeEdit.HTML"><i class="fas fa-clock"></i> Timings Setting</a>
            </li>
            <li>
              <a href="./SchduleTiming.HTML"><i class="fas fa-clock"></i> Schedule Timing</a>
            </li>-->
            <li>
              <a href="./PatientRequet.php"><i class="fas fa-calendar-check"></i> Appointment</a>
            </li>
          <!--  <li>
              <a href="./PatientList.HTML"><i class="fas fa-user-injured"></i> My Patient</a>
            </li>-->
            <li>
              <a href="./ChangePassword.php"><i class="fas fa-user-injured"></i>Change Password</a>
            </li>
            <li>
                <a href="#"id="Quitter"><i class="fas fa-sign-out-alt"></i> Log Out</a>
              </li>
          </ul>
        </div>

        <div class="Content-option">
    <div class="Profile_Setting">
        <h4>Basic Information</h4>
        <div>
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
                <img id="displayedImage" src="<?php echo htmlspecialchars($tmp_name, ENT_QUOTES, 'UTF-8'); ?>" alt="Displayed Image" />
            </div>
        </div>
  

            <div>

            <form action="EditInformationDoc.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" id="fileInput" name="image" accept="image/*" />
                <div class="file-name">img</div>
              </div>
                <div>
                  <label for=""> Name </label>
                  <input readonly type="text" value="<?php echo $doctor_row['name']; ?>" required />
                </div>
                <div>
                  <label for="">Email</label>
                  <input type="email" value="<?php echo $doctor_row['email']; ?>" required readonly />
                </div>
                <div>
                  <label for="">Specialty</label>
                  <input type="text" value="<?php echo $doctor_row['speciality']; ?>" readonly />
                </div>
                <div>
                  <label for="">Location</label>
                  <input id="location" name="location" placeholder="Enter Your Location Work" required
                    value="<?php echo $doctor_row['location']; ?>" />
                </div>
                <div>
                  <label for="">Working Days</label>
                  <input id="workingdays" name="workingdays" placeholder="exemple:sunday to thursday" required
                    value="<?php echo $doctor_row['workingdays']; ?>" />
                </div>
                <div>
                  <label for="">Price of the appointment </label>
                  <input id="price" name="price" placeholder="Enter the price of your appointment" required value="<?php echo $doctor_row['price']; ?>" />
                </div>
                <button type="submit" name="save_changes">Save change ?</button>
              </form>
              <p>
                <span>Note: </span> You Can Only Change The Location and
                Password and the Price .
              </p>
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
          <li>
            <h1>Social Media</h1>
          </li>
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
          <li>
            <h1>Contact Us</h1>
          </li>
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
  <script src="../jS/Uplode.Js"></script>
  <script src="../jS/boitdeConifrmation.Js"></script>
  <script src="../jS/scrole.Js"></script>
</body>

</html>