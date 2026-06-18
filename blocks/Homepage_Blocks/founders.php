<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Founders';
$title = get_field('title') ?: "The People\nBehind Vivara.";
$subtitle = get_field('subtitle') ?: 'This editable section is prepared for six founders. Replace each placeholder image, name, and biography directly in WordPress or in the HTML content block.';
$profiles = get_field('profiles') ?: array(
    array('name' => 'Founder Name 01', 'bio' => 'Short biography to be added here. This text can be edited, expanded, or removed in WordPress.'),
    array('name' => 'Founder Name 02', 'bio' => 'Short biography to be added here. This text can be edited, expanded, or removed in WordPress.'),
    array('name' => 'Founder Name 03', 'bio' => 'Short biography to be added here. This text can be edited, expanded, or removed in WordPress.'),
    array('name' => 'Founder Name 04', 'bio' => 'Short biography to be added here. This text can be edited, expanded, or removed in WordPress.'),
    array('name' => 'Founder Name 05', 'bio' => 'Short biography to be added here. This text can be edited, expanded, or removed in WordPress.'),
    array('name' => 'Founder Name 06', 'bio' => 'Short biography to be added here. This text can be edited, expanded, or removed in WordPress.'),
);
?>
<section class="founders" id="founders">
  <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
  <h2 class="big-title reveal"><?php echo vivara_block_multiline($title); ?></h2>
  <p class="founders-sub reveal reveal-delay-1"><?php echo esc_html($subtitle); ?></p>
  <div class="founders-grid">
    <?php foreach ($profiles as $index => $profile) : ?>
      <article class="founder-profile <?php echo esc_attr(vivara_block_reveal_class($index)); ?>">
        <div class="founder-photo">
          <?php if (!empty($profile['photo'])) : ?>
            <img src="<?php echo esc_url($profile['photo']['url']); ?>" alt="<?php echo esc_attr($profile['photo']['alt'] ?: vivara_block_value($profile, 'name')); ?>">
          <?php else : ?>
            Photo
          <?php endif; ?>
        </div>
        <div class="founder-profile-content">
          <h3 class="founder-profile-name"><?php echo esc_html(vivara_block_value($profile, 'name')); ?></h3>
          <p class="founder-profile-bio"><?php echo esc_html(vivara_block_value($profile, 'bio')); ?></p>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>
