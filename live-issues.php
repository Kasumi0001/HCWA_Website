<?php
    /*
    Template Name: Live Issues
    */
    ?>

<?php get_header();?> <!-- Tell WordPress to include header.php -->

        <!-- title of page -->
        <section class="container-fluid"> 
            <div class="container image1"> 
                <div class="row">
                    <div class="col-md-6">
                         <h1 class="titleliveissues"><?php the_field('liveissuestitle'); ?></h1>
                         <p class="liveissueuppertext"><?php the_field('liveissuesbodytext'); ?></p>
                    </div><!-- Column -->
                    <div class="col-md-6">
                        <img class="liveissuesimage liveissueheader" src=<?php the_field('liveissuestitleimage'); ?> alt="crowd holding umbrellas"> 
                     </div><!-- Column -->
                </div><!-- Row -->
            </div><!-- Container -->
        </section> <!-- Container Fluid -->

<!-- Live Issues 1 -->

<section class="container-fluid, creambg-liveissues"> 
    <div class="container">
         <div class="row">
            <div class="col-sm-3">
                <h5 class="liveissuesnumber"><?php the_field('issueonenumber'); ?></h5>
            </div><!-- Column -->
            <div class="col-sm-6">
                <img class="liveissuesimage" src=<?php the_field('issueoneimage'); ?> alt="volunteers in front of building"> 
            </div> <!-- Column -->
            <div class="col-sm-3">
                <h4 class="articletitles"><?php the_field('issueoneheading'); ?></h4>
                <a class="btn btn-outline-secondary smallbutton liveissuebtn" href="<?php the_field('post1'); ?>">HOW CAN WE HELP</a>
                <p class="liveissuesparagraphdark">
                <?php the_field('issueoneparagraph'); ?>
                </p>
            </div> <!-- Column -->
        </div><!-- Row -->
    </div><!-- Container -->
</section> <!-- Container Fluid -->

<!-- Live Issues 2 -->

<section class="container-fluid, darkbg-liveissues"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-3 information">
                <h4 class="articletitleslight"><?php the_field('issuetwoheading'); ?></h4>
                <a class="btn btn-outline-secondary smallbutton liveissuebtn" href="<?php the_field('post2'); ?>">HOW CAN WE HELP</a>
                <p class="liveissuesparagraphlight">
                <?php the_field('issuetwoparagraph'); ?>
                </p>
            </div><!-- Column -->
            <div class="col-sm-6 images">
                <img class="liveissuesimage" src=<?php the_field('issuetwoimage'); ?> alt="woodside building"> 
            </div>
            <div class="col-sm-3 number">
                <h5 class="liveissuesnumberlight"><?php the_field('issuetwonumber'); ?></h5>
            </div>
        </div><!-- Row -->
    </div><!-- Container -->
</section> <!-- Container Fluid -->

<!-- Live Issues 3 -->

<section class="container-fluid, creambg-liveissues"> 
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <h5 class="liveissuesnumber"><?php the_field('issuethreenumber'); ?></h5>
            </div> <!-- Column -->
            <div class="col-sm-6">
                <img class="liveissuesimage" src=<?php the_field('issuethreeimage'); ?> alt="people in front of norman house"> 
            </div> <!-- Column -->
            <div class="col-sm-3">
                <h4 class="articletitles"><?php the_field('issuethreeheading'); ?></h4>
                <a class="btn btn-outline-secondary smallbutton liveissuebtn" href="<?php the_field('post3'); ?>">HOW CAN WE HELP</a>
                <p class="liveissuesparagraphdark">
                <?php the_field('issuethreeparagraph'); ?>
                </p>
            </div> <!-- Column -->
        </div><!-- Row -->
    </div><!-- Container -->
</section> <!-- Container Fluid -->

<!-- past cases -->
<section class="container-fluid"> 
    <div class="container"> 
        <div class="row">
            <div class="col-md-7">
                <h1 class="pastadvocacy"><?php the_field('pastadvocacytitle'); ?></h1>
                <p class="liveissuebottomtext">
                    <?php the_field('pastadvocacyparagraph'); ?>
                </p>
                <!-- Use <a> tag for linking -->
                <a href="http://170.187.231.66/~meshatmurdoch3/past-advocacy/" class="btn btn-outline-secondary smallbutton pastcase" role="button">PAST CASES</a>
            </div> <!-- Column -->
            <div class="col-md-5">
                <img class="liveissuesimage pastadvocacyimg" src="<?php the_field('pastadvocacyimage'); ?>" alt="crowd holding umbrellas"> 
            </div><!-- Column -->
        </div><!-- Row -->
    </div><!-- Container -->
</section> <!-- Container Fluid -->

<?php get_footer();?> <!-- Tell WordPress to include footer.php -->