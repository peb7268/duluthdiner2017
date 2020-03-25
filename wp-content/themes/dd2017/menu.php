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
                <img 
                    srcset(
                        "<?php echo get_template_directory_uri(); ?>/img/menu/banners/<?php echo $cat; ?>/banner.jpg", 1400w
                        "<?php echo get_template_directory_uri(); ?>/img/menu/banners/<?php echo $cat; ?>/banner-480.jpg", 480w
                    )
                    sizes("
                        (max-width: 480px) 440px,
                        1400px
                    ")
                    src="<?php echo get_template_directory_uri(); ?>/img/menu/banners/<?php echo $cat; ?>/banner.jpg"
                >
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
                            <picture>
                                <source 
                                    media="(max-width: 500px)"
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/headers/duluth_diner_menu_header_mobile.jpg 500w"/>
                                <source
                                    media="(max-width: 1400px)"
                                    srcset="<?php echo get_template_directory_uri(); ?>/img/headers/duluth_diner_menu_header.jpg 1400w" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/headers/duluth_diner_menu_header.jpg" />
                            </picture>
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
                                            <a href="https://www.grubhub.com/restaurant/duluth-diner-3620-peachtree-industrial-blvd-duluth/873381?gclid=CjwKCAjw3-bzBRBhEiwAgnnLCmbQ-hkz8O3Ad22ruzJiTKDqtbjWjtVzwudbb3kLxAq7lEtEa1KHCxoCzM0QAvD_BwE&gclsrc=aw.ds" target="_blank">
                                                <img src="http://duluthdiner.com/wp-content/themes/dd2017/img/ctas/grub_hub.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.ubereats.com/atlanta/food-delivery/duluth-diner/6Wjf8K85SP6itWWtwalWVA" target="_blank">
                                                <img src="http://duluthdiner.com/wp-content/themes/dd2017/assets/img/ubereats_banner.jpg">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://duluthdiner.com/wp-content/themes/dd2017/assets/pdfs/menu.pdf">
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

                                <?php get_template_part('partials/specials'); ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>