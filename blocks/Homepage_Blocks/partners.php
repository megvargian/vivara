<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Partners & Supporters';
$title = get_field('title') ?: "Collective Transformation\nRequires Collective Leadership.";
$subtitle = get_field('subtitle') ?: 'Sustainable impact emerges through shared ownership, not isolated action.';
$cards = get_field('cards') ?: array(
    array('title' => 'Universities', 'body' => 'Academic institutions supporting generational development and graduate access programs.', 'icon_svg' => '<svg class="pt-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="6" y="14" width="28" height="20" rx="2"/><path d="M14 14V10a6 6 0 0112 0v4"/></svg>'),
    array('title' => 'NGOs & Civil Society', 'body' => 'Organizations aligned with civic engagement and generational empowerment missions.', 'icon_svg' => '<svg class="pt-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="20" cy="20" r="14"/><path d="M20 6v14l8 4"/></svg>'),
    array('title' => 'Private Sector', 'body' => 'Companies creating real employment pathways for graduates and emerging generations.', 'icon_svg' => '<svg class="pt-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M8 32V16l12-8 12 8v16"/><rect x="16" y="22" width="8" height="10"/></svg>'),
    array('title' => 'Diaspora', 'body' => 'Lebanese expats committed to mentoring, investing, and returning home.', 'icon_svg' => '<svg class="pt-icon" viewBox="0 0 40 40" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="20" cy="20" r="14"/><path d="M6 20h28M20 6c-5 4-8 9-8 14s3 10 8 14M20 6c5 4 8 9 8 14s-3 10-8 14"/></svg>'),
);
?>
<section class="partners" id="partners">
  <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
  <h2 class="big-title reveal"><?php echo vivara_block_multiline($title); ?></h2>
  <p class="partners-sub reveal"><?php echo esc_html($subtitle); ?></p>
  <div class="partner-types">
    <?php foreach ($cards as $index => $card) : ?>
      <div class="pt-card <?php echo esc_attr(vivara_block_reveal_class($index)); ?>">
        <?php echo vivara_block_svg(vivara_block_value($card, 'icon_svg')); ?>
        <div class="pt-title"><?php echo esc_html(vivara_block_value($card, 'title')); ?></div>
        <p class="pt-body"><?php echo esc_html(vivara_block_value($card, 'body')); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
