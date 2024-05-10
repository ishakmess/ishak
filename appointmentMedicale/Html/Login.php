<?php
session_start(); // Démarrez la session au début du script

include "connect.php";
$error = "";
$email_error = "";
$password_error = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    // email validation
    if (!empty(trim($email))) {
        $email = trim($email);
    } else {
        $email_error = "Please enter a valid email";
    }
    // password validation
    if (!empty(trim($password))) {
        // Decrypt the password in the database
        $password1 =  sha1($_POST['password']);
        $password = trim($password1);
    } else {
        $password_error = "Please enter a valid password";
    }

    // Make user login if correct details entered
    if (
        empty($email_error) &&
        empty($password_error) &&
        empty($error)
    ) {
        $select = "SELECT * FROM patient WHERE email = '$email' AND password = '$password'";
        $s_query = mysqli_query($con, $select);

        if ($s_query->num_rows > 0) {
            $result = mysqli_fetch_assoc($s_query);

            // Stockez les informations de l'utilisateur dans la session
            $_SESSION['client_id'] = $result['id_patient']; // Suppose que l'ID de l'utilisateur est stocké dans la colonne 'id' de la table 'patient'
            $_SESSION['client_email'] = $result['email']; // Stockez d'autres informations de l'utilisateur si nécessaire

           header('location:../../appointment Medicale - Patient/Html/PatientProfile.HTML');
            exit(); // Assurez-vous de sortir après avoir redirigé l'utilisateur
        } else {
            $error = "Incorrect details";
        }
    }
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
    <link rel="stylesheet" href="../Css/Login.CSS" />
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
                    <a href="./SchduleTiming.HTML">Schedule Timing</a>
                  </li>
                  <li><a href="./PatientList.HTML">Patient List</a></li>

                  <li>
                    <a href="./EditInformationDoc.HTml">Profile Setting</a>
                  </li>
                  <li><a href="./RegisterDoctor.Html">Doctors Register</a></li>
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
        <a href="../Html/Login.HtML"> Singe </a>
      </div>
    </header>
    <section class="Register">
      <div class="parent">
        <div class="right">
        <form method="post">
            <div>
              <p>Login Patient</p>
              <a href="./Logindoctor.php">Are you a doctor?</a>
            </div>
            <div class="inputBox">
          <?php if (!empty($error)) { ?>
                    <p class="error"><?php echo $error ?> </p>
                <?php } ?>
            <input type="email" id="email" name="email" placeholder="Email" required />
            <?php if (!empty($email_error)) { ?>
                    <p class="error"><?php echo $email_error ?> </p>
                <?php } ?>
            <i class="bx bx-user-plus"></i>
          </div>
          <div class="inputBox">
            <input type="password"id="password" name="password" placeholder="password" required />
            <?php if (!empty($password_error)) { ?>
                    <p class="error"><?php echo $password_error ?> </p>
                <?php } ?>
            <i class="bx bxs-lock-alt"></i>
          </div>
            <!-- This is a comment in HTML. 
<div>
              <label for="">Email</label>
              <input
                name="Email"
                type="email"
                placeholder="Enter Your Email " />
            </div>
            <div>
              <label for="">Password</label>
              <input
                name="Password"
                type="password"
                placeholder="Enter your password"
                required />
            </div>
-->
            <div>
              <a href="./Register.php">you don't have an account?</a>
            </div>
            <button type="submit">Login</button>
          </form>
        </div>
        <div class="left"><img src="../../img/Register.png" /></div>
      </div>
    </section>
    <script src="../jS/Signe.Js"></script>
  </body>
</html>
