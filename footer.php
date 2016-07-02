<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); echo sprintf( __( ' Theme By: %1$s.', 'blankslate' ), '<a href="http://www.jirosworld.com/">Jiro Ghianni</a>' ); ?>
</div>

<!-- extra footer uit blank slate: -->
<div id="footer">
			&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?>
		</div>

</footer>



<!-- Footer -->
<div id="voeter">

<hr class="intro-divider">
<div class="container">
    <div class="row mijnrij">
    <div class="col-lg-12">
        <ul class="list-inline">
            <li> <a href="#">HOME</a></li>
            <li class="footer-menu-divider">|</li>
            <li><a href="wp/en/about-jiro-2/">ABOUT</a></li>
            <li class="footer-menu-divider">|</li>
            <li><a href="wp/en/work/">PORTFOLIO</a></li>
            <li class="footer-menu-divider">|</li>
            <li><a href="newsletter.htm">MAILINGLIST</a></li>
            <li class="footer-menu-divider">|</li>
            <li><a href="wp/en/contact/">CONTACT</a></li>
        </ul>
    <p><a href="wp/en/work/" class="btn btn-default btn-lg "><i class="fa fa-user-plus fa-fw"></i> HIRE ME</a> <br />and get a 28 page queer zine for free!</p>
    <p class="copyright text-muted small">Copyright &copy; JirosWorld 2016. All Rights Reserved</p>
    </div>
    </div>
</div>
</div> <!-- einde voeter-div -->

</div> <!-- einde div id page-wrap? -->

<?php wp_footer(); ?>Hier staat de WP footer enqueue.
 <script src="scripts/google-analytics.js"></script>
 <script src="scripts/javascripts.js"></script>
</body>
</html>