<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_task
 */

?>

<?php
$logo = get_field('logo', 'option');
$copyright = get_field('copyright', 'option');
?>

<footer id="colophon" class="site-footer">
	<div class="container">
		<?php if ($logo_header = get_field('logo', 'option')): ?>
			<div class="logo_footer">
				<a class="site-footer__logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<?php echo wp_get_attachment_image($logo['id'], 'large'); ?>
				</a>
			</div>
		<?php endif; ?>
		<?php get_sidebar(); ?>
		<?php if ($copyright): ?>
			<div class="footer_menu_copyright"><?php echo $copyright; ?></div>
		<?php endif; ?>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>