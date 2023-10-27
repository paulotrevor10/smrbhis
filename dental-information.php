<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/dental.css" type="text/css" />
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
  <title>Dental Information : SMRBHIS</title>
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
      <span span class="close-btn material-symbol-rounded">✕</span>
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
          <img src="images/dental-bg.png" alt="Dental">
        </div>
        <div class="content-title">
            <span>DENTAL HEALTH<br>SERVICES</span>
        </div>
      
    </div>
    
    <div class="container-2">
        <div class="table-title">
            <h1>Table 1: Prevalence of the Two Most Common Oral Diseases by Year, Philippines</h1>
        </div>
        <div class="container-table">
            <table>
                <table>
                    <thead>
                        <tr>
                            <th rowspan="2">Year</th>
                            <th colspan="2">Prevalence</th>
                        </tr>
                        <tr>
                            <th>Dental Caries</th>
                            <th>Periodontal Disease</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1987</td>
                            <td>93.9%</td>
                            <td>65.5%</td>
                        </tr>
            
                        <tr>
                            <td>1992</td>
                            <td>96.3%</td>
                            <td>48.1%</td>
                        </tr>
            
                        <tr>
                            <td>1998</td>
                            <td>92.4%</td>
                            <td>78.3%</td>
                        </tr>
                    </tbody>
                </table>
               
            </table>
        </div>
        
        <div class="table-info">
            <p>The oral health status of Filipino children is alarming. The 2006 National Oral Health Survey (Monse B. et al, NOHS 2006) investigated the oral health status of Philippine public elementary school students. It revealed that 97.1% of six-year-old children suffer from tooth decay. More than four out of every five children of this subgroup manifested symptoms of dentinogenic infection. In addition, 78.4% of twelve-year-old children suffer from dental caries and 49.7% of the same age group manifested symptoms of dentinogenic infections. The severity of dental caries, expressed as the average number of decayed teeth indicated for filling/extraction or filled permanent teeth (DMFT) or temporary teeth (dmft), was 8.4 dmft for the six-year-old age group and 2.9 DMFT for the twelve-year-old age group (NOHS 2006).</p>
        </div>
        
        <div class="table-coordinators">
            <h1>Program Coordinators</h1>
            
            <div class="coordinators-names">
                <div class="name">
                    <h2>Dr. Anthony P. Calibo</h2>
                    <h3>OIC-Division Chief, Child Health Development Division</h3>
                </div>
                <div class="name">
                    <h2>Ms. Lita Orbillo</h2>
                    <h3>National Oral Health Program Coordinator
                       <br>Disease Prevention and Control Bureau
                        Department of Health
                        <br>Manila, Philippines
                    </h3>
                    <h3 style="padding-top: 1em;">
                        (632) 651-7800 loc. 1726-1728<br>E-Mail : litaorbillo_rn@yahoo.com
                    </h3>
                </div>
                
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
