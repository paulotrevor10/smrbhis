<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/signup.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/smrbhis/images/logo.jpg" type="image/x-icon" />
    <script src="/smrbhis/javascript/script.js" defer></script>
    
    <title>Sign Up : SMRBHIS</title>
</head>

<body>
    <!-- <div class="background">
        <h1>San Mateo Rizal</h1>
    </div> -->

    <header>
        <!-- <div class="logo"></div> -->

        <div class="logo">
            <a href="index.php"><img src="/smrbhis/images/logo.jpg" alt="Logo" /></a>
        </div>

        <input type="checkbox" id="nav_check" hidden />
        <nav>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="index.php">About</a>
                </li>
                <li>
                    <a href="index.php">Contact Us</a>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="dropbtn ">SERVICES
                            <i class="fa fa-caret-down"></i>
                        </a>
                        <div class="dropdown-content">
                            <a href="vaccine-info.php"><i class="fa-solid fa-baby fa-lg"></i>Child
                                Vaccination</a>
                            <a href="maternity-info.php"><i
                                    class="fa-solid fa-person-pregnant fa-lg"></i>Maternity</a>
                            <a href="family-planning.php"><i class="fa-solid fa-people-roof fa-lg"></i>Family
                                Planning</a>
                            <a href="infectious-disease-information.php"><i
                                    class="fa-solid fa-virus fa-lg"></i>Infectious Disease</a>
                            <a href="non-communicable-disease-information.php"><i
                                    class="fa-solid fa-virus-slash fa-lg"></i>Non-Communicable
                                Disease</a>
                            <a href="dental-information.php"><i class="fa-solid fa-tooth fa-lg"></i>Dental</a>
                            <a href="environmental-activites.php"><i
                                    class="fa-solid fa-leaf fa-lg"></i>Environmental
                                Activities</a>
                        </div>
                </li>
                <li >
                    <a href="register.php" class="active">Register</a>
                </li>
                <button class="btn-login">RESIDENT LOGIN</button>
            </ul>
        </nav>
        <label for="nav_check" class="hamburger">
            <div></div>
            <div></div>
            <div></div>
        </label>
    </header>
    
    <!-- LOG IN POP UP -->
    <div class="blur-bg-overlay"></div>
    <div class="form-popup">
      <span class="close-btn material-symbol-rounded">✕</span>
      <div class="form-box">
        <div class="form-details">
          <h2>Welcome Back</h2>
          <p>
            Please log in using your personal information to stay connected with
            us.
          </p>
        </div>
        <div class="form-content">
          <h2>LOGIN</h2>
          <form action="#">
            <div class="input-field">
              <input type="text" required />
              <label>Email</label>
            </div>
            <div class="input-field">
              <input type="password" required />
              <label>Password</label>
            </div>
            <a href="" class="forgot-pass">Forgot password?</a>
            <button type="submit">Log In</button>
          </form>
          <div class="bottom-link">
            Don't have an account ?
            <a href="signup.php">Sign up</a>
          </div>
        </div>
      </div>
    </div>

    

    <div class="container-1">
        <div class="container-wrapper">
            <div class="content-1">
              
            </div>
            <div class="content-2">
                <div class="form-label">
                    <h1>Create Account!</h1>
                </div>
                <div class="form-container">
                <form action="profile.php">
                    <div class="form-group">
                        <input type="text"  placeholder="First Name">
                        <input type="text"  placeholder="Middle Name">
                        <input type="text"  placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text"  placeholder="Username">
                        <input class="inp-contact" type="number"  placeholder="Contact Number">
                    </div>
                    <div class="form-group">
                        <input class="inp" type="email"  placeholder="Enter Email">
                    </div>

                    <div class="form-group">
                        <input class="inp" type="password"  placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input class="inp" type="password"  placeholder="Confirm Password">
                    </div>
                    <div class="checkbox-container">
                        <input type="checkbox" id="checkbox1" class="checkbox-custom">
                        <label for="checkbox1" class="checkbox-label">I agree to <a href="">Patient Agreement & Medicare Authorization  </a></label>
                      </div>
                      
                      <button name="signup">Sign Up</button>
                </form>
                    
                    
                    
                 </div>
            </div>
        </div>


    </div>







    <!-- FOOTER  -->
    <!-- <footer>
        <span>© Copyright SMRBHIS. All Rights Reserved</span>
    </footer> -->
</body>

</html>