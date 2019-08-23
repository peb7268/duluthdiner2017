<!-- <li><a href="#"><i class="fa fa-caret-right"></i>Some awesome post title here</a></li>
<li><a href="#"><i class="fa fa-caret-right"></i>Some awesome post title here</a></li>
<li><a href="#"><i class="fa fa-caret-right"></i>Some awesome post title here</a></li>
<li><a href="#"><i class="fa fa-caret-right"></i>Some awesome post title here</a></li> -->

<?php $query = new Wp_Query('category_name=special'); ?>
<?php if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><i class="fa fa-caret-right"></i><?php the_title(); ?></a></li>
<?php endwhile; wp_reset_postdata(); else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>