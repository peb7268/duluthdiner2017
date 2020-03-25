<?php get_header(); ?>

    <div class="cta home">
        <div class="wrapper">
            <div class="sidebar">
                <div class="block">
                    <h2>
                        <span>See what's cooking in</span>
                        The kitchen
                    </h2>
                    <div class="specials">
                        <h2>
                            Weekly Special
                        </h2>
                        <p>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Pot Roast Quesedilla
                        </p>
                    </div>
                    <div class="diner-reccomendations">
                        <h2>Diner Picks</h2>
                        <p>
                            <i class="fa fa-caret-right" aria-hidden="true"></i>
                            Lobster Bisque
                        </p>
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