<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Impact & Trust';
$title = get_field('title') ?: 'The Goal is Less Inequality.';
$description = get_field('description') ?: "Vivara's impact is defined not only by participation, but by transformation — measured in leadership capacity, civic engagement, dialogue activated, and inclusion reinforced.";
$cards = get_field('cards') ?: array(
    array('metric' => '6', 'label' => 'Program Areas', 'description' => 'Six interconnected action areas designed as scalable models for systemic impact across Lebanon.'),
    array('metric' => '∞', 'label' => 'Generations Potential', 'description' => 'Building leadership capacity, dialogue platforms, cross-sector partnerships — measured by transformation, not just participation.'),
);
?>
<section class="impact" id="impact">
  <div class="impact-top">
    <div class="reveal">
      <div class="eyebrow"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
      <h2 class="big-title"><?php echo esc_html($title); ?></h2>
    </div>
    <p class="impact-desc reveal reveal-delay-2"><?php echo esc_html($description); ?></p>
  </div>
  <div class="impact-cards">
    <?php foreach ($cards as $index => $card) : ?>
      <div class="i-card <?php echo esc_attr(vivara_block_reveal_class($index + 2)); ?>">
        <div class="i-metric"><?php echo esc_html(vivara_block_value($card, 'metric')); ?></div>
        <div class="i-label"><?php echo esc_html(vivara_block_value($card, 'label')); ?></div>
        <p class="i-desc"><?php echo esc_html(vivara_block_value($card, 'description')); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
