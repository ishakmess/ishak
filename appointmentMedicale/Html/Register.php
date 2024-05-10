<?php
include("connect.php");


$error = "";
$firstname_error = "";
$lastname_error = "";
$email_error = "";
$password_error = "";
$confirmpass_error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpass = mysqli_real_escape_string($con, $_POST['cpassword']);
    
    //firstname validation
    if (!empty(trim($firstname))) {
        if (strlen($firstname) <= 50) {
            $firstname = trim($firstname);
        } else {
            $firstname_error = "firstname must be at least 50 characters";
        }
    } else {
        $fiststname_error = "firstname cannot be blank";
    }
    // lastname validation
    if (!empty(trim($lastname))) {
        if (strlen($lastname) <= 50) {
            $lastname = trim($lastname);
        } else {
            $lastname_error = "username must be at least 50 characters";
        }
    } else {
        $lastname_error = "username cannot be blank";
    }
    
    // email validation
    if (!empty(trim($email))) {
        if (strlen($email) <= 100) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $email_chek = "SELECT * FROM patient WHERE email= '$email'";
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
        if (strlen($password) == 8) {
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

    // insert data if not error occurs
    if (
       
        empty($firstname_error) &&
        empty($lastname_error) &&
        empty($email_error) &&
        empty($password_error) &&
        empty($confirmpass_error)
    ) {
        $insert = "INSERT INTO patient (  firstname,lastname,  email, password) VALUES ('$firstname','$lastname',   '$email', '$password1')";
        $insert_query = mysqli_query($con, $insert);
        if ($insert_query) {
          header('location:../../appointment Medicale - Patient/Html/PatientProfile.HTML');
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
  <link rel="shortcut icon" href="../Icons/logo-small.png" type="image/x-icon" />
  <link rel="stylesheet" href="../Css/Register.Css" />
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
      <a href="../Html/Register.Html"> Register</a>
    </div>
    <div class="Login">
      <i class="fa-solid fa-lock"></i>
      <a href="../Html/Login.php"> Singe </a>
    </div>
  </header>
  <section class="Register">
    <div class="parent">
      <div class="left"><img src="../../img/Register.png" /></div>
      <div class="right">
      <form action="register.php" method="post">
          <div>
            <p>Patient Register</p>
            <a href="./RegisterDoctor.php">Are you a Doctor?</a>
          </div>
          <div>
            <label for="">First Name </label>
            <input type="text" id="firstname" name="firstname" placeholder="Your First Name" required />
          </div>
          <?php if (!empty($firstname_error)) { ?>
          <p class="error">
            <?php echo $firstname_error ?>
          </p>
          <?php } ?>
          <div>
            <label for="">Last Name </label>
            <input type="text" id="lastname" name="lastname" placeholder="Your Last Name " required />
          </div>
          <?php if (!empty($lastname_error)) { ?>
          <p class="error">
            <?php echo $lastname_error ?>
          </p>
          <?php } ?>
          <div>
            <label for="">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email " required />
          </div>
          <?php if (!empty($email_error)) { ?>
          <p class="error">
            <?php echo $email_error ?>
          </p>
          <?php } ?>
          <div>
            <label for="">Password</label>
            <input type="password" id="password" name="password" placeholder="Create password" required />
          </div>
          <?php if (!empty($password_error)) { ?>
          <p class="error">
            <?php echo $password_error ?>
          </p>
          <?php } ?>
          <div>
            <label for="">Confirm password</label>
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm password" required />
          </div>
          <?php if (!empty($confirmpass_error)) { ?>
          <p class="error">
            <?php echo $confirmpass_error ?>
          </p>
          <?php } ?>
          <div>

            <a href="./SIGNUP.HTML">Already have an account?</a>
          </div>
          <div class="submit">
            <button name='submit' id='submit' type='submit'><a href='#'>Signup</a></button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script src="../jS/register.JS"></script>
  <script src="../jS/scrole.Js"></script>
</body>

</html>