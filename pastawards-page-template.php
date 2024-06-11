<?php
/*
Template Name: Past Awards
*/
?>
<?php require_once('awards_header.php'); ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext col-12">              
            <?php 
                $args = array(
                    'category_name' => 'Past Awards',
                    'posts_per_page' => -1 // Display all posts
                );
                $the_query = new WP_Query($args); 
            ?>
 
            <?php if ($the_query->have_posts()) : ?>
                <!-- the loop -->
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="thepost mb-4">
                        <h2 class="post-title"><?php the_title(); ?></h2>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail mb-3">
                                <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                            </div>
                        <?php endif; ?>
                        <p class="about-text"><?php the_excerpt(); ?></p>
                        <a class="readmore btn btn-primary" href="<?php the_permalink(); ?>">CONTINUE READING</a>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>