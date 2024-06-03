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

    <!-- Why we value hisotry -->
    <section class="container-fluid">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sectionbgdarktop sectionupper-text">
                        <h3 class="uppertitlelight"><?php the_field('titleforvalueofhistory'); ?></h3>
                        <p class="uppertextlight"><?php the_field('textforvalueofhistory'); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="upperimage" src="<?php the_field('imageforvalueofhistory'); ?>" alt="Value of History">
                </div>
            </div>
        </div>
    </section>

    <!-- Councillors -->
    <section class="container-fluid">
        <div class="custom-container">
            <h3 class="darkh3"><?php the_field('titleforcouncillorssection'); ?></h3>
            <div class="d-flex justify-content-center">
                <div class="council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillorpresident'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameofpresident'); ?></p>
                    <p class="profiletitle"><?php the_field('titleforpresident'); ?></p>
                </div>
                <div class="council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillorvicepresident'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameofvicepresident'); ?></p>
                    <p class="profiletitle"><?php the_field('titleforvicepresident'); ?></p>
                </div>
                <div class="council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillortreasurer'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameoftreasurer'); ?></p>
                    <p class="profiletitle"><?php the_field('titlefortreasurer'); ?></p>
                </div>
                <div class="council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillorsecretary'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameofsecretary'); ?></p>
                    <p class="profiletitle"><?php the_field('titleforsecretary'); ?></p>
                </div>
                <div class="council-section">
                    <img class="profile" src="<?php the_field('imageforcouncillormembershipsecretary'); ?>" alt="profile">
                    <p class="profilename"><?php the_field('nameofmembershipsecretary'); ?></p>
                    <p class="profiletitle"><?php the_field('titleformembershipsecretary'); ?></p>
                </div>
            </div>
            <p class="committee-text"><?php the_field('listofcommitteemembers'); ?></p>  
        </div>
    </section>

    <!-- ADVOCACY -->
    <section class="container-fluid">
        <div class="custom-container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sectionbglightbottom sectionlower-text">
                        <h3 class="lowertitledark"><?php the_field('titleforadvocacy'); ?></h3>
                        <p class="lowertextdark"><?php the_field('textforadvocacy'); ?></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="lowerimage2" src="<?php the_field('imageforadvocacy'); ?>" alt="Advocacy">
                </div>
            </div>
        </div>
    </section> <!-- container-fluid -->

<?php get_footer();?> <!-- Tell WordPress to include footer.php -->