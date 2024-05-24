<?php
    /*
    Template Name: Contact Us
    */
    ?>

<?php get_header();?> <!-- Tell WordPress to include header.php -->


    <div class="contactlanding"> 
        <h1 class="contacttitle">CONTACT US</h1>
        <div class="row contactsrow">
            <div class="col-md-12">
                <div class="row">
                     <div class="col-4 contactemail">
                        <p class="contactheading email">EMAIL ADDRESS</p>
                        <a class="emaillink" href="#">office@historycouncilwa.org.au</a>
                     </div>
                     <div class="col-4 contactsocials">
                        <p class="contactheading socials">SOCIALS</p>
                        <a  href="#"><img class="contactfacebook" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/contactfacebook.png"></a>
                        <a  href="#"><img class="contacttwitter" src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/contacttwitter.png"></a>
                     </div>
                     <div class="col-4 contactaddress">
                        <p class="contactheading address">ADDRESS PO BOX</p>
                        <p class="addresstext">49 Broadway, Nedlands WA 6009</p>
                     </div>
                </div>
            </div>
        </div>
    </div>

<?php echo do_shortcode('[wpforms id="862"]');?>

</body>
</html>
<?php get_footer();?> <!-- Tell WordPress to include footer.php -->