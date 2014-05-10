<?php
/**
 * The template for displaying footer on any page
 *
 */
?>
<?php
    if (is_front_page()):
        dynamic_sidebar('main-cta');
    else:
        dynamic_sidebar('inner-cta');
    endif;
?>

<div class="wrapper partners-wrpr">
    <div class="partners">
        <ul>
            <li class="first"><img src="<?php echo get_template_directory_uri(); ?>/img/partner-1.png" alt="" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/partner-2.png" alt="" /></li>
            <li><img src="<?php echo get_template_directory_uri(); ?>/img/partner-3.png" alt="" /></li>
            <li class="last"><img src="<?php echo get_template_directory_uri(); ?>/img/partner-4.png" alt="" /></li>
        </ul>
    </div>
</div>
<footer class="f-wrapper">
    <div class="footer clearfix">
		<div class="wrapper">
			<?php
				dynamic_sidebar('ftr-contact' );
				dynamic_sidebar('ftr-nav-1' );
				dynamic_sidebar('ftr-nav-2' );
				dynamic_sidebar('ftr-form' );
			?>

		</div>
	</div>
	<div class="copyrights f-wrapper">
		<div class="wrapper clearfix">
			<p class="copyright">Copyright 2014 – Bravo Hearing Centre</p>
			<p class="designby">Web Design by <a href="#">WSI</a></p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
        <script type="text/javascript">
            var addthis_config = addthis_config||{};
            addthis_config.data_track_addressbar = false;
            addthis_config.data_track_clickback = false;
        </script>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
