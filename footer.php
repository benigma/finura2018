<footer>
            <div class="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/logo-white.svg" alt="Finura" /></a></div>
            <div class="social">
                <a href="tel:+442031027730">+44 (0) 20 3102 7730</a>
                <div class="sm-icons">
                    <a href="https://www.facebook.com/finurapartners" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" /></a>
                    <a href="https://www.linkedin.com/company/finura-partners-llp" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/li.png" /></a>
                    <a href="https://twitter.com/Finurapartners" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/tw.png" /></a>
                </div>
            </div>
            <div class="disclaimer">
                <p>Finura Partners Limited is an appointed representative of Evolution Wealth Network Limited who are authorised and regulated by the Financial Conduct Authority. Registered Office: Sussex House, North Street, Horsham, West Sussex, RH12 1RQ. Registered in England Number: 591218</p>
                <p>Finura Partners Limited. Registered Office: 15 Bowling Green Lane, London, England, EC1R 0BD. Registered in England Number 09560937</p>
            </div>
            <div class="navigation">
                <ul>
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
                </ul>
            </div>
        </footer>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script>
        $(document).ready(function(){
            
            $('.line-menu').click( function () {
                $("#navigation__container").addClass("selected");
            } );
            $(".close__menu").click(function(){
                $("#navigation__container").removeClass("selected");
            });
                
        });
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-52812673-1', 'auto');
        ga('require', 'linkid', 'linkid.js');
        ga('send', 'pageview');
    </script>

    <?php wp_footer(); ?>

</body>
</html>