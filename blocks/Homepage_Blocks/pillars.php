<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Strategic Pillars';
$title = get_field('title') ?: "Voice.\nOpportunity.\nInclusion.";
$description = get_field('description') ?: 'Three interconnected pillars that address the root causes of generational exclusion — and build practical pathways toward an equal society.';
$cards = get_field('cards') ?: array(
    array('number' => '01', 'title' => 'VOICE', 'body' => 'Generational engagement in decision-making and civic life — including leadership development and structured dialogue platforms where people shape positive community outcomes.', 'tag' => 'Civic Engagement'),
    array('number' => '02', 'title' => 'OPPORTUNITY', 'body' => "Access to work, education, and leadership pathways — from fresh graduate support and career mentorship to cross-sector partnerships that open real doors for Lebanon's generations.", 'tag' => 'Career Access'),
    array('number' => '03', 'title' => 'INCLUSION', 'body' => 'Reducing inequality across all sectors — from politics and employment to peacebuilding, sports-based cohesion, and diaspora return initiatives that bring talent back home.', 'tag' => 'Equal Society'),
);
?>
<section class="pillars" id="pillars">
  <div class="pillars-top">
    <div class="reveal">
      <div class="eyebrow"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
      <h2 class="big-title"><?php echo vivara_block_multiline($title); ?></h2>
    </div>
    <p class="pillars-desc reveal reveal-delay-2"><?php echo esc_html($description); ?></p>
  </div>
  <div class="pillars-grid">
    <?php foreach ($cards as $index => $card) : ?>
      <div class="p-card <?php echo esc_attr(vivara_block_reveal_class($index ? $index + 1 : 0)); ?>">
        <div class="p-num"><?php echo esc_html(vivara_block_value($card, 'number')); ?></div>
        <div class="p-title"><?php echo esc_html(vivara_block_value($card, 'title')); ?></div>
        <p class="p-body"><?php echo esc_html(vivara_block_value($card, 'body')); ?></p>
        <span class="p-tag"><?php echo esc_html(vivara_block_value($card, 'tag')); ?></span>
      </div>
    <?php endforeach; ?>
  </div>
</section>
