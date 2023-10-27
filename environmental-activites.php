<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/environmental.css" type="text/css" />
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
  <title>Environmental Information : SMRBHIS</title>
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
    
    
    <div class="container-1">
        
        <div class="content-img">
          <img src="images/leaf-bg.png" alt="Dental">
        </div>
        <div class="content-title">
            <span>PROGRAMANG<br>PANGKAPALIGIRAN</span>
        </div>
      
    </div>
    
    <div class="container-2">
        <div class="container-misvis">
            <h1>MISSION</h1>
            <p>To guarantee sustainable Environmental <br>Sanitation (ES) services in every community</p>
        </div>
        <div class="container-misvis">
            <h1>VISION</h1>
            <p>Environmental Health (EH) related diseases are prevented and no longer a public health problem in the Philippines (based on on-going Strategic Plan 2019-2022)</p>
        </div>
    </div>
    
    <div class="container-3">
        <div class="container-objective">
            <h1>OBJECTIVES</h1>
            <ul>
                <li><span>Expand and strengthen delivery of quality ES services</span></li>
                <li><span>Institute supportive organizational, policy and management systems</span></li>
                <li><span>Increase financing and investment in ES</span></li>
                <li><span>Enforce regulation policy and standards</span></li>
                <li><span>Establish performance accountability mechanism at all levels</span></li>
            </ul>
        </div>
    </div>
    
    <div class="container-4">
        <div class="container-concept">
            <h1>Program Concepts</h1>
            <p>Drinking-water supply, Sanitation (e.g excreta, sewage and septage management), Zero Open Defecation Program (ZODP), Food Sanitation, Air Pollution (indoor and ambient), Chemical Safety, WASH in Emergency situations, Climate Change for Health and Health Impact Assessment (HIA)</p>
        </div>
        
        <div class="container-instituition">
            <h1>Partner Institutions</h1>
            <span>DENR, DILG, DPWH, DA, PIA</span>
            <span>World Health Organization (WHO), UNICEF, USAID, AusAID</span>
        </div>
        
        <div class="container-programs">
            <h1>6 Program Accomplishments/Status</h1>
            <ul>
                <li><span>Households with access to safe water has increased from 86.93 in 2014 to 91.06 in 2016.</span></li>
                <li><span>While households with sanitary toilet decreased from 84.18 in 2015 to 83.46 in 2016 due to occurrence of typhoons/calamities that caused devastations.</span></li>
                <li><span>Other environmental sanitation indicators has also been increasing in the past years (2014-2016).</span></li>
            </ul>
        </div>
    </div>
    
    
  
   
    
    
        
    <!-- FOOTER  -->
    <!-- <footer>
        <span>© Copyright SMRBHIS. All Rights Reserved</span>
    </footer> -->
  </body>
</html>
