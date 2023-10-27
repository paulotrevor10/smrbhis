<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/vaccine-info.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/logo.jpg" type="image/x-icon" />
    <script src="javascript/script.js" defer></script>
  <title>Vaccination Information : SMRBHIS</title>
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
    
    <!-- MAIN SECTION -->
    <div class="main">
        
        <div class="vaccine-container">
            <div class="vaccine-info-content">
                <h1>Pabakunahan natin ang ating mga anak!
                </h1>
                <p>  Ang natural na panlaban sa sakit (resistensiya o immunity) na ibinibigay ng nanay sa kaniyang anak ay naglalaho nang natural sa ika-3 buwan mula nang ipanganak para sa Pertussis, at ika-12 buwan naman mula nang isilang para sa Tigdas. Makalipas ang panahong nabanggit ay dapat magkaroon ang mga sanggol ng resistensiya o bumuo ng immunity upang maiwasan ang pagkakaroon ng sakit. Ang pagbabakuna ay isang paraan upang makabuo ng immunity.
                <br><br>Habang papalaki ang bata, magiging madalas ang kanilang pagkakataon na makisalamuha sa ibang tao, kaya't mas malaki ang pagkakataong sila ay mahawa sa mga sakit. Layunin naming ipagbigay-alam ang kahalagahan ng pagbabakuna upang maiwasan ang mga sakit na ito.
                </p>
            </div>
            <div class="vaccine-info-content">
                <h1>Ano ang pagbabakuna?
                </h1>
                <p>Ang pagbabakuna ay ang paglalapat o pag-inject sa ating katawan ng bakuna na mula sa pinahinang uri ng virus o bacteria tulad ng Tigdas, Pertussis atbp. Ito ay upang bumuo ang ating katawan ng sariling panlaban o immunity para sa uri ng sakit na ito. Ang uri ng gamot na ginagamit sa pagbabakuna ay tinatawag na bakuna o vaccine.
<br><br>Hindi lahat ng uri ng impeksiyon ay maaaring buuin bilang isang bakuna. May mga impeksiyon o sakit na maaaring gawing bakuna, depende sa uri ng virus o bacteria.</p>
            </div>
            <div class="vaccine-info-content">
                <h1>Bisa (effectiveness) ng pagbabakuna
                </h1>
                <p>Ang layunin ng pagbabakuna ay upang maiwasan ang pagkakasakit o maibsan ang paglala ng kalagayan kahit na magkasakit, subalit hindi basta nagkakaroon ng resistensiya (immunity) ang taong nabibigyan nito laban sa sakit. Ito’y depende sa pangangatawan ng mga bata o sa pisikal na kondisyon noong araw na siya’y binakunahan. Kung nais ninyong malaman kung kayo ay nakagawa ng resistensiya (immunity), maari mo rin masukat ang inyong antibody sa dugo sa pagsusuri sa pamamagitan ng pagsa-sample ng dugo (blood sampling).</p>
            </div>
        </div>
        
        <div class="vaccine-info-content-bottom">
           
            <p>Ang <strong>impeksiyon</strong> ay isang uri ng sakit na dala ng pathogen tulad ng virus at bacteria na pumapasok sa loob ng katawan ng tao at bumubuo ng iba’t ibang uri ng sintomas kapag ito ay dumami sa loob ng katawan. Depende sa uri ng pathogen, nakakaranas ng iba't ibang sintomas at ang pangkaraniwang palatandaan nito ay pagkakaroon ng lagnat, ubo at sakit ng ulo.</p>
        </div>
        
      </div>
  </body>
</html>
