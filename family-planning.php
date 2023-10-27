<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/family-planning.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/images/logo.jpg" type="image/x-icon" />
    <script src="javascript/script.js" defer></script>
  <title>Family Planning Information : SMRBHIS</title>
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
    
    <div class="family-container">
        <div class="family-content-title">
            <h1>PAGPAPLANO NG PAMILYA</h1>
            <p>Planuhin ang pamilya, Planuhin ang Kinabukasan!</p>
            
        </div>
        <div class="family-content">
            <div class="content-1">
              <p>Bawat taon, kalahating milyong babae ang namamatay mula sa mga problema sa pagbubuntis, panganganak at hindi ligtas na pagpapalaglag. Maaaring mapigilan ng pagpaplano ng pamilya ang karamihan sa pagkamatay na ito. 
              <br><br>Halimbawa, makakapigil ang pagpaplano ng pamilya sa panganib mula sa pagbubuntis na :</p>
              <ul>
                <li>Masyadong Maaga</li>
                <li>Masyadong Huli</li>
                <li>Masyadong magkakalapit</li>
                <li>Masyadong Madami</li>
              </ul>
            </div>
            <div class="content-2">
              <p>Bukod sa pagliligtas ng buhay, may iba pang mga benepisyo ang pagpaplano ng pamilya</p>
              <ul>
                <li>Mas lulusog ang mga nanay at sanggol, dahil maiiwasan ang delikadong pagbubuntis.</li>
                <li>Mas kaunti ang anak, maaaring mas marami ang pagkain para sa bawat isa.</li>
                <li>Kapag naghintay bago magkaanak, maaaring magkapanahon ka para magtapos ng pag-aaral ang mga kabataang babae’t lalaki.</li>
                <li>Kapag mas kaunti ang anak, maaaring mas may panahon para sa sarili at mga anak.</li>
                <li>Makakatulong din ang pagpaplano ng pamilya para mas masiyahan kayong magpartner sa pagtatalik, dahil hindi nangangamba sa di-gustong pagbubuntis. May iba pang benepisyo sa kalusugan ang ibang paraan. Halimbawa, makakatulong labanan ng mga condom ang pagkalat ng mga impeksyon na naihahawa sa pagtatalik (INP) kasama na ang HIV.</li>
                <li>Makakatulong ang mga hormonal na kontraseptibo sa di-regular na pagdating at pananakit habang nagreregla .</li>
              </ul>
            </div>
            
        </div>
    </div>
    
    
    
        
    <!-- FOOTER  -->
    <!-- <footer>
        <span>© Copyright SMRBHIS. All Rights Reserved</span>
    </footer> -->
  </body>
</html>
