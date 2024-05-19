<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- <meta name="Description" content="Enter your description here"/> NOTE: Don't really need this as it isn't that important-->


<title>
    Homepage

    <?php
              if (function_exists('is_tag') && is_tag()) {
                 single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
              elseif (is_archive()) {
                 wp_title(''); echo ' Archive - '; }
              elseif (is_search()) {
                 echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
              elseif (!(is_404()) && (is_single()) || (is_page())) {
                 wp_title(''); echo ' - '; }
              elseif (is_404()) {
                 echo 'Not Found - '; }
              if (is_home()) {
                 bloginfo('name'); echo ' - '; bloginfo('description'); }
              else {
                  bloginfo('name'); }
              if ($paged>1) {
                 echo ' - page '. $paged; }
           ?>

</title>

<meta name="description" content="<?php bloginfo('description'); ?>">
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">

</head>
<body>
<!-- Navigation and Cover Section -->
<header>
    <div>
        <nav class="custom-navbar navbar-expand-sm">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="HCWA Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex">
                    <a class="nav-text" href="#">About Us</a>
                    <a class="nav-text" href="#">Live Issues</a>
                    <a class="nav-text" href="#">Join Us</a>
                    <a class="nav-text" href="#">What's On</a>
                    <a class="nav-text" href="#">Contact Us</a>
            </div>
            <!-- Search Bar and buttons NOTE: This might be removed due to able to set up in wordpress rather manually-->
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" placeholder="Search">
                <a href="#">
                <img src="images/searchicon.png" alt="searchicon">
                </a>
            </form>
            <!-- Note: Might be removed as the pro subscription plugin inserts their own button we just hack its CSS for -->
            <div class="signinbutton"> 
                <a class="smallbuttontext" href="#">Sign In</a>
            </div>
        </nav>
    </div> <!-- container -->
    
    <!-- COVER IMAGE SECTION -->
    <div class="creambg">
        <div class="row" style="margin:0;">
            <div class="col-md-6">
                <img class="coverimage" src="images/CoverImage.png" alt="CoverImage">
            </div>
            <div class="col-md-6">
                <div class="covertitle-container">
                    <h2>PROVIDING</h2>
                    <h1>A VOICE </h1>
                    <h1 class="for">FOR</h1>
                    <h1 class="history">HISTORY</h1>
                    <a class="bigbutton1" href="#">
                        <p class="buttontext">About Us</p>
                    </a>
                </div>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->

    <?php wp_head(); ?> 

</header> <!-- container-fluid -->