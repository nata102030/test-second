<?php
if (isset($block['data']['gutenberg_preview_image']) && $is_preview) {
    echo '<img src="' . get_stylesheet_directory_uri() . '/template-parts/blocks/text-images/image-text-columns/image-text-columns.jpg" style="max-width:100%; height:auto;">';
}

if (!$is_preview) {
    $id = 'image-text-columns-' . $block['id'];
    if (!empty($block['anchor'])) {
        $id = $block['anchor'];
    }

    if (!empty($block['anchor'])) {
        $anchor = 'id="' . esc_attr($block['anchor']) . '" ';
    }

    $class_name = 'image-text-columns';
    if (!empty($block['className'])) {
        $class_name .= ' ' . $block['className'];
    }
    if (!empty($block['align'])) {
        $class_name .= ' align' . $block['align'];
    }

    $title = get_field('title');
    $text = get_field('text');
    $image = get_field('image');
    ?>

    <section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class_name); ?>">
        <div class="container">
            <div class="image-text-columns_wrap">
                <div class="wrap-text">
                    <?php if ($title): ?>
                        <h2 class="image-text-columns-title">
                            <?php echo $title; ?>
                        </h2>
                    <?php endif; ?>
                    <?php if ($text): ?>
                        <div class="image-text-columns-text">
                            <?php echo $text; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($button): ?>
                        <a href="<?php echo $button['url']; ?>" class="btn">
                            <?php echo $button['title']; ?>
                        </a>
                    <?php endif; ?>
                </div>
                <?php if ($image): ?>
                    <div class="wrap-image">
                        <?php echo wp_get_attachment_image($image['id'], 'large'); ?>
                    </div>
                <?php endif; ?>
            </div>
    </section>
<?php } ?>