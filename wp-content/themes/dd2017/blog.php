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
                        <li><a href="#"><i class="fa fa-caret-right"></i>Some awesome post title here</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Some awesome post title here</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Some awesome post title here</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i>Some awesome post title here</a></li>
                    </ul>
                </div>

                <div class="reccomend banner">
                    <h2>
                        <span></span>Reccomend Us<span></span>
                    </h2>
                    <p>
                        Social media stuff here
                    </p>
                </div>
            </aside>
        </div>   
    <?php get_footer(); ?>
