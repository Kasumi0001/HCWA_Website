<?php
    /*
    Template Name: What's On
    */
    ?>
<!-- Live Issues Post Section -->

<?php get_header();?> <!-- Tell WordPress to include header.php -->

<!-- COVER IMAGE SECTION -->
<section class="charcoalbg-whatson">
    <div class="row align-items-center">
    
        <div class="col-md-6 col-sm-12">
                <h3 class="whatsontitlelight"><?php the_field('titleforwhatsgoingon'); ?></h3>
                <p class="whatsontextlight"><?php the_field('textforwhatsgoingon'); ?></p>
            </div>
        <div class="col-md-6 col-sm-12">
                <img class="whatsoncover img-fluid" src="<?php the_field('imageforwhatsgoingon'); ?>" alt="whatsoncover">
            </div>
        </div>
    </section>
</header> <!-- header end -->

<!-- ANNUAL LECTURE SECTION -->
<section>
    <div class="row align-items-center">
        <div class="col-md-7">
            <h3 class="whatsontitledark"><?php the_field('titleforannuallecture'); ?></h3>
            <p class="whatsontextdark"><?php the_field('textforannuallecture'); ?></p></p>
        </div>
        <div class="col-md-5">
            <img class="annuallectureimg img-fluid whatsonlectureimg" src="<?php the_field('imageforannuallecture'); ?>" alt="Lecture">
            </div>
    </div>
</section> <!-- container-fluid -->

<!-- AWARDS SECTION -->
<section class="charcoalbg-whatson">
    <div class="custom-container">
        <div class="row">
            <div class="col-md-6">
            <img class="img-fluid awardsimg" src="<?php the_field('imageforawardsmain'); ?>" alt="Lecture">
                </div>
            <div class="col-md-6">
                <h3 class="awardstitle"><?php the_field('titleforawardsmain'); ?></h3>
                <p class="awardstext"><?php the_field('textforawardsmain'); ?></p>
                <a class="btn btn-outline-secondary smallbutton awardsbtn" href="http://170.187.231.66/~meshatmurdoch3/past-awards/">LEARN MORE</a>
            </div>
        </div> <!-- row -->
    </div> <!-- custom-container -->
</section> <!-- container-fluid -->

<!-- LIST OF AWARDS SECTION -->
<section class="charcoalbg-whatson">
    <div class="row">
        <div class="col-md-6 col-lg-3 mb-4">
            <img class="listedawards" src="<?php the_field('imageforawards2024'); ?>" alt="awards 2024">
            <h4 class="awardsubtitle"><?php the_field('titleforawards2024'); ?></h4>
            <p class="awardslisttext"> <?php the_field('textforawards2024'); ?></p>
            <a class="btn btn-outline-secondary smallbutton awardbtn" href="<?php the_field('award1'); ?>">LEARN MORE</a> 
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <img class="listedawards" src="<?php the_field('imageforawards2023'); ?>" alt="awards 2023">
            <h4 class="awardsubtitle"><?php the_field('titleforawards2023'); ?></h4>
            <p class="awardslisttext"> <?php the_field('textforawards2023'); ?></p>
            <a class="btn btn-outline-secondary smallbutton awardbtn" href="<?php the_field('award2'); ?>">LEARN MORE</a> 
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <img class="listedawards" src="<?php the_field('imageforawards2022'); ?>" alt="awards 2022">
            <h4 class="awardsubtitle"><?php the_field('titleforawards2022'); ?></h4>
            <p class="awardslisttext"> <?php the_field('textforawards2022'); ?></p>
            <a class="btn btn-outline-secondary smallbutton awardbtn" href="<?php the_field('award3'); ?>">LEARN MORE</a> 
        </div>
        <div class="col-md-6 col-lg-3 mb-4">
            <img class="listedawards" src="<?php the_field('imageforawards2021'); ?>" alt="awards 2021">
            <h4 class="awardsubtitle"><?php the_field('titleforawards2021'); ?></h4>
            <p class="awardslisttext"> <?php the_field('textforawards2021'); ?></p>
            <a class="btn btn-outline-secondary smallbutton awardbtn" href="#<?php the_field('award4'); ?>">LEARN MORE</a> 
        </div>
    </div>
</section>
 
<?php get_footer();?> <!-- Tell WordPress to include footer.php -->