<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- font awesome link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="icon" href="images/logo.jpg" type="image/x-icon" />
    <script src="javascript/script.js" defer></script>
    
    <title>Barangay Health Services : SMRBHIS</title>
  </head>
  <body>
    <!-- <div class="background">
        <h1>San Mateo Rizal</h1>
    </div> -->

    <header>
      <!-- <div class="logo"></div> -->

      <div class="logo">
        <a href="index.php"><img src="images/logo.jpg" alt="Logo" /></a>
      </div>

      <input type="checkbox" id="nav_check" hidden />
      <nav>
        <ul>
          <li>
            <a href="index.php" class="active">Home</a>
          </li>
          <li>
            <a href="#about-us-section">About</a>
          </li>
          <li>
            <a href="#contact-section">Contact Us</a>
          </li>
          <li>
            <div class="dropdown">
              <a class="dropbtn"
                >SERVICES
                <i class="fa fa-caret-down"></i>
              </a>

              <div class="dropdown-content">
                <a href="vaccine-info.php"
                  ><i class="fa-solid fa-baby fa-lg"></i>Child Vaccination</a
                >
                <a href="maternity-info.php"
                  ><i class="fa-solid fa-person-pregnant fa-lg"></i>Maternity</a
                >
                <a href="family-planning.php"
                  ><i class="fa-solid fa-people-roof fa-lg"></i>Family
                  Planning</a
                >
                <a href="infectious-disease-information.php"
                  ><i class="fa-solid fa-virus fa-lg"></i>Infectious Disease</a
                >
                <a href="non-communicable-disease-information.php"
                  ><i class="fa-solid fa-virus-slash fa-lg"></i>Non-Communicable
                  Disease</a
                >
                <a href="dental-information.php"><i class="fa-solid fa-tooth fa-lg"></i>Dental</a>
                <a href="environmental-activites.php"
                  ><i class="fa-solid fa-leaf fa-lg"></i>Environmental
                  Activities</a
                >
              </div>
            </div>
          </li>
          <li>
            <a href="signup.php">Register</a>
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

    <div class="container">
      <div class="main-page">
        <div class="smr-logo">
          <img src="images/smr-logo.png" alt="San Mateo Rizal Logo" />
        </div>
        <div class="sub-title">
          <span class="title-1">SAN MATEO RIZAL</span>
          <span class="title-2">BARANGAY HEALTH</span>
          <span class="title-3">INFORMATION SYSTEM</span>
        </div>
      </div>

      <!-- ABOUT US PAGE -->
      <div class="about-us" id="about-us-section">
        <span class="label">ABOUT US</span>
        <div class="about-us-content-1">
          <div class="about-us-img">
            <img src="images/child-vacc.png" alt="Child Vaccination Image" />
          </div>
          <div class="about-us-text">
            <h1>Pagbabakuna</h1>
            <h2>Child Vaccination</h2>
            <ul>
              <li>
                <h3>
                  Pagbabakunahan natin ang ating mga anak!<br />Miyerkules, 8:00
                  - 5:00
                </h3>
              </li>
            </ul>
            <a href="vaccine-info.php"
              ><span>Higit pang impormasyon</span></a
            >
          </div>
        </div>
        <div class="about-us-content-2">
          <div class="about-us-text">
            <h1>Pangangalaga sa Buntis</h1>
            <h2>Maternity Health Care</h2>
            <ul>
              <li>
                <h3>
                  Ang pangangalaga sa Buntis na Nanay,<br />Sinisiguradong
                  Ligtas ang Dalawang Buhay.
                </h3>
              </li>
            </ul>
            <a href="maternity-info.php"
              ><span>Higit pang impormasyon</span></a
            >
          </div>
          <div class="about-us-img">
            <img
              src="images/maternity-health-care.png"
              alt="Maternity Health Care"
            />
          </div>
        </div>
        <div class="about-us-content-1">
          <div class="about-us-img">
            <img src="images/family-planning.png" alt="Family Planning Image" />
          </div>
          <div class="about-us-text">
            <h1>Pagplaplano ng Pamilya</h1>
            <h2>Family Planning</h2>
            <ul>
              <li><h3>Matalinong Pagpaplano ng Kinabukasan</h3></li>
            </ul>
            <a href="family-planning.php">Higit pang impormasyon</a>
          </div>
        </div>
      </div>

      <!-- CONTACT PAGE -->
      <div class="contact-us" id="contact-section">
        <span class="label">CONTACT US</span>
        <div class="contact-content">
          <h1>
            DEPARTMENT OF ORDER AND SAFETY/ MUNICIPAL <br />DISASTER RISK
            REDUCTION AND MANAGEMENT OFFICE
          </h1>
          <h2>
            <i class="fa-solid fa-phone fa-xl" style="color: #101723"></i
            >8-781-68-20
          </h2>
          <h1>SAN MATEO MUNICIPAL POLICE STATION</h1>
          <h2>
            <i class="fa-solid fa-phone fa-xl" style="color: #101723"></i
            >8-297-81 LOC.114
          </h2>
          <h1>SAN MATEO BEREAU OF FIRE PROTECTION</h1>
          <h2>
            <i class="fa-solid fa-phone fa-xl" style="color: #101723"></i
            >8-750-11-56
          </h2>
        </div>
        <div class="socmed-content">
          <h1>Get connected with us on social networks</h1>
          <div class="nav-links">
            <nav>
              <ul>
                <li>
                  <i
                    class="fa-brands fa-facebook fa-bounce fa-xl"
                    style="color: #0165e1"
                  ></i
                  ><a
                    href="https://www.facebook.com/sanmateorizalPIO"
                    target="_blank"
                    nolink
                    norefer
                    >sanmateorizalPIO</a
                  >
                </li>
                <li>
                  <i class="fa-solid fa-globe fa-spin fa-xl"></i
                  ><a
                    href="https://sanmateo.gov.ph/"
                    target="_blank"
                    nolink
                    norefer
                    >sanmateo.gov.ph</a
                  >
                </li>
                <li>
                  <i
                    class="fa-brands fa-youtube fa-shake fa-xl"
                    style="color: #ff0000"
                  ></i
                  ><a
                    href="https://www.youtube.com/@SanMateoRizal"
                    target="_blank"
                    nolink
                    norefer
                    >@SanMateoRizal</a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <!-- FOOTER  -->
    <footer>
      <span>© Copyright SMRBHIS. All Rights Reserved</span>
    </footer>
  </body>
</html>
