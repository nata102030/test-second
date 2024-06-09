<?php
if (isset($block['data']['gutenberg_preview_image']) && $is_preview) {
	echo '<img src="' . get_stylesheet_directory_uri() . '/template-parts/blocks/special/slider/slider.jpg" style="max-width:100%; height:auto;">';
}

if (!$is_preview) {
	$id = 'slider-' . $block['id'];
	if (!empty($block['anchor'])) {
		$id = $block['anchor'];
	}

	if (!empty($block['anchor'])) {
		$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
	}

	$class_name = 'slider';
	if (!empty($block['className'])) {
		$class_name .= ' ' . $block['className'];
	}
	if (!empty($block['align'])) {
		$class_name .= ' align' . $block['align'];
	}

	$title = get_field('title');
	$rows = get_field('item');
	?>

	<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class_name); ?> ">
		<div class="container">
			<div class="slider__wrap">
				<div class="slider__head">
					<?php if ($title): ?>
						<h2 class="headline_default"><?php echo $title; ?></h2>
					<?php endif; ?>
					<div class="swiper-arrow">
						<div class="swiper-arrow-prev">
							<?php echo file_get_contents(get_stylesheet_directory() . '/img/icons/arrow-left.svg'); ?>
						</div>
						<div class="swiper-arrow-next">
							<?php echo file_get_contents(get_stylesheet_directory() . '/img/icons/arrow-left.svg'); ?>
						</div>
					</div>
				</div>
				<?php if ($rows) { ?>
					<div class="slider__slider">
						<div class="swiper-wrapper">
							<?php foreach ($rows as $item): ?>
								<div class="swiper-slide">
									<div class="slider__item">
										<?php if ($item['image']): ?>
											<div class="wrap-left-image">
												<?php echo wp_get_attachment_image($item['image']['id'], 'large'); ?>
											</div>
										<?php endif; ?>
										<div class="wrap-right">
											<?php if ($item['text']): ?>
												<div class="wrap-right__text">
													<?php echo $item['text']; ?>
												</div>
											<?php endif; ?>
											<div class="wrap-right__name-speciality">
												<?php if ($item['name']): ?>
													<div class="wrap-right__name">
														<?php echo $item['name']; ?>
													</div>
												<?php endif; ?>
												<?php if ($item['speciality']): ?>
													<div class="wrap-right__speciality">
														<?php echo $item['speciality']; ?>
													</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="swiper-pagination"></div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
<?php } ?>