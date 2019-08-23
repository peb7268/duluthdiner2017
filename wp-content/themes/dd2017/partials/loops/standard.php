
<?php if (have_posts() ) : while (have_posts() ) : the_post(); ?>
    <div class="post">
        <h2 class="title">
            <?php the_title(); ?>
        </h2>

        <div class="content">
            <?php the_content(); ?>
        </div>
    </div>
<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>