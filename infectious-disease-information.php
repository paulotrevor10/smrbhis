<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/infectious-disease.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="/css/infectious-disease.css">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="/images/logo.jpg" type="image/x-icon" />
    <script src="javascript/script.js" defer></script>
    <script src="javascript/infectious.js"></script>
  <title>Infectious Disease Information : SMRBHIS</title>
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
        <div class="content-title">
            <span class="span-txt">MGA<br>NAKAKAHAWANG<br>SAKIT</span>
        </div>
        <div class="content-img">
          <img src="images/virus-bg.png" alt="Virus">
        </div>
      
    </div>
    <div class="container-2">
      
      <div class="disease-container">
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/ARI.jpg')">
           
            </div>
          <div class="title">
          <span class="span-txt">Acute Respiratory Infection</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/H1N1.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Influenza A (H1N1)</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/bird-flu.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Bird Flu (Avian Influenza)</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/chickenpox.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Chickenpox</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/cholera.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Cholera</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/dengue.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Dengue</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/diarrhea.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Diarrhea</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/diphtheria.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Diphtheria</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/ebola.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Ebola</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/HFMD.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Hand, Foot, and Mouth Disease</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/Hepatitis-A.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Hepatitis A</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/Hepatitis-B.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Hepatitis B</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/Hepatitis-C.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Hepatitis C</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/hiv-aids.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">HIV/AIDS</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/Influenza.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Influenza</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/leprosy.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Leprosy</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/malaria.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Malaria</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/measles.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Measles</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/meningococcemia.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Meningococcemia</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/pertussis.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Pertussis</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/poliomyelitis.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Poliomyelitis</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/rabies.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Rabies</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/sars.jpg')">
            
            </div>
          <div class="title" style="font-size: .7em;">
          <span class="span-txt">Severe Acute Respiratory Syndrome (SARS)</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/sore-eyes.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Sore Eyes</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/tuberculosis.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Tuberculosis</span>
          </div>
        </div>
        
        <div class="disease-wrapper">
          <div class="disease-box" onclick="openImageModal('images/disease/typhoid-fever.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Thypoid Fever</span>
          </div>
        </div>
        
        
        
       
      </div>  
      
            
    
  </div>
  
  <div id="myModal" class="modal">
    <span class="close" onclick="closeImageModal()">&times;</span>
    <div class="modal-content">
      <img id="modalImage" src="" alt="modal-image">
    </div>
  </div>
  
    
   
    
    
        
    <!-- FOOTER  -->
    <!-- <footer>
        <span>© Copyright SMRBHIS. All Rights Reserved</span>
    </footer> -->
  </body>
</html>
