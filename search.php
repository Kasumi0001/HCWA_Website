<?php
    /*
    Template Name: search
    */
    ?>
<?php require_once('nav-only-header.php'); ?>
<section class="container-fluid aboutbg">
             

<div class="container">
    <div class="row m-4">
        

    <h1 class="page-title"><?php _e( 'Search results for:', 'nd_dosth' ); ?></h1>

  <h1 class="search-query "><?php echo get_search_query(); ?></h1> 

    </div>   
    <div class="container">
        <div class="row">
            <div class="search-results-container col-md-8">
            <?php if ( have_posts() ): ?>
                <?php while( have_posts() ): ?>
                    <?php the_post(); ?>
                    <div class="search-result">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="read-more-link">
                            <?php _e( 'Read More', 'nd_dosth' );  ?>
                        </a>
                    </div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
            <?php else: ?>
                <p><?php _e( 'No Search Results found', 'nd_dosth' ); ?></p>
            <?php endif; ?>
            </div>
            <div id="blog-sidebar" class="col-md-4">
                <?php get_sidebar(); ?>             
            </div>
        </div>
    </div>
</div>
  
          </section>
  

 <?php get_footer();?>     