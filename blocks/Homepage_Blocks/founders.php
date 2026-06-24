<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Founders';
$title = get_field('title') ?: "The People\nBehind Vivara.";
$subtitle = get_field('subtitle') ?: "Meet the people behind Vivara's network of leadership, expertise, and long-term support.";
$image_base_url = trailingslashit(get_template_directory_uri()) . 'inc/assets/images/';
$founder_profiles = get_field('profiles') ?: array(
    array('name' => 'Charbel Semaan', 'bio' => '', 'photo' => $image_base_url .'Charbel%20Semaan.jpeg'),
    array('name' => 'Fabienne Semaan', 'bio' => '', 'photo' => $image_base_url .'Fabienne%20Semaan.jpeg'),
    array('name' => 'Joy Semaan', 'bio' => 'Lawyer', 'photo' => $image_base_url .'Joy-Semaan-lawyer.jpeg'),
    array('name' => 'Maria Malek', 'bio' => 'Senior Design Consultant', 'photo' => $image_base_url .'Maria%20Malek%20%2C%20Senior%20Design%20Consultant.jpeg'),
    array('name' => 'Pamela Semaan', 'bio' => 'Medical Doctor', 'photo' => $image_base_url .'Pamela%20Semaan%20%2C%20Medical%20Doctor.jpeg'),
    array('name' => 'Richard Semaan', 'bio' => 'Senior Architect', 'photo' => $image_base_url .'Richard-Semaan-Senior-Architect.jpeg'),
);
?>
<section class="founders" id="founders">
  <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
  <h2 class="big-title reveal"><?php echo $title; ?></h2>
  <p class="founders-sub reveal reveal-delay-1"><?php echo esc_html($subtitle); ?></p>
  <div class="founders-grid">
    <?php foreach ($founder_profiles as $index => $profile) : ?>
    <article class="founder-profile reveal reveal-delay-<?php echo $index; ?>">
      <div class="founder-photo">
        <img src="<?php echo esc_url($profile['photo']); ?>" alt="<?php echo esc_attr($profile['name']); ?>">
      </div>
      <div class="founder-profile-content">
        <h3 class="founder-profile-name"><?php echo esc_html($profile['name']); ?></h3>
        <?php if (!empty($profile['bio'])) : ?>
          <p class="founder-profile-bio"><?php echo esc_html($profile['bio']); ?></p>
        <?php endif; ?>
      </div>
    </article>
    <?php endforeach; ?>
  </div>
</section>
