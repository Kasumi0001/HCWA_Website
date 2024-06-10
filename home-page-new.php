<?php
    /*
    Template Name: Home page new
    */
    ?>
<?php get_header();?> <!-- Tell WordPress to include header.php -->
<!-- COVER IMAGE SECTION -->
<div class="creambg">
        <div class=" container">
        <div class="row">
            <div class="col-md-6">
                <div class="covertitle-container">
                <h2 class="welcomepadding"><?php the_field('smalltitleforhomepage'); ?></h2>
                    <h1 class="titlepadding"><?php the_field('largetitleforhomepage'); ?></h1>
                    <p class="bttmtxtheader"><?php the_field('smalltitleforhomepage2'); ?></p>
                    <a type="button" class="btn btn-outline-secondary coverbtn" href="http://170.187.231.66/~meshatmurdoch3/about-us/">ABOUT US</a>
                </div>
            </div>
            <div class="col-md-6">
                <img class="coverimage" src=<?php the_field('coverimg'); ?> alt="CoverImage">
                
            </div>
        </div> <!-- row -->
        </div>
    </div> <!-- container -->
                
            </div>
        </div> <!-- row -->
        </div>
    </div> <!-- container -->

    <div class="paddingbg"> </div>

<!-- Live Issues Section -->
<section class="container-fluid charcoalbg1">
    <div class=" container">
        <div class="row">
            <div class="col-md-6">
        <img class="liveissuesimg" src=<?php the_field('imageforliveissues'); ?> alt="LiveIssues">
            </div>
            <div class="col-md-6">
        <h3 class="liveissuestitle"><?php the_field('titleforliveissues'); ?></h3>
        <p class="livep"><?php the_field('textforliveissues'); ?></p>
        <a type="button" class="btn btn-outline-secondary liveHome" href="http://170.187.231.66/~meshatmurdoch3/live-issues/">LEARN MORE</a>
            </div>
        </div>
    </div>
</section> <!-- container-fluid -->

<!-- Live Issues Post Section -->
<section class="container-fluid liveissuescon">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="creambg-ls">
                    <h5>01</h5>
                    <h4 class="liveboxsubtitle"><?php the_field('titleforliveissue1'); ?></h4>
                    <p class="liveboxtext"><?php the_field('textforliveissue1'); ?></p>
                    <a type="button" class="btn btn-outline-secondary smallbutton" href="#">LEARN MORE</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="creambg-ls">
                    <h5>02</h5>
                    <h4 class="liveboxsubtitle"><?php the_field('titleforliveissue2'); ?></h4>
                    <p class="liveboxtext"><?php the_field('textforliveissue2'); ?></p>
                    <a type="button" class="btn btn-outline-secondary smallbutton" href="#">LEARN MORE</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="creambg-ls">
                    <h5>03</h5>
                    <h4 class="liveboxsubtitle"><?php the_field('titleforliveissue3'); ?></h4>
                    <p class="liveboxtext"><?php the_field('textforliveissue3'); ?></p>
                    <a type="button" class="btn btn-outline-secondary smallbutton" href="#">LEARN MORE</a>
                </div>
            </div>
        
        </div> <!-- row -->
    </div> <!-- container -->
</section> <!-- container-fluid -->

    <!-- 2024 Annual Lecture -->
    <section class="container-fluid">
        <div class="row row-no-gutters creambg2">
            <div class="col-lg-5 lectureimg">
                <img class="img-fluid" src=<?php the_field('imageforhpannuallecture'); ?> alt="Lecture Image">
            </div>
            <div class="col-lg-7">
                <div class="annuallecturetextbg">
                    <h3 class="lowertitle1"><?php the_field('titleforhpannuallecture'); ?></h3>
                    <p class="lowertext1"><?php the_field('textforhpannuallecture'); ?></p>
                    <a type="button" class="btn btn-outline-secondary bigbutton12 homelecture" href="http://170.187.231.66/~meshatmurdoch3/whats-on/">LEARN MORE</a>
                </div>
            </div>
        </div>
    </section> <!-- container-fluid -->

<!-- Acknowledgement To Country -->
<section class="container-fluid acknowledgementbg d-flex align-items-center justify-content-center">
    <div>
        <h3 class="acknowledgementtitle"><?php the_field('largetextforcountry'); ?></h3>
            <p class="sensitivitytag"><?php the_field('smalltextforcountry'); ?></p>
        </a>
    </div>
</section> <!-- container-fluid -->

    <!-- 2029 Bicentenary -->
    <section class="container-fluid">
        <div class="row row-no-gutters creambg2">
            <div class="col-lg-6">
                <div>
                    <h3 class="uppertitle"><?php the_field('titleforevent'); ?></h3>
                    <p class="uppertext"><?php the_field('textforevent'); ?></p>
                    <a type="button" class="btn btn-outline-secondary bigbutton12 bicenbtn" href="#">LEARN MORE</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid" src=<?php the_field('imageforevent'); ?> alt="LiveIssues">
            </div>
        </div>
    </section>

<?php get_footer();?> <!-- Tell WordPress to include footer.php -->