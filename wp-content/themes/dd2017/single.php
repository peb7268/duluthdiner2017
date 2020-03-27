<?php get_header(); ?>
    <div class="wrapper page">
        <div class="content no-sidebar">
            <div class="single-banner">
                <?php if(has_post_thumbnail()){ 
                   the_post_thumbnail("menu-banner-size"); ?>
                <?php } else { ?>
                     <img src="http://lorempiixel.com/1200/250/food" />
                <?php } ?>
            </div>
            <?php get_template_part('partials/loops/standard'); ?>
        </div>
    </div>
<?php get_footer(); ?>
