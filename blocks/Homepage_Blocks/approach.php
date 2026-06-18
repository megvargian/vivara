<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Our Approach';
$title = get_field('title') ?: "From Initiatives\nto Systems Change.";
$subtitle = get_field('subtitle') ?: 'Vivara does not operate as a project-based organization. We design ecosystems of transformation.';
$cards = get_field('cards') ?: array(
    array('number' => '01', 'title' => 'Integration', 'body' => 'Connecting sectors and generations — public, private, civil society, and academic — into coordinated systems of action.'),
    array('number' => '02', 'title' => 'Sustainability', 'body' => 'Building frameworks that endure beyond programs — creating structural change, not temporary interventions.'),
    array('number' => '03', 'title' => 'Scalability', 'body' => 'Designing models that can be replicated across contexts — from Beirut to the Lebanese diaspora and beyond.'),
);
?>
<section class="approach" id="approach">
  <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
  <h2 class="big-title reveal"><?php echo vivara_block_multiline($title); ?></h2>
  <p class="approach-sub reveal"><?php echo esc_html($subtitle); ?></p>
  <div class="approach-grid">
    <?php foreach ($cards as $index => $card) : ?>
      <div class="ap-card <?php echo esc_attr(vivara_block_reveal_class($index ? $index + 1 : 0)); ?>">
        <div class="ap-big"><?php echo esc_html(vivara_block_value($card, 'number')); ?></div>
        <div class="ap-title"><?php echo esc_html(vivara_block_value($card, 'title')); ?></div>
        <p class="ap-body"><?php echo esc_html(vivara_block_value($card, 'body')); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
