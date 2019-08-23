<?php 
    /**
     * Template Name: No Sidebar
     */
    get_header(); 
?>

        <div class="wrapper page">
            <div class="content no-sidebar">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>
                    <?php endwhile; else : ?>
                        <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
            </div>
        </div>
<?php get_footer(); ?>
