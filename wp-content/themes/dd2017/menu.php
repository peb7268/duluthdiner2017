<?php
/*
* Template Name: Menu
*/
?>

<?php get_header(); ?>
    <div class="menu-wrapper">
        <div class="wrapper content menu">
            <?php 
                $cat = str_replace('/', '', explode('/menu/', $_SERVER['REQUEST_URI'])[1]);
                if(strlen($cat) > 0):
            ?> 

            <div class="banner">
                <img src="<?php echo get_template_directory_uri(); ?>/img/menu/banners/<?php echo $cat; ?>/banner.jpg">
            </div>

            <div class="menu-sidebar">
                <?php wp_nav_menu( array( 'theme_location' => 'diner-menu' ) ); ?>
            </div>
            <div class="menu-selection">
                        <div class="items">
                            <?php
                                $args = array('post_type' => 'custom_menu', 'posts_per_page' => -1);
                                $args['entree_category'] = $cat;
                                $args['order']   = 'ASC';
                                $args['orderby'] = 'date';
                                $loop = new WP_Query($args);
                                // var_dump($args);
                                // die('');
                                while ( $loop->have_posts() ) : $loop->the_post();
                            ?>
                            <div class='menu-item'>
                                <div class='item-info'>
                                    <p class='menu-item-title'><?php the_title();?></p>
                                    <p class="item-description">
                                        <?php the_content(); ?>
                                    </p>
                                </div>
                                <div class="prices">
                                    <?php
                                        $prices = get_post_meta($id, '_prices', true);
                                        if(! is_null($prices)):
                                            foreach($prices as $price): ?>
                                                <div class='item-price'>
                                                        <span class="desc"><?php echo $price['price_description']; ?></span> <!-- put code here for specials -->
                                                        <span class="price"><?php echo $price['price']; ?></span>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                <?php else: ?>
                    <div class="menu-home-content">
                        <div class="menu-banner">
                            <img src="http://duluthdiner.com/wp-content/themes/dd2017/img/headers/istockphoto-1030722720-2048x2048.jpg" />
                        </div>
                        
                        <div class="menu-home-body">
                            <div class="menu-sidebar left">
                                <?php wp_nav_menu( array( 'theme_location' => 'diner-menu' ) ); ?>
                            </div>
                            
                            <div class="right">
                                <div class="row-1">
                                    <h4 class="menu-home-heading">order up</h4>
                                    <ul class="home-menu-ctas">
                                        <li>
                                            <img src="http://duluthdiner.com/wp-content/themes/dd2017/img/ctas/grub_hub.jpg">
                                        </li>
                                        <li>
                                            <a href="https://www.ubereats.com/stores/e968dff0-af39-48fe-a2b5-65adc1a95654/" target="_self">
                                                <img src="http://duluthdiner.com/wp-content/themes/dd2017/assets/img/ubereats_banner.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="far fa-file-alt"></i>
                                                <span>download the menu</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                
                                <div class="menu-home-msg">
                                    <h4 class="menu-home-heading">Fresh Simple ingredients blended to perfection</h4>
                                    <p>
                                        Here at Duluth Diner, we use <span class="italics">locally sourced ingredients</span> <span class="underline">prepared fresh daily</span>.
                                        That's the secret of how we deliver consistent premium quality at a local neighborhood price.
                                    </p>
                                </div>

                                <div class="the-specials">
                                    <h4 class="menu-home-heading">these are more than food. they're specials</h4>
                                    <ul class="home-menu-specials">
                                        <?php get_template_part('partials/loops/specials'); ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>