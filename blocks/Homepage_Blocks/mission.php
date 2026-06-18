<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'About Vivara';
$title = get_field('title') ?: 'Giving Generations a Seat at the Table.';
$body_1 = get_field('body_1') ?: "Generations in Lebanon face a broken system — saturated decision-making spaces, a lack of real opportunities, and structural inequality that blocks the next generation from contributing their full potential.";
$body_2 = get_field('body_2') ?: 'Vivara exists to respond to this gap. Not with charity, but with systems. Not with sympathy, but with structured action.';
$beliefs = get_field('beliefs') ?: array(
    array('title' => 'Education', 'body' => 'is the foundation of transformation.'),
    array('title' => 'Leadership', 'body' => 'is a practice, not a privilege.'),
    array('title' => 'Dialogue', 'body' => 'is the mechanism of trust.'),
    array('title' => 'Civic engagement', 'body' => 'is how systems change.'),
);
$cards = get_field('cards') ?: array(
    array('number' => '01', 'title' => 'Generations Equality & Civic Empowerment', 'body' => 'A foundation built to give Lebanese generations the voice, access, and opportunity they deserve to shape a more inclusive society.', 'style' => 'm-card-a'),
    array('number' => '02', 'title' => 'Real Voice', 'body' => 'Civic engagement, decision-making, and structured dialogue platforms that strengthen participation across generations.', 'style' => 'm-card-b'),
    array('number' => '03', 'title' => 'Real Access', 'body' => 'Pathways to work, mentorship, and career development for fresh graduates.', 'style' => 'm-card-d'),
);
$tagline = get_field('tagline') ?: '"The problem is not lack of talent. It is lack of access."';
?>
<section class="mission" id="mission">
  <div class="mission-grid">
    <div class="reveal">
      <div class="eyebrow"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
      <h2 class="big-title"><?php echo esc_html($title); ?></h2>
      <p class="mission-body" style="margin-top:28px;"><?php echo esc_html($body_1); ?></p>
      <p class="mission-body"><?php echo esc_html($body_2); ?></p>
      <div class="belief-list" style="margin-top:24px;">
        <?php foreach ($beliefs as $belief) : ?>
          <div class="belief-item"><span class="belief-arrow">→</span><span><strong><?php echo esc_html(vivara_block_value($belief, 'title')); ?></strong> <?php echo esc_html(vivara_block_value($belief, 'body')); ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="reveal reveal-delay-2">
      <div class="mission-cards">
        <?php foreach ($cards as $card) : ?>
          <div class="m-card <?php echo esc_attr(vivara_block_value($card, 'style', 'm-card-a')); ?>">
            <div class="m-card-num"><?php echo esc_html(vivara_block_value($card, 'number')); ?></div>
            <div class="m-card-title"><?php echo esc_html(vivara_block_value($card, 'title')); ?></div>
            <p class="m-card-body"><?php echo esc_html(vivara_block_value($card, 'body')); ?></p>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="mission-tagline-block" style="margin-top:16px;">
        <div class="mission-tagline-text"><?php echo esc_html($tagline); ?></div>
      </div>
    </div>
  </div>
</section>
