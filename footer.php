	</div>
	<!-- /body -->
		
	<footer id="footer" class="pagewidth clearfix">
			
		<p class="back-top"><a href="#header">&uarr;</a></p>
	
		<?php // footer navigation ?>
		<?php wp_nav_menu(array('theme_location' => 'footer-nav' , 'fallback_cb' => '' , 'container'  => '' , 'menu_id' => 'footer-nav' , 'menu_class' => 'footer-nav')); ?>

		<div class="footer-text clearfix">
			<?php bloginfo(); ?> &copy; <?php echo date( 'Y' ); ?><br>
			Powered by <a href="http://wordpress.org">WordPress</a>  &bull; <a href="http://themify.me">Themify WordPress Themes</a>
		</div>
		<!-- /footer-text --> 

	</footer>
	<!-- /#footer --> 

</div>
<!-- /#pagewrap -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script> <!-- jquery-ui -->
<script src="<?php echo get_template_directory_uri(); ?>/js/theme.script.js"></script> <!-- theme script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script> <!-- my scripts -->
<!-- wp_footer -->
<?php wp_footer(); ?>

</body>
</html>