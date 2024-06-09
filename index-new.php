<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <meta name="Description" content="Enter your description here"/> NOTE: Don't really need this as it isn't that important-->

<!-- Reference to fonts and css sheets-->
<link rel="stylesheet" href="https://use.typekit.net/qnv7ntv.css"> <!-- Aktiv Grotesk and Adobe Caslon font -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="style.css"> <!-- Reference to stylesheet -->
<link rel="stylesheet" href="responsive.css"> <!-- Reference to responsive css -->

<title>Homepage</title>
</head>
<body>
<!-- Navigation and Cover Section -->

    <div>
        <nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="HCWA Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Links and search to be collapsible test -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <div class="ml-auto d-flex align-items-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#">Live Issues</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#">Join Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#">What's On</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-text" href="#">Contact Us</a>
                    </li>
                </ul>
        

            </div>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" placeholder="Search">
                <a href="#">
                <img src="images/searchicon.png" alt="searchicon">
                </a>
            </form>
            <div class="signinbutton"> 
                <a class="smallbuttontext" href="#">Sign In</a>
            </div>
            </nav>
        </div>
        </div> <!-- container -->
        <header>
    <!-- COVER IMAGE SECTION -->
    <div class="creambg">
        <div class=" container">
        <div class="row">
            <div class="col-md-6">
                <div class="covertitle-container">
                    <h2>PROVIDING</h2>
                    <h1>A VOICE </h1>
                    <h1 class="for">FOR</h1>
                    <h1 class="history">HISTORY</h1>
                    <a class="bigbutton1" href="#">
                        <p class="buttontext">ABOUT US</p>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <!-- <img class="coverimage" src="images/CoverImage.png" alt="CoverImage"> -->
                
            </div>
        </div> <!-- row -->
    </div>
    </div> <!-- container -->

</header> <!-- container-fluid -->

<!-- Live Issues Section -->
<section class="container-fluid charcoalbg1">
    <div class=" container">
        <div class="row">
            <div class="col-md-6">
        <img class="liveissuesimg" src="images/liveissues.png" alt="LiveIssues">
            </div>
            <div class="col-md-6">
        <h3 class="liveissuestitle">LIVE ISSUES</h3>
        <p class="livep">The History Council of Western Australia provides a voice for history by promotingthe study, preservation and use of history in Western Australia.</p>
        <a class="bigbuttonWH" href="#">
            <p class="buttontext">WHAT'S HAPPENING</p>
        </a>
            </div>
        </div>
    </div>
</section> <!-- container-fluid -->

<!-- Live Issues Post Section -->
<section class="container-fluid liveissuescon">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="creambg-aboutus">
                    <h5>01</h5>
                    <h4 class="liveboxsubtitle">Albany 2026 <br> Bicentary</h4>
                    <p class="liveboxtext">Established in 1826, three years before the Swan River Colony, Albany is currently navigating how best to acknowledge and commemorate the upcoming 2026 Albany Bicentenary.</p>
                    <a class="smallbutton" href="#">
                        <p class="smallbuttontext">LEARN MORE</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="creambg-aboutus">
                    <h5>02</h5>
                    <h4 class="liveboxsubtitle">Woodside <br> Redevelopment</h4>
                    <p class="liveboxtext">Between 2022-2023, the History Council of WA actively campaigend to protect the heritage of Woodside Maternity Hospital (1953-2006) following an application for redevelopment. </p>
                    <a class="smallbutton" href="#">
                        <p class="smallbuttontext">LEARN MORE</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="creambg-aboutus">
                    <h5>03</h5>
                    <h4 class="liveboxsubtitle">Norman <br> House</h4>
                    <p class="liveboxtext">A significant example of Victorian-Georgian architeture in Western Australia, Norman House (c.1858) was successfully advocated for by the History Council of WA and saved from demolition in 2023.</p>
                    <a class="smallbutton" href="#">
                        <p class="smallbuttontext">LEARN MORE</p>
                    </a>
                </div>
            </div>
        
        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- container-fluid -->

<!-- 2024 Annual Lecture -->
<section class="container-fluid lecturebg">
    <div class="custom-container">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid lectimg " src="images/Lecture.jpg">
            </div>
            
            <div class="col-lg-6">
                <div class="annuallecturetextbg ">
                    <h3 class="lowertitle1">2024 ANNUAL LECTURE</h3>
                    <p class="lowertext1">Opened by Professor Geoffrey Bolton OA in 2004, the Annual Lecture is a public lecture series of original work that constitutes a significant contribution to historical knowledge.</p>
                    <a class="bigbutton12" href="#">
                        <p class="buttontext">READ MORE</p>
                    </a>
                </div>
            </div>
       
        </div>
    </div>
</section> <!-- container-fluid -->

<!-- Why History Matters Image -->
<section class="container-fluid whyhistorymattersbg d-flex align-items-center justify-content-center">
    <div>
        <h3 class="whyhistorymatterstitle">WHY HISTORY MATTERS</h3>
        <a class="smallbutton2" href="#">
            <p class="smallbuttontext">LEARN MORE</p>
        </a>
    </div>
</section> <!-- container-fluid -->

<!-- 2029 Bicentary -->
<section class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="sectionbglighttop">
                    <h3 class="uppertitle">2029<br>BICENTENARY</h3>
                    <p class="uppertext">The History Council of WA is coordinating with local communities and organisations to reflect and examine how we engage with our histories during the 2029 anniversary of the Swan River Colony.</p>
                    <a class="bigbutton12" href="#">
                        <p class="buttontext">LEARN MORE</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="upperimage1" src="images/2029bicentenary.png" alt="LiveIssues">
            </div>
        </div>
    </div>
</section>

<footer class="container-fluid footerbg">
    <div>
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center flex-column">
                <div class="p-2">
                    <a class="footerlogo" href="#">
                        <img src="images/logo2.png" alt="HCWA Logo2">
                    </a>
                </div>
                <div class="p-2">
                    <p class="followus">Follow Us</p>
                </div>
                <div>
                    <a class="socialmediaicons" href="#">
                        <img src="images/facebookicon.png" alt="facebookicon">
                    </a>
                    <a class="socialmediaicons" href="#">
                        <img src="images/xicon.png" alt="xicon">
                    </a>
                </div>
            
            </div>
            <div class="col-md-9 footer"> 
            <ul class="d-flex justify-content-around navigationfooter-spacing">
                <a class="nav-linkfooter" href="#">Home</a>
                <a class="nav-linkfooter" href="#">About Us</a>
                <a class="nav-linkfooter" href="#">Live Issues</a>
                <a class="nav-linkfooter" href="#">Join Us</a>
                <a class="nav-linkfooter" href="#">What's On</a>
                <a class="nav-linkfooter" href="#">Contact Us</a>
            </ul>
            </div>
        </div> <!-- row -->
        <div class="line">
            <hr color="white" size="1px"/>
        </div>
        <div class="row footerdetails">
            <div class="col-md-3">
                <a class="nav-linkfooter" href="#">
                    <p>Privacy Policy</p>
                </a>
            </div>
            <div class="col-md-6">
                <p>© History Council of Western Australia. 2024</p>
            </div>
            <div class="col-md-3">
                <a class="nav-linkfooter" href="#">
                    <p >Terms and Conditions</p>
                </a>
            </div>
        </div>
    </div> <!-- container -->
</footer> <!-- container-fluid -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>