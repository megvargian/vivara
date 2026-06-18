<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Get Involved';
$title = get_field('title') ?: "Join Us in\nShaping What\nComes Next.";
$subtitle = get_field('subtitle') ?: 'We invite partners, institutions, and changemakers to engage in building systems that are more inclusive, more resilient, and more collaborative.';
$primary_button_text = get_field('primary_button_text') ?: 'Partner With Vivara →';
$primary_button_url = get_field('primary_button_url') ?: 'mailto:partners@vivarafoundation.com';
$secondary_button_text = get_field('secondary_button_text') ?: 'Collaborate on Programs';
$secondary_button_url = get_field('secondary_button_url') ?: 'mailto:programs@vivarafoundation.com';
$site_label = get_field('site_label') ?: 'vivarafoundation.com';
?>
<section class="final-cta" id="contact">
  <div class="final-cta-content">
    <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
    <h2 class="big-title reveal"><?php echo vivara_block_multiline($title); ?></h2>
    <p class="final-cta-sub reveal"><?php echo esc_html($subtitle); ?></p>
    <div class="final-cta-btns reveal">
      <a href="<?php echo esc_url($primary_button_url); ?>" class="btn-hero btn-hero-primary"><?php echo esc_html($primary_button_text); ?></a>
      <a href="<?php echo esc_url($secondary_button_url); ?>" class="btn-hero btn-hero-ghost"><?php echo esc_html($secondary_button_text); ?></a>
    </div>
    <div class="final-cta-site"><?php echo esc_html($site_label); ?></div>
  </div>
</section>
