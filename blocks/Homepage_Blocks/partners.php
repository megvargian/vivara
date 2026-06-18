<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Partners & Supporters';
$title = get_field('title') ?: "Collective Transformation\nRequires Collective Leadership.";
$subtitle = get_field('subtitle') ?: 'Sustainable impact emerges through shared ownership, not isolated action.';
$image_base_url = trailingslashit(get_template_directory_uri()) . 'inc/assets/images/';
?>
<section class="partners" id="partners">
  <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
  <h2 class="big-title reveal"><?php echo vivara_block_multiline($title); ?></h2>
  <p class="partners-sub reveal"><?php echo esc_html($subtitle); ?></p>
  <div class="partners-grid">
    <article class="partner-profile reveal">
      <div class="partner-photo">
        <img src="<?php echo esc_url($image_base_url . 'Charbel%20Semaan.jpeg'); ?>" alt="Charbel Semaan">
      </div>
      <div class="partner-profile-content">
        <h3 class="partner-profile-name">Charbel Semaan</h3>
      </div>
    </article>
    <article class="partner-profile reveal reveal-delay-1">
      <div class="partner-photo">
        <img src="<?php echo esc_url($image_base_url . 'Fabienne%20Semaan.jpeg'); ?>" alt="Fabienne Semaan">
      </div>
      <div class="partner-profile-content">
        <h3 class="partner-profile-name">Fabienne Semaan</h3>
      </div>
    </article>
    <article class="partner-profile reveal reveal-delay-2">
      <div class="partner-photo">
        <img src="<?php echo esc_url($image_base_url . 'Joy-Semaan-lawyer.jpeg'); ?>" alt="Joy Semaan">
      </div>
      <div class="partner-profile-content">
        <h3 class="partner-profile-name">Joy Semaan</h3>
        <p class="partner-profile-role">Lawyer</p>
      </div>
    </article>
    <article class="partner-profile reveal reveal-delay-3">
      <div class="partner-photo">
        <img src="<?php echo esc_url($image_base_url . 'Maria%20Malek%20%2C%20Senior%20Design%20Consultant.jpeg'); ?>" alt="Maria Malek">
      </div>
      <div class="partner-profile-content">
        <h3 class="partner-profile-name">Maria Malek</h3>
        <p class="partner-profile-role">Senior Design Consultant</p>
      </div>
    </article>
    <article class="partner-profile reveal reveal-delay-4">
      <div class="partner-photo">
        <img src="<?php echo esc_url($image_base_url . 'Pamela%20Semaan%20%2C%20Medical%20Doctor.jpeg'); ?>" alt="Pamela Semaan">
      </div>
      <div class="partner-profile-content">
        <h3 class="partner-profile-name">Pamela Semaan</h3>
        <p class="partner-profile-role">Medical Doctor</p>
      </div>
    </article>
    <article class="partner-profile reveal reveal-delay-5">
      <div class="partner-photo">
        <img src="<?php echo esc_url($image_base_url . 'Richard-Semaan-Senior-Architect.jpeg'); ?>" alt="Richard Semaan">
      </div>
      <div class="partner-profile-content">
        <h3 class="partner-profile-name">Richard Semaan</h3>
        <p class="partner-profile-role">Senior Architect</p>
      </div>
    </article>
  </div>
</section>
