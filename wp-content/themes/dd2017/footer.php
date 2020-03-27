
    <footer>
        <div class="wrapper">
            <div class="copy">
                &copy; <?php echo date('Y'); ?> Duluth Diner
            </div>

            <div class="contact_info">
                <a href="https://goo.gl/maps/bXzB8tTyYwz" target="_blank" class="location">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Duluth Diner | 3620 Peachtree Industrial Blvd #4843, Duluth, GA 30096
                </a>
            </div>

            <div class="social_media">
                <h2>Connect &amp; Eat</h2>
                <?php get_template_part('partials/social'); ?>
            </div>
        </div>
    </footer>

    <script type"text/javascript" src="http://duluthdiner.com/wp-content/themes/dd2017/node_modules/jquery/dist/jquery.min.js"></script>
    <script type"text/javascript" src="http://duluthdiner.com/wp-content/themes/dd2017/node_modules/rx/dist/rx.all.js"></script>
    <script type"text/javascript" src="http://duluthdiner.com/wp-content/themes/dd2017/js/global.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-30304370-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-30304370-1');
    </script>
</body>
</html>