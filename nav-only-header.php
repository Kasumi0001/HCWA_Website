<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

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

<?php wp_head(); ?>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="#">
        <img src="http://170.187.231.66/~meshatmurdoch3/wp-content/themes/HCWA_Website/images/logo.png" alt="HCWA Logo">
    </a>

    <!-- Toggler Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-controls="bs-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar Links -->
    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
        <?php 
        wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-navbar-collapse',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
        ) );
        ?>

        <!-- Search Form -->
        <form method="get" class="navbar-form search-container" role="search" action="<?php echo esc_url(home_url('/')); ?>">
            <label for="navbar-search" class="sr-only"><?php _e('Search', 'textdomain'); ?></label>
            <div class="input-group">
                <input type="text" class="form-control" name="s" id="navbar-search" placeholder="<?php _e('Search', 'textdomain'); ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Sign In Button -->
        <div> 
        <button type="button" class="btn btn-outline-secondary btn-sm smallbutton signinbtn" href="http://170.187.231.66/~meshatmurdoch3/login/">SIGN IN</button>
        </div>
    </div>
</nav>

<?php wp_head(); ?>
</body>
</html>