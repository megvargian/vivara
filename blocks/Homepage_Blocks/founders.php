<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Founders';
$title = get_field('title') ?: "The People\nBehind Vivara.";
$subtitle = get_field('subtitle') ?: "Meet the people behind Vivara's network of leadership, expertise, and long-term support.";
$image_base_url = trailingslashit(get_template_directory_uri()) . 'inc/assets/images/';
?>
<section class="founders" id="founders">
  <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
  <h2 class="big-title reveal"><?php echo vivara_block_multiline($title); ?></h2>
  <p class="founders-sub reveal reveal-delay-1"><?php echo esc_html($subtitle); ?></p>
  <div class="founders-grid">
    <article class="founder-profile reveal">
      <div class="founder-photo">
        <img src="<?php echo esc_url($image_base_url . 'Charbel%20Semaan.jpeg'); ?>" alt="Charbel Semaan">
      </div>
      <div class="founder-profile-content">
        <h3 class="founder-profile-name">Charbel Semaan</h3>
      </div>
    </article>
    <article class="founder-profile reveal reveal-delay-1">
      <div class="founder-photo">
        <img src="<?php echo esc_url($image_base_url . 'Fabienne%20Semaan.jpeg'); ?>" alt="Fabienne Semaan">
      </div>
      <div class="founder-profile-content">
        <h3 class="founder-profile-name">Fabienne Semaan</h3>
      </div>
    </article>
    <article class="founder-profile reveal reveal-delay-2">
      <div class="founder-photo">
        <img src="<?php echo esc_url($image_base_url . 'Joy-Semaan-lawyer.jpeg'); ?>" alt="Joy Semaan">
      </div>
      <div class="founder-profile-content">
        <h3 class="founder-profile-name">Joy Semaan</h3>
        <p class="founder-profile-bio">Lawyer</p>
      </div>
    </article>
    <article class="founder-profile reveal reveal-delay-3">
      <div class="founder-photo">
        <img src="<?php echo esc_url($image_base_url . 'Maria%20Malek%20%2C%20Senior%20Design%20Consultant.jpeg'); ?>" alt="Maria Malek">
      </div>
      <div class="founder-profile-content">
        <h3 class="founder-profile-name">Maria Malek</h3>
        <p class="founder-profile-bio">Senior Design Consultant</p>
      </div>
    </article>
    <article class="founder-profile reveal reveal-delay-4">
      <div class="founder-photo">
        <img src="<?php echo esc_url($image_base_url . 'Pamela%20Semaan%20%2C%20Medical%20Doctor.jpeg'); ?>" alt="Pamela Semaan">
      </div>
      <div class="founder-profile-content">
        <h3 class="founder-profile-name">Pamela Semaan</h3>
        <p class="founder-profile-bio">Medical Doctor</p>
      </div>
    </article>
    <article class="founder-profile reveal reveal-delay-5">
      <div class="founder-photo">
        <img src="<?php echo esc_url($image_base_url . 'Richard-Semaan-Senior-Architect.jpeg'); ?>" alt="Richard Semaan">
      </div>
      <div class="founder-profile-content">
        <h3 class="founder-profile-name">Richard Semaan</h3>
        <p class="founder-profile-bio">Senior Architect</p>
      </div>
    </article>
  </div>
</section>
