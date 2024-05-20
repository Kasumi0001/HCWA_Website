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
            <a class="navbar-brand" href="http://170.187.231.66/~meshatmurdoch3/#">
                <img src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/logo.png" alt="HCWA Logo">
            </a>
 <!-- Toggler/collapsibe Button -->
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
        <span class="navbar-toggler-icon"></span>
    </button>
      
        <?php 

wp_nav_menu( array(
  'theme_location'  => 'primary',
  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
  'container'       => 'div',
  'container_class' => 'collapse navbar-collapse',
  'container_id'    => 'bs-example-navbar-collapse-1',
  'menu_class'      => 'navbar-nav ml-auto',
  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
  'walker'          => new WP_Bootstrap_Navwalker(),
) );

?>

            
            <!-- Search Bar and buttons NOTE: This might be removed due to able to set up in wordpress rather manually-->
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" placeholder="Search">
                <a href="#">
                <img src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/searchicon.png" alt="searchicon">
                </a>
            </form>
            <!-- Note: Might be removed as the pro subscription plugin inserts their own button we just hack its CSS for -->
            <div class="signinbutton"> 
                <a class="smallbuttontext" href="#">Sign In</a>
            </div>
        </nav>
    </div> <!-- container -->

    <?php wp_head(); ?> 

</header> <!-- container-fluid -->