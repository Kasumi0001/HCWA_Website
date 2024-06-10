<?php
    /*
    Template Name: About Us
    */
    ?>

<?php get_header();?> <!-- Tell WordPress to include header.php -->

        <!-- COVER SECTION -->
        <div class="creambg-aboutus">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <img class="aboutuscoverimage" src="<?php the_field('aboutuscoverimage'); ?>" alt="AboutUsCover">
                </div>
                <div class="col-md-6">
                    <h3 class="darkh3quote"><?php the_field('titleforaboutuspage'); ?></h3>
                </div>
            </div>
        </div>

    <!-- Why We Value History -->
    <section class="container-fluid">
     <div class="row row-no-gutters charcoalbg">
            <div class="col-lg-7">
                    <div>
                        <h3 class="h3light"><?php the_field('titleforvalueofhistory'); ?></h3>
                        <p class="uppertextlight"><?php the_field('textforvalueofhistory'); ?></p>
                        </div>
                    </div>
                <div class="col-lg-5">
                    <img class="img-fluid" src="<?php the_field('imageforvalueofhistory'); ?>" alt="Value of History">
                </div>
            </div>
        </div>
    </section>

    <!-- Councillors -->
    <section class="container-fluid">
            <div class="custom-container">
            <h3 class="darkh3 text-center"><?php the_field('titleforcouncillorssection'); ?></h3>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillorpresident'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameofpresident'); ?></p>
                    <p class="profiletitle"><?php the_field('titleforpresident'); ?></p>
                </div>
                <div class="col-lg-3 col-md-6 council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillorvicepresident'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameofvicepresident'); ?></p>
                    <p class="profiletitle"><?php the_field('titleforvicepresident'); ?></p>
                </div>
                <div class="col-lg-3 col-md-6 council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillortreasurer'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameoftreasurer'); ?></p>
                    <p class="profiletitle"><?php the_field('titlefortreasurer'); ?></p>
                </div>
                <div class="col-lg-3 col-md-6 council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillorsecretary'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameofsecretary'); ?></p>
                    <p class="profiletitle"><?php the_field('titleforsecretary'); ?></p>
                </div>
                <div class="col-lg-3 col-md-6 council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillormembershipsecretary'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameofmembershipsecretary'); ?></p>
                    <p class="profiletitle"><?php the_field('titleformembershipsecretary'); ?></p>
                </div>
            </div>
            <p class="committee-text text-center"><?php the_field('listofcommitteemembers'); ?></p>  
        </div>
    </section>

<!-- ADVOCACY -->
<section class="container-fluid">
    <div class="row row-no-gutters creambg2">
        <div class="col-lg-5">
            <img class="img-fluid" src="<?php the_field('imageforadvocacy'); ?>" alt="Advocacy">
        </div>
        <div class="col-lg-7">
            <div>
                <h3 class="h3dark"><?php the_field('titleforadvocacy'); ?></h3>
                <p class="lowertext2"><?php the_field('textforadvocacy'); ?></p>
            </div>
        </div>
    </div>
</section> <!-- container-fluid -->

<?php get_footer();?> <!-- Tell WordPress to include footer.php -->