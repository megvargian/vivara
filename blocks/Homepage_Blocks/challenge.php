<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'The Challenge';
$title = get_field('title') ?: "Generations\nAre Being Left Out.";
$subtitle = get_field('subtitle') ?: "Lebanon's generations face structural barriers that prevent them from participating, contributing, and thriving.";
$cards = get_field('cards') ?: array(
    array('number' => '01', 'title' => 'Inequality', 'body' => 'Systemic inequality blocks generations from accessing positions and spaces they are qualified and ready for.', 'icon_svg' => '<svg class="ch-icon" viewBox="0 0 44 44" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="22" cy="22" r="18"/><path d="M22 12v10l6 4"/></svg>'),
    array('number' => '02', 'title' => 'Lack of Opportunity', 'body' => 'Fresh graduates face closed doors, limited networks, and a job market that undervalues their potential.', 'icon_svg' => '<svg class="ch-icon" viewBox="0 0 44 44" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M6 38 L14 22 L22 30 L30 14 L38 26"/><path d="M34 14 L38 14 L38 18"/></svg>'),
    array('number' => '03', 'title' => 'Limited Generational Voice', 'body' => 'Decision-making remains saturated by the same voices. Generations are excluded from spaces that shape their future.', 'icon_svg' => '<svg class="ch-icon" viewBox="0 0 44 44" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="22" cy="16" r="7"/><path d="M6 38c0-8.84 7.16-16 16-16s16 7.16 16 16"/><line x1="30" y1="6" x2="38" y2="2"/><line x1="32" y1="12" x2="40" y2="12"/></svg>'),
);
?>
<section class="challenge" id="challenge">
  <div class="challenge-noise"></div>
  <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
  <h2 class="big-title reveal"><?php echo vivara_block_multiline($title); ?></h2>
  <p class="challenge-sub reveal"><?php echo esc_html($subtitle); ?></p>
  <div class="challenge-cards">
    <?php foreach ($cards as $index => $card) : ?>
      <div class="ch-card <?php echo esc_attr(vivara_block_reveal_class($index ? $index + 1 : 0)); ?>">
        <div class="ch-card-bar"></div>
        <div class="ch-num"><?php echo esc_html(vivara_block_value($card, 'number')); ?></div>
        <?php echo vivara_block_svg(vivara_block_value($card, 'icon_svg')); ?>
        <div class="ch-title"><?php echo esc_html(vivara_block_value($card, 'title')); ?></div>
        <p class="ch-body"><?php echo esc_html(vivara_block_value($card, 'body')); ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>
