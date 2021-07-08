<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package Beetroot
 */

?>

</main><!-- #content -->

<footer id="footer-container" class="site-footer" role="contentinfo" style="background-image: url('<?php the_field('footer_background_image', 'option'); ?>');">
<div class="container">
	<div class="row">
		<div class="col-6">
			<a href="<?php echo esc_url( home_url() ); ?>">
				<?php if(get_field('footer_logo', 'option')) : ?>
				<img src="<?php the_field('footer_logo', 'option'); ?>" alt="<?php bloginfo( 'name' ); ?>">
				<?php else: ?>
					<?php bloginfo( 'name' ); ?>
				<?php endif; ?>
			</a>
			<div class="footer_text">
				<?php the_field('footer_text', 'option'); ?>
			</div>
		</div>
		<div class="col-2"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-first') )  ?></div>
		<div class="col-2"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-second') )  ?></div>
		<div class="col-2"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-footer-third') )  ?></div>			
		<div>
		
			<nav class="nav-footer">
				<?php
				if ( has_nav_menu( 'footer_menu' ) ) :
					wp_nav_menu(
						[
							'theme_location' => 'footer_menu',
							'menu_id'        => 'footer-menu',
							'walker'         => new beetroot_navwalker(),
						]
					);
				endif;
				?>
			</nav><!-- .nav-primary -->

			<p><?php the_field('footer_copyrigh_text', 'option'); ?></p>
		</div>

	</div>
</div>

</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
