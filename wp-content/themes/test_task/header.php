<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_task
 */

?>

<?php
$logo = get_field('logo', 'option');
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'test_task'); ?></a>
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="container_line">
					<?php if ($logo_header = get_field('logo', 'option')): ?>
						<div class="logo_footer">
							<a class="site-footer__logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
								<?php echo wp_get_attachment_image($logo['id'], 'large'); ?>
							</a>
						</div>
					<?php endif; ?>
					<div class="site-header__nav">
						<nav class="site-header__menu">
							<?php if (has_nav_menu('menu-header')):
								wp_nav_menu(
									array(
										'theme_location' => 'menu-header',
										'container' => '',
										'container_class' => '',
										'menu_class' => 'top-menu',
									)
								);
							endif; ?>
						</nav>
					</div>
					<div class="site-header__burger">
						<span></span>
					</div>
				</div>
			</div>
			<div class="header__modal">
				<div class="footer_menu_mob_wrap">
					<div class="site-header__menu">
						<?php if (has_nav_menu('menu-header')):
							wp_nav_menu(
								array(
									'theme_location' => 'menu-header',
									'container' => '',
									'container_class' => '',
									'menu_class' => 'top-menu',
								)
							);
						endif; ?>
					</div>

				</div>
			</div>
		</header><!-- #masthead -->