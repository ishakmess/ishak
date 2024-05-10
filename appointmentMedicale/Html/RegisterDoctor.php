<?php
include("connect.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure les fichiers PHPMailer
require '../../vendor/autoload.php';

$error = "";
$name_error = "";
$email_error = "";
$password_error = "";
$confirmpass_error = "";
$location_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $speciality = mysqli_real_escape_string($con, $_POST['speciality']);
    $confirmpass = mysqli_real_escape_string($con, $_POST['cpassword']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $workingdays = mysqli_real_escape_string($con, $_POST['working']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
   /* $target_dir = "../../img/";
    $nom_du_fichier = $_FILES["validation_of_medical_credentials"]["name"];

    $target_file = $target_dir . basename($nom_du_fichier);
    $pdfFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    if ($pdfFileType !== "pdf") {
        die("Seuls les fichiers PDF sont autorisés.");
    }
    
    if (!move_uploaded_file($_FILES["validation_of_medical_credentials"]["tmp_name"], $target_file)) {
        die("Erreur lors du téléchargement du fichier.");
    }*/
    
    // Génération du token pour la vérification d'e-mail
    $token = bin2hex(random_bytes(16));
    
     //name validation
     
    if (!empty(trim($name))) {
        if (strlen($name) <= 50) {
            $name = trim($name);
        } else {
            $name_error = "name must be at least 50 characters";
        }
    } else {
        $name_error = "name cannot be blank";
    }
    
    
    // email validation
    if (!empty(trim($email))) {
        if (strlen($email) <= 100) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_chek = "SELECT * FROM doctor WHERE email= '$email'";
                $query = mysqli_query($con, $email_chek);
                if ($query->num_rows > 0) {
                    $email_error = "email already exists";
                }
            }
        }
    } else {
        $email_error = "username cannot be blank";
    }
    // password validation
    if (!empty(trim($password))) {
        if (strlen($password) >7) {
            $password = trim($password);
            //Encrypt the password in the database
            $password1 =  sha1($_POST['password']);
        } else {
            $password_error = "password must be at least 8 characters";
        }
    } else {
        $password_error = "password cannot be blank";
    }

    // confirm password validation
    if (!empty(trim($confirmpass))) {
        if ($confirmpass == $password) {
            // $password =  sha1($_POST['password']);
            $confirmpass = trim($confirmpass);
        } else {
            $confirmpass_error = "not a valid password";
        }
    } else {
        $confirmpass = " confirm password cannot be blank";
    }
    //location validation
    if (!empty(trim($location))) {
        if (strlen($location) <= 50) {
            $location = trim($location);
        } else {
            $location_error = "name must be at least 50 characters";
        }
    } else {
        $location_error = "name cannot be blank";
    }
    // Vérification de l'acceptation des conditions
if (!isset($_POST['agree'])) {
    $error = "You must agree to the terms and conditions.";
}


    // insert data if not error occurs
    if (
       
        empty($name_error) &&
        empty($email_error) &&
        empty($password_error) &&
        empty($confirmpass_error) 
    ) {
        $insert = "INSERT INTO doctor (  name,  email, password,speciality,location,workingdays,price) VALUES ('$name',   '$email', '$password1', '$speciality', '$location', '$workingdays', '$price')";
        $insert_query = mysqli_query($con, $insert);
        
        if ($insert_query) {
            header('location:appointment Medicale - Doctor/Html/ProfileDoctor.HTML');
        }
   }
   
   // Configurez les paramètres de connexion SMTP
   $mail = new PHPMailer();
   $mail->isSMTP();
$mail->Host = 'sandbox.smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Port = 2525;
$mail->Username = '3ed4f61c32cfad';
$mail->Password = '524f6a8bfa54b0';
   $mail->SMTPSecure = 'tls';

   // Définir les détails de l'e-mail à envoyer
   $mail->setFrom('your_username@example.com', 'Your Name');
   $mail->addAddress($email);
   $mail->Subject = 'Vérification de l\'e-mail';
   $mail->isHTML(true);
   $token = bin2hex(random_bytes(16));
   $mail->Body = 'Veuillez cliquer sur le lien suivant pour vérifier votre e-mail : <a href="http://localhost/PROJET/appointmentMedicale/Html/verificationemail.php?token=' . $token . '">Cliquez ici</a>';



   // Envoyer l'e-mail
   if ($mail->send()) {
     // Si l'e-mail est envoyé avec succès, insérez le token dans la base de données
     // Assurez-vous d'avoir une colonne 'verification_token' dans votre table 'doctor'
     $updateTokenQuery = "UPDATE doctor SET verification_token = '$token' WHERE Email = '$email'";
     mysqli_query($con, $updateTokenQuery);
     // Redirigez l'utilisateur vers une page de succès ou affichez un message de succès ici
   } else {
     // En cas d'erreur lors de l'envoi de l'e-mail, affichez un message d'erreur
     echo 'Erreur lors de l\'envoi de l\'e-mail : ' . $mail->ErrorInfo;
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Medical Appointment</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="shortcut icon" href="../Icons/logo-small.png" type="image/x-icon" />
  <link rel="stylesheet" href="../Css/RegisterDoctor.CSS" />
</head>

<body>
  <header>
    <div class="Logo">
      <img src="../../img/logo.png" alt=" Logo" width="150px" />
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
                  <a href="../Html/generale-Home.html"><img src="../../img/home/Genral-Home.jpg" alt="img-cardiology" />
                    <div>Generale Home</div>
                  </a>
                </li>
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
            <a href="#">Doctors <i class="fa-solid fa-chevron-down"></i></a>
            <div class="Doctors-option">
              <ul>
                <li>
                  <a href="./SchduleTiming.HTML">Schedule Timing</a>
                </li>
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
                  <a href="#" class="Doct"> Doctors </a><i class="fa-solid fa-chevron-right"></i>
                  <ul class="DoctorsOption">
                    <li>
                      <a href="./MapGrid.HTML" class="option">Map Grid</a>
                    </li>
                    <li>
                      <a href="./MapList.php" class="option">Map List</a>
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
      <a href="../Html/Login.php"> Singe </a>
    </div>
  </header>

  <!-- !main  start ***************************************************** -->
  <section class="Register">
    <div class="parent">
      <div class="left"><img src="../../img/Register.png" /></div>
      <div class="right">
      <form action="RegisterDoctor.php" method="post" enctype="multipart/form-data">

          <div>
            <p>Doctor Register</p>
            <a href="./Register.php">Are you a Patient?</a>
          </div>
          
          <div>
            <label for=""> Name </label>
            <input type="text"id="name"name="name" placeholder="Your  Name" required />
        </div>
        <?php if (!empty($name_error)) { ?>
        <p class="error"><?php echo $name_error ?> </p>
    <?php } ?>
        <div>
            <label for="">Email</label>
            <input type="email"id="email"name="email" placeholder="Enter Your Email " required />
        </div>
        <?php if (!empty($email_error)) { ?>
        <p class="error"><?php echo $email_error ?> </p>
    <?php } ?>
        <div>
            <label for="">Password</label>
            <input type="password" id="password" name="password"placeholder="Create password" required />
        </div>
        <?php if (!empty($password_error)) { ?>
        <p class="error"><?php echo $password_error ?> </p>
    <?php } ?>
        <div>
            <label for="">confirm Password</label>
            <input type="password" id="cpassword" name="cpassword"placeholder="confirm your password" required />
        </div>
        <?php if (!empty($confirmpass_error)) { ?>
        <p class="error"><?php echo $confirmpass_error ?> </p>
    <?php } ?>
        <div>
            <label for="">Specialty</label>
            <select id="speciality" name="speciality">
                <option value="Generale Doctor" selected>Generale Doctor</option>
                <option value="cardiology">cardiology</option>
                <option value="Eye care">Eye care</option>
                <option value="Dentist">fritility</option>
                
            </select>
        </div>
        <div>
            <label for="">Location</label>
            <input type="text" id="location" name="location" placeholder="Enter Your Location Work" required />
        </div>
        <?php if (!empty($location_error)) { ?>
        <p class="error"><?php echo $location_error ?> </p>
    <?php } ?>
          <div class="form-group">
           <!-- <label>validation of medical credentials</label>
            <input type="file" id="file" name="validation_of_medical_credentials" />
          </div>-->
          
            <label for="">Working days</label>
            <input type="text" id="working" name="working" placeholder="exemple:sunday to thursday" required />
            <label for="">Price</label>
            <input type="text" id="price" name="price" placeholder="price of your consultation" required />
        
            <a href="../Html/Login.php" class="Acount">Already have an account?</a>
          
          <div class="content">
            <p>Attention <button id="readMoreBtn">Skip</button></p>
            <input type="checkbox" id="agree" name="agree" />
            <p class="more">
              If you are not a doctor and we know that You Falsified your
              papers will be prosecuted
            </p>
            </div>
          <div class="submit">
            <button type="submit" onclick="signup()">Signup</button>
          </div>
        </form>
       
      </div>
    </div>
  </section>
 <!-- Commentaire sur une seule ligne  <footer>
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
        </footer>-->

        <script src="../jS/verifyemail.js"></script>
  <script src="../jS/registerdoctore.Js" >
   

  </script>
</body>

</html>