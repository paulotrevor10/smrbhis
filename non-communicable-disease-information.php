<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/non-communicable.css" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="/css/non-communicable.css">
    
    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" href="images/logo.jpg" type="image/x-icon" />
    <script src="javascript/script.js" defer></script>
    <script src="javascript/non-communicable.js"></script>
  <title>Non-Communicable Information : SMRBHIS</title>
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
            <span>MGA HINDI<br>NAKAKAHAWANG<br>SAKIT</span>
        </div>
        <div class="content-img">
          <img src="images/non-communicable/non-communicable.png" alt="Virus">
        </div>
      
    </div>
    <div class="container-2">
      
      <div class="non-communicable-container">
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/alzeimers.jpg')">
           
            </div>
          <div class="title">
          <span class="span-txt">Alzheimer's Disease</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/epilepsy.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Epilepsy</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/osteoarthritis.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Osteoarthritis</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/osteoporosis.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Osteoporosis</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/copd.jpg')">
            
            </div>
          <div class="title" style="font-size: .7em;">
          <span class="span-txt">Chronic Obstructive Pulmonary Disease (COPD)</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/coronary-artery-disease.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Coronary Artery Disease</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/heat-stroke.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Heat Stroke</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/HPN.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">High Blood Pressure or Hypertension</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/hfm.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Hand, Foot, and Mouth Disease</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/obesity.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Obesity and Overweight</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/diabetes.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Diabetes</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/depression.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Depressive Disorder</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/alcohol.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Substance Abuse: Alcohol</span>
          </div>
        </div>
        
        <div class="non-communicable-wrapper">
          <div class="non-communicable-box" onclick="openImageModal('images/non-communicable/ecstacy.jpg')">
            
            </div>
          <div class="title">
          <span class="span-txt">Substance Abuse: Ecstasy</span>
          </div>
        </div>
        
        
        
       
        
        
       
      </div>  
      
      
      
            
    
  </div>
  
  <div class="pdf-title">
    <h1>PDF Information <i class="fa-regular fa-file-pdf fa-xl" style="color: #f33535; padding-left: .5em;"></i></h1>
  </div>
  <div class="non-communicable-wrapper-pdf">
   <a href="https://caro.doh.gov.ph/wp-content/uploads/2014/09/cancer.pdf">
    <div class="non-communicable-pdf">
      <span class="pdf-label">Cancer</span>
    </div>
   </a>
    
    <a href="https://caro.doh.gov.ph/wp-content/uploads/2014/09/cerebrovascular.pdf">
      <div class="non-communicable-pdf">
        <span class="pdf-label">Cerebrovascular<br> Disease(Stroke)</span>
      </div>
    </a>
  </div>
  
  <div id="myModal" class="modal">
    <span class="close" onclick="closeImageModal()">&times;</span>
    <div class="modal-content">
      <img id="modalImage" src="" alt="modal-image">
    </div>
  </div>
  
   
    
    
        
    <!-- FOOTER  -->
    <!-- <footer>
        <span class="span-txt">© Copyright SMRBHIS. All Rights Reserved</span>
    </footer> -->
  </body>
</html>
