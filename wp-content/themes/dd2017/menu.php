<?php
/*
* Template Name: Menu
*/
?>

<?php get_header(); ?>
    <div class="menu-wrapper">
        <div class="wrapper content menu">
            <div class="menu-sidebar">
                <?php wp_nav_menu( array( 'theme_location' => 'diner-menu' ) ); ?>
            </div>
            <div class="menu-selection">
                <?php 
                    $cat = str_replace('/', '', explode('/menu/', $_SERVER['REQUEST_URI'])[1]);
                    if(strlen($cat) > 0):
                ?> 
                        <div class="banner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/banners/<?php echo $cat; ?>/banner.jpg">
                        </div>
                        <div class="items">
                            <?php
                                $args = array('post_type' => 'custom_menu', 'posts_per_page' => -1);
                                $args['entree_category'] = $cat;
                                $args['order']   = 'ASC';
                                $args['orderby'] = 'date';
                                $loop = new WP_Query($args);
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
                        <div class="menu-banner-cta">
                            <div class="messaging">
                                <h2 class="tagline">
                                    Duluth Diner Burgers
                                </h2>
                                <p class="slogan">
                                    Burgers so good, momma couldnt even <br>
                                    make them like this.
                                </p>
                            </div>
                        </div>

                        <div class="menu-banner"></div>
                        
                        <ul class="home-menu-ctas">
                            <li>Place a Togo order</li>
                            <li>uber eats</li>
                            <li>Download menu</li>
                        </ul>

                        <ul class="home-menu-specials">
                            <li>Special 1</li>
                            <li>Special 2</li>
                            <li>Special 3</li>
                            <li>Special 4</li>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        window.addEventListener('load', onVrViewLoad)
        function onVrViewLoad() {
            var vrView = new VRView.Player('.menu-banner', {
                image: 'http://dev.duluthdiner.com/wp-content/themes/dd2017/assets/img/vr.jpeg'
            });
        }
    </script>
<?php get_footer(); ?>