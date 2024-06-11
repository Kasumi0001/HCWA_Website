<?php
/*
Template Name: Past Advocacy
*/
?>
<?php require_once('archive_header.php'); ?>
<div class="container-fluid maincontainer">
    <div class="container">
        <div class="row">
            <section class="maintext col-12">
                <?php 
                $args = array(
                    'category_name' => 'Past Advocacy',
                );
                $the_query = new WP_Query( $args ); ?>
                
                <?php if ( $the_query->have_posts() ) : ?>
                    <div class="row">
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <?php if ( has_post_thumbnail() ) : ?>
                                <div class="card-img-top">
                                    <?php the_post_thumbnail('medium', ['class' => 'img-fluid']); ?>
                                </div>
                                <?php endif; ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">CONTINUE READING</a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </section>
        </div>
    </div>
</div>
<?php get_footer(); ?>