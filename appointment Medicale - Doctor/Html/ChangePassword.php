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
    <link rel="stylesheet" href="../Css/ChangePasswrd.CSS" />
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

$result_doctor_tmp_name = mysqli_query($con,$query);
$doctor_row = mysqli_fetch_assoc($result_doctor_tmp_name);
$doctor_name = $doctor_row['tmp_name'];
$error = "";
$email_error = "";
$password_error = "";
$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['change_password'])) {
    $old_password = mysqli_real_escape_string($con, $_POST['old_password']);
    $new_password = mysqli_real_escape_string($con, $_POST['new_password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);
    $doctor_id = $_SESSION['medcin_id'];

    // Vérification que les champs ne sont pas vides
    if (empty($old_password) || empty($new_password) || empty($confirm_password)) {
        $password_error = "All fields are required.";
    } else {
        // Récupérer le mot de passe actuel du médecin depuis la base de données
        $query = "SELECT password FROM doctor WHERE id_medcin = '$doctor_id'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $current_password_hashed = $row['password'];

        // Vérifier que l'ancien mot de passe est correct
        if (sha1($old_password) !== $current_password_hashed) {
            $password_error = "The old password is incorrect.";
        } elseif ($new_password !== $confirm_password) {
            $password_error = "The new passwords do not match.";
        } else {
            // Hacher le nouveau mot de passe et le mettre à jour dans la base de données
            $new_password_hashed = sha1($new_password);
            $update_query = "UPDATE doctor SET password = '$new_password_hashed' WHERE id_medcin = '$doctor_id'";

            if (mysqli_query($con, $update_query)) {
                $success_message = "Password updated successfully.";
            } else {
                $password_error = "An error occurred while updating the password.";
            }
        }
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
        <h1>Change Password</h1>
        <h5>
          <span><a href="../Html/generale-Home.html">Home</a></span> /<span
            >Change Password</span
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
               <!-- <img src="../../img/doctors profile/doctor1/doctors1.jpg" alt="Doctor" class="DoCtor-img" />-->
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
            
                <img id="displayedImage" src="<?php echo htmlspecialchars($tmp_name, ENT_QUOTES, 'UTF-8'); ?>" alt="Doctor" class="DoCtor-img" />
              </li>
              <li>
              <h3>Dr.<?php echo $doctor_row['name']; ?></h3>
              </li>
              <li>
                <a href="./ProfileDoctor.php"
                  ><i class="fa-solid fa-user-tie"></i>Profile</a
                >
              </li>
              <li>
                <a href="./EditInformationDoc.php"><i class="fas fa-user-cog"></i>Profile Setting</a>
              </li>
             <!-- <li>
                <a href="./TimeEdit.HTML"
                  ><i class="fas fa-clock"></i> Timings Setting</a
                >
              </li>
              <li>
                <a href="./SchduleTiming.HTML"
                  ><i class="fas fa-clock"></i> Schedule Timing</a
                >
              </li>-->
              <li>
                <a href="./PatientRequet.php"
                  ><i class="fas fa-calendar-check"></i> Appointment</a
                >
              </li>
             <!-- <li>
                <a href="./PatientList.HTML"
                  ><i class="fas fa-user-injured"></i> My Patient</a
                >
              </li>-->
              <li>
                <a href="#"
                  ><i class="fas fa-user-injured"></i>Change Password</a
                >
              </li>
              <li>
                <a href="#"id="Quitter"><i class="fas fa-sign-out-alt"></i> Log Out</a>
              </li>
            </ul>
          </div>
          <div class="Content-option">
            <div class="Profile_Setting">
              <h4>Chang Password</h4>
              <div>
              <form method="post" action="ChangePassword.php">
                  <div>
                    <label for="">Old Password</label>
                    <input
                      type="password"
                      name="old_password" 
                      placeholder="Old Password"
                      required />
                  </div>
                  <div>
                    <label for="">New Password</label>
                    <input
                      type="password"
                      name="new_password" 
                      placeholder="New password"
                      required />
                  </div>
                  <div>
                    <label for="">Confirm password</label>
                    <input
                      type="password"
                      name="confirm_password"
                      placeholder="Confirm password"
                      required />
                  </div>

                  <div class="submit">
                    <button type="submit" name="change_password">Save change</button>
                  </div>
                  <?php if (!empty($password_error)) { ?>
                            <p class="error"><?php echo $password_error ?> </p>
                        <?php } ?>
                        <?php if (!empty($success_message)) { ?>
                            <p class="success"><?php echo $success_message ?> </p>
                        <?php } ?>
                </form>
                
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
    <script src="../jS/Uplode.Js"></script>
    <script src="../jS/scrole.Js"></script>
    <script src="../jS/boitdeConifrmation.Js"></script>
  </body>
</html>
