<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Generations Equality & Civic Empowerment · Lebanon';
$title = get_field('title') ?: "EMPOWER\nCREATE\nCHANGE.";
$description = get_field('description') ?: "Vivara Foundation works at the intersection of education, leadership, and civic transformation — giving Lebanon's generations the voice, access, and opportunity to shape what comes next.";
$primary_button_text = get_field('primary_button_text') ?: 'Get Involved';
$primary_button_url = get_field('primary_button_url') ?: '#contact';
$secondary_button_text = get_field('secondary_button_text') ?: 'Discover Vivara';
$secondary_button_url = get_field('secondary_button_url') ?: '#mission';
$scroll_label = get_field('scroll_label') ?: 'Scroll';
?>
<section class="hero" id="home">
  <div class="hero-canvas">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
  </div>
  <div class="hero-grid"></div>
  <div class="hero-diag"></div>
  <div class="hero-content">
    <div class="hero-eyebrow">
      <div class="hero-eyebrow-line"></div>
      <?php echo esc_html($eyebrow); ?>
    </div>
    <h1 class="hero-h1"><?php echo vivara_block_multiline($title); ?></h1>
    <div class="hero-bottom">
      <p class="hero-desc"><?php echo esc_html($description); ?></p>
      <div class="hero-actions">
        <a href="<?php echo esc_url($primary_button_url); ?>" class="btn-hero btn-hero-primary"><?php echo esc_html($primary_button_text); ?> <span class="btn-arrow">→</span></a>
        <a href="<?php echo esc_url($secondary_button_url); ?>" class="btn-hero btn-hero-ghost"><?php echo esc_html($secondary_button_text); ?></a>
      </div>
    </div>
  </div>
  <div class="hero-scroll-indicator">
    <div class="scroll-track"></div>
    <div class="scroll-label"><?php echo esc_html($scroll_label); ?></div>
  </div>
</section>
