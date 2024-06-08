<?php
$id = 'news-slider-' . $block['id'];
if (!empty($block['anchor'])) {
	$id = $block['anchor'];
}

$class_name = 'news-slider';
if (!empty($block['className'])) {
	$class_name .= ' ' . $block['className'];
}

$title = get_field('title');
//$btn = get_field('btn');
//$background_img = get_field('background_img');
//$margin = get_field('margin');
$posts = new WP_Query(
	array(
		'post_type' => 'news',
		'posts_per_page' => 10,
		'post_status' => 'publish',
		'orderby' => 'date',
		'order' => 'DESC',
	)
);

if (isset($block['data']['gutenberg_preview_image'])) {
	echo '<img src="' . get_stylesheet_directory_uri() . '/template-parts/blocks/text/news-slider/news-slider.png" style="max-width:100%; height:auto;">';
} else {
	?>

	<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class_name); ?> ">
	<div class="container">
		<div class="news-slider__wrap">
		<!--	<div class="container"> -->
				<div data-aos="fade-up" data-aos-once="true" class="news-slider__head">
					<?php if ($title): ?>
						<h2 class="headline_default"><?php echo wp_kses($title, 'post'); ?></h2>
					<?php endif; ?>
					<div class="swiper-arrow">
						<div class="swiper-arrow-prev">
							<?php echo file_get_contents(get_stylesheet_directory() . '/img/icons/arrow-left-blue.svg'); ?>
						</div>
						<div class="swiper-arrow-next">
							<?php echo file_get_contents(get_stylesheet_directory() . '/img/icons/arrow-left-blue.svg'); ?>
						</div>
					</div>
				</div>

				<?php if ($posts->have_posts()): ?>
					<div data-aos="fade-up" data-aos-once="true" class="news-slider__slider">
						<div class="swiper-wrapper">
							<?php while ($posts->have_posts()):
								$posts->the_post(); ?>
								<div class="swiper-slide">


									<div class="news-slider__item">
										<div class="news-slider__item_wrap">

											<?php $post_image = get_the_post_thumbnail(); ?>
											<div class="new-img">
												<?php echo $post_image; ?>
											</div>


											<div class="news-slider__date"><?php echo get_the_date('d.m.Y'); ?></div>
											<h3><?php the_title(); ?></h3>
											<?php the_excerpt(); ?>
										</div>

										<div class="news-slider__link">
											<!--	<a class="btn-link btn_default_mt" href="<?php the_permalink(); ?>"> -->
											<?php $post_ID = get_the_ID(); ?>
											<!-- <a id="<?php echo the_permalink() ?>" class="ajax-post"> -->

											<a href="<?php the_permalink(); ?>" id="<?php echo $post_ID ?>" class="ajax-post btn-blue" target="_blank">
												Читати далі
												<?php echo file_get_contents(get_stylesheet_directory() . '/img/icons/arrow-right-blue.svg'); ?>
											</a>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</div>
						<div data-aos="fade-up" data-aos-once="true" class="swiper-scrollbar"></div>


						<!--	<div class="popup">
					
							<div class="container_popup">
							<div class="close">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18 6L6 18M18 18L6 6" stroke="#253376" stroke-width="2" stroke-linecap="round"/>
</svg>
</div>
								<div id="ajax-response"></div>
							</div>
						</div> -->


					</div>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>

				<!--	<?php if ($btn): ?>
					<div class="btn_default" data-aos="fade-up">
						<?php $link_target = $btn['target'] ? $btn['target'] : '_self'; ?>
						<a class="btn btn_blue" href="<?php echo $btn['url']; ?>" target="<?php echo esc_attr($link_target); ?>">
							<?php if ($btn['title']) {
								echo $btn['title'];
							} else {
								echo 'Zur Übersicht';  
							} ?>
						</a>
					</div>

				<?php endif; ?> -->
			<!--</div> -->
		</div>

	<!--	<?php if ($background_img): ?>
			<div class="news-slider__bg img_default">
				<?php echo wp_get_attachment_image($background_img['id'], 'full', '', ['title' => $background_img['title']]); ?>
			</div>
		<?php endif; ?> -->

		</div>
	</section>

<?php } ?>