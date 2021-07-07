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

<footer id="footer-container" class="site-footer" role="contentinfo">
	<div>
		<a href="<?php echo esc_url( home_url() ); ?>">
			<?php if(get_field('footer_logo', 'option')) : ?>
			<img src="<?php the_field('footer_logo', 'option'); ?>" alt="<?php bloginfo( 'name' ); ?>">
			<?php else: ?>
				<?php bloginfo( 'name' ); ?>
			<?php endif; ?>
		</a>
	</div>
	<div>
		<p><?php the_field('footer_text', 'option'); ?></p>
	</div>
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
	<div>
		<p><?php the_field('footer_copyrigh_text', 'option'); ?></p>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>
