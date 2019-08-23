<?php /* Template Name: Blog */ ?>
    <?php get_header(); ?>
        <div class="wrapper blog">
            <section class="posts">
                <?php get_template_part('partials/loops/news_items'); ?>
            </section>

            <aside>
                <div class="recent_specials banner">
                    <h2><span></span>Recent Specials<span></span></h2>
                    <ul class="posts">
                         <?php get_template_part('partials/loops/specials'); ?>
                    </ul>
                </div>

                <div class="reccomend banner">
                    <h2>
                        <span></span>Reccomend Us<span></span>
                    </h2>
                    <?php get_template_part('partials/social-row'); ?>
                </div>
            </aside>
        </div>   
    <?php get_footer(); ?>
