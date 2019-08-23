
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
    <div class="post">
        <div class="post-header">
            <h2 class="title">
                <?php the_title(); ?>
            </h2>

            <?php get_template_part('partials/social-row'); ?>
        </div>

        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>