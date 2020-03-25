<?php get_header(); ?>

    <div class="cta home">
        <div class="wrapper">
            <div class="sidebar">
                <div class="block">
                    <h2>
                        <span>check out our</span>
                        covid curbside
                    </h2>
                    <div class="main-cta">
                        <p class="tagline">
                            during this trying time
                            let us take something off 
                            of your plate with our
                            concierge curbside.
                        </p>
                        <ul>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                order online right from your coutch, car, or wherever
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                pay online
                            </li>
                            <li>
                                <i class="fa fa-caret-right" aria-hidden="true"></i>
                                pull up out front and we bring it right out!
                            </li>
                        </ul>

                        <div class="btns">
                            <a href="<?php bloginfo('site_url'); ?>/news/covid-curbside">
                                <i class="fas fa-search"></i>
                                learn more
                            </a>
                            <a href="https://www.toasttab.com/duluth-diner-3620-peachtree-industrial-blvd/v3" target="_blank">
                                <i class="fas fa-utensils"></i>
                                place an order
                            </a>
                        </div>
                    </div>
                </div>

                <div class="block">
                    <div class="social_media">
                        <h2>Connect &amp; Eat</h2>
                        <?php get_template_part('partials/social'); ?>
                    </div>
                </div>
            </div>
            <div class="canvas"></div>
        </div>
    </div>

    <div class="home banner one">
        <div class="wrapper">
            <div class="container one">
                <div>
                    <h4>
                        <span>The best breakfast</span>
                        you can get at dinner
                    </h4>
                    <a href="./menu/breakfast">Breakfast menu</a>
                    <div class="backdrop"></div>
                </div>
                <div>
                    <h4>
                        Lighter fare lunch
                        <span>
                            Fast &amp; fresh
                        </span>
                    </h4>
                    <a href="./menu/the-lighter-fare/">Lunch menu</a>
                    <div class="backdrop"></div>
                </div>
            </div>
            <div class="container two togo">
                <a href="https://www.ubereats.com/atlanta/food-delivery/duluth-diner/6Wjf8K85SP6itWWtwalWVA" target="_self"></a>
            </div>
            <div class="container three reviews">
                <h2>Let us cater your next event</h2>
                <p>Fast, delicious, food | <span>Hassle free cleanup</span></p>
                <a href="http://<?php bloginfo('stylesheet_directory'); ?>/assets/pdfs/menu.pdf" class="btn" target="_blank">
                    Get the details
                    <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                </a>
                <div class="backdrop"></div>
            </div>
        </div>
    </div>

    <div class="home banner two">
        <div class="wrapper testimonials">
            <span class="quote one">"</span>
            <span class="quote two">"</span>
            <div class="testimonial">
                <p class="text">
                    It's hard to believe how everything on a menu can be so good, but everything i've
                    had has been amazing.
                </p>
                <p class="name">
                    - Paul
                </p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>