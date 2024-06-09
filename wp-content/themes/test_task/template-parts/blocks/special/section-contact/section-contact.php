<?php
if (isset($block['data']['gutenberg_preview_image']) && $is_preview) {
	echo '<img src="' . get_stylesheet_directory_uri() . '/template-parts/blocks/special/slider/section-contact.jpg" style="max-width:100%; height:auto;">';
}

if (!$is_preview) {
	$id = 'section-contact-' . $block['id'];
	if (!empty($block['anchor'])) {
		$id = $block['anchor'];
	}

	if (!empty($block['anchor'])) {
		$anchor = 'id="' . esc_attr($block['anchor']) . '" ';
	}

	$class_name = 'section-contact';
	if (!empty($block['className'])) {
		$class_name .= ' ' . $block['className'];
	}
	if (!empty($block['align'])) {
		$class_name .= ' align' . $block['align'];
	}

	$title = get_field('title');
	$mail = get_field('e-mail');
	$address = get_field('address');
	?>

	<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class_name); ?> ">
		<div class="section-contact__wrap">
			<div class="section-contact__text">
				<?php if ($title): ?>
					<h2><?php echo $title; ?></h2>
				<?php endif; ?>
				<div class="section-contact__text_bottom">
					<?php if ($mail): ?>
						<div class="section-contact__mail">
							<a href="mailto:<?php echo $mail; ?>"><?php echo $mail; ?></a>
						</div>
					<?php endif; ?>
					<?php if ($address): ?>
						<div class="section-contact__address">
							<?php echo $address; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="section-contact__form">
				<?php echo do_shortcode('[contact-form-7 id="b3b5794" title="Contact form 1"]') ?>
			</div>
		</div>
	</section>
<?php } ?>