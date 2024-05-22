<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?> <!-- Tell WordPress to include header.php -->

<title>
    Homepage
</title>
</head>
<body>
<!-- Navigation and Cover Section -->
<header>    
    <!-- COVER IMAGE SECTION -->
    <div class="creambg">
        <div class="row" style="margin:0;">
            <div class="col-md-6">
                <img class="coverimage" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/CoverImage_Updated.png" alt="CoverImage">
            </div>
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
        </div> <!-- row -->
    </div> <!-- container -->

    <?php wp_head(); ?> 

</header> <!-- container-fluid -->

<!-- Live Issues Section -->
<section class="container-fluid charcoalbg">
    <div class="custom-container">
        <div class="row">
            <div class="col-sm-6">
        <img class="liveissuesimg" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/liveissues.png" alt="LiveIssues">
            </div>
            <div class="col-sm-6">
        <h3 class="liveissuestitle">LIVE ISSUES</h3>
        <p class="livep">The History Council of Western Australia provides a voice for history by promotingthe study, preservation and use of history in Western Australia.</p>
        <a class="bigbutton2" href="#">
            <p class="buttontext">SEE WHAT'S HAPPENING</p>
        </a>
            </div>
        </div>
    </div>
</section> <!-- container-fluid -->

<!-- Live Issues Post Section -->
<section class="container-fluid">
    <div class="custom-container">
        <div class="row justify-content-around">
            <div class="livebox">
                    <h5>01</h5>
                    <h4 class="liveboxsubtitle">Albany 2026 <br> Bicentary</h4>
                    <p class="liveboxtext">Established in 1826, three years before the Swan River Colony, Albany is currently navigating how best to acknowledge and commemorate the upcoming 2026 Albany Bicentenary.</p>
                    <a class="smallbutton" href="#">
                        <p class="smallbuttontext">LEARN MORE</p>
                    </a>
                    <div class="livebox-image-container">
                        <img class="image-livebox" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/albany2026.png">
                    </div>
                </div>
            <div class="livebox">
                    <h5>02</h5>
                    <h4 class="liveboxsubtitle">Woodside <br> Redevelopment</h4>
                    <p class="liveboxtext">Between 2022-2023, the History Council of WA actively campaigend to protect the heritage of Woodside Maternity Hospital (1953-2006) following an application for redevelopment. </p>
                    <a class="smallbutton" href="#">
                        <p class="smallbuttontext">LEARN MORE</p>
                    </a>
                    <div class="livebox-image-container">
                        <img class="image-livebox" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/man.png">
                    </div>
            </div>
            <div class="livebox">
                    <h5>03</h5>
                    <h4 class="liveboxsubtitle">Norman <br> House</h4>
                    <p class="liveboxtext">A significant example of Victorian-Georgian architeture in Western Australia, Norman House (c.1858) was successfully advocated for by the History Council of WA and saved from demolition in 2023.</p>
                    <a class="smallbutton" href="#">
                        <p class="smallbuttontext">LEARN MORE</p>
                    </a>
                    <div class="livebox-image-container">
                        <img class="image-livebox" style="margin-bottom: 20px;" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/normanhouse.png">
                    </div>
            </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- container-fluid -->

<!-- 2024 Annual Lecture -->
<section class="container-fluid">
    <div class="custom-container">
        <div class="row">
            <div class="col-md-6">
                <div class="sectionbgdarkbottom sectionlower-text">
                    <h3 class="lowertitle">2024 ANNUAL LECTURE</h3>
                    <p class="lowertext">Opened by Professor Geoffrey Bolton OA in 2004, the Annual Lecture is a public lecture series of original work that constitutes a significant contribution to historical knowledge.</p>
                    <a class="bigbutton3" href="#">
                        <p class="buttontext">SUBSCRIBE TO EVENT</p>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="lowerimage" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/Lecture_Updated.jpg">
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
    <div class="custom-container">
        <div class="row">
            <div class="col-md-6">
                <div class="sectionbglighttop sectionupper-text">
                    <h3 class="uppertitle">2029<br>BICENTENARY</h3>
                    <p class="uppertext">The History Council of WA is coordinating with local communities and organisations to reflect and examine how we engage with our histories during the 2029 anniversary of the Swan River Colony.</p>
                    <a class="bigbutton2" style="margin:0%" href="#">
                        <p class="buttontext">LEARN MORE</p>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="upperimage" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/2029bicentenary.png" alt="LiveIssues">
            </div>
        </div>
    </div>
</section>
<?php get_footer();?> <!-- Tell WordPress to include footer.php -->