<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package web2feel
 * @since web2feel 1.0
 */
?>

	</div><!-- #main .site-main -->
<div id="bottom" class="container_12 clearfix">
	
		<ul class="clearfix">
		<?php if ( !function_exists('dynamic_sidebar')
		        || !dynamic_sidebar("Footer") ) : ?>  
		<?php endif; ?>
		</ul>
	</div>

	<footer id="colophon" class="site-footer container_12 cf" role="contentinfo">
		<div class="site-info grid_12">
		
		<div class="fleft"> Copyright &copy; <?php echo date('Y');?> <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> - <?php bloginfo('description'); ?>.<br />
				<?php fflink(); ?> | <a href="http://topwpthemes.com/<?php echo wp_get_theme(); ?>/" ><?php echo wp_get_theme(); ?> Theme</a> 	
 </div>	
		
		<div class="fright"> <a href="#page">Back to top </a></div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
	</div><!-- #page .hfeed .site -->


<?php wp_footer(); ?>

</body>
</html>