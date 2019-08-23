<?php $query = new Wp_Query('category_name=news'); ?>
<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="post">
        <img src="https://picsum.photos/500/500" />
       
        <h2 class="preview">
            <?php the_title(); ?>
        </h2>

        <div class="content">
            <div class="shade radial"></div>
            <div class="inner">
                <?php the_content(); ?>
                <div class="nav">
                    <a href="<?php the_permalink(); ?>">Keep Reading <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; wp_reset_postdata(); else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>