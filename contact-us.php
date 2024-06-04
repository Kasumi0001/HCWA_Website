<?php
    /*
    Template Name: Contact Us
    */
    ?>

<?php get_header();?> <!-- Tell WordPress to include header.php -->


    <div class="contactlanding"> 
        <h1 class="contacttitle"><?php the_field('titleforcontactus'); ?></h1>
        <div class="row contactsrow">
            <div class="col-md-12">
                <div class="row">
                     <div class="col-4 contactemail">
                        <p class="contactheading email"><?php the_field('emailaddressheading'); ?></p>
                        <a class="emaillink" href="mailto:office@historycouncilwa.org.au"><?php the_field('emailaddress'); ?></a>
                     </div>
                     <div class="col-4 contactsocials">
                        <p class="contactheading socials"><?php the_field('socialsheading'); ?></p>
                        <a  href="https://www.facebook.com/Historycouncilwa/"><img class="contactfacebook" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/contactfacebook.png"></a>
                        <a  href="https://x.com/wahistccl?s=21&t=hKX78WBRi0IVWx_gedaR3A"><img class="contacttwitter" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/contacttwitter.png"></a>
                     </div>
                     <div class="col-4 contactaddress">
                        <p class="contactheading address"><?php the_field('addressheading'); ?></p>
                        <p class="addresstext"><?php the_field('address'); ?></p>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo do_shortcode('[wpforms id="1021" title="true" description="true"]');?>

</body>
</html>
<?php get_footer();?> <!-- Tell WordPress to include footer.php -->