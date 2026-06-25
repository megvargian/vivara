<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Diplomacy & Collaboration';
$title = get_field('title') ?: "Engagements &\nPartnerships.";
$subtitle = get_field('subtitle') ?: "Vivara's founder, Gistelle Semaan, actively engages with embassies, international organizations, and humanitarian partners - building the relationships that turn vision into systemic, cross-border impact.";
$all_label = get_field('all_label') ?: 'All';
$embassy_label = get_field('embassy_label') ?: 'Embassies';
$ngo_label = get_field('ngo_label') ?: 'Organizations';
$humanitarian_label = get_field('humanitarian_label') ?: 'Humanitarian';

$embassy_cards = get_field('embassy_cards') ?: array(
    array(
        'badge' => 'Embassy',
        'partner' => 'Diplomatic Mission',
        'title' => 'Strategic Embassy Dialogue',
        'description' => 'Diplomatic engagement focused on policy collaboration, youth access, and civic inclusion pathways.',
        'meta_1' => 'Beirut',
        'meta_2' => 'Official Meeting',
    ),
);

$ngo_cards = get_field('ngo_cards') ?: array(
    array(
        'badge' => 'Organization',
        'partner' => 'International Institution',
        'title' => 'Cross-Sector Program Alignment',
        'description' => 'Program planning and institutional coordination designed to scale equal opportunity initiatives.',
        'meta_1' => 'Partnership',
        'meta_2' => 'Program Design',
    ),
);

$humanitarian_cards = get_field('humanitarian_cards') ?: array(
    array(
        'badge' => 'Humanitarian',
        'partner' => 'Aid Partner',
        'title' => 'Community-Centered Coordination',
        'description' => 'Humanitarian collaboration grounded in practical delivery, trust-building, and local impact systems.',
        'meta_1' => 'Field Support',
        'meta_2' => 'Community Impact',
    ),
);

$section_anchor = !empty($block['anchor']) ? $block['anchor'] : 'engagements';
$section_id = $section_anchor . '-' . substr(md5(serialize($block)), 0, 8);
$total_count = count($embassy_cards) + count($ngo_cards) + count($humanitarian_cards);

$render_cards = function ($cards, $category_class, $category_label, $grid_id) {
    ?>
    <div class="veng-category" data-cat="<?php echo esc_attr($category_class); ?>">
      <div class="veng-cat-label"><?php echo esc_html($category_label); ?></div>
      <div class="veng-grid" id="<?php echo esc_attr($grid_id); ?>">
        <?php foreach ($cards as $card) :
          $image = vivara_block_value($card, 'image');
          $image_url = '';

          if (is_array($image) && !empty($image['url'])) {
              $image_url = $image['url'];
          } elseif (is_string($image) && $image !== '') {
              $image_url = $image;
          }
        ?>
          <article class="veng-card">
            <div class="veng-media">
              <span class="veng-badge badge-<?php echo esc_attr($category_class); ?>"><?php echo esc_html(vivara_block_value($card, 'badge')); ?></span>
              <?php if ($image_url !== '') : ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr(vivara_block_value($card, 'title')); ?>">
              <?php else : ?>
                <div class="veng-placeholder">
                  <span>Image Pending</span>
                </div>
              <?php endif; ?>
            </div>
            <div class="veng-body">
              <div class="veng-partner"><?php echo esc_html(vivara_block_value($card, 'partner')); ?></div>
              <h3 class="veng-card-title"><?php echo esc_html(vivara_block_value($card, 'title')); ?></h3>
              <p class="veng-desc"><?php echo esc_html(vivara_block_value($card, 'description')); ?></p>
              <div class="veng-meta">
                <?php if (vivara_block_value($card, 'meta_1') !== '') : ?>
                  <div class="veng-meta-item"><?php echo esc_html(vivara_block_value($card, 'meta_1')); ?></div>
                <?php endif; ?>
                <?php if (vivara_block_value($card, 'meta_2') !== '') : ?>
                  <div class="veng-meta-item"><?php echo esc_html(vivara_block_value($card, 'meta_2')); ?></div>
                <?php endif; ?>
              </div>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
    <?php
};
?>
<section class="veng-section" id="<?php echo esc_attr($section_anchor); ?>" data-veng-root="<?php echo esc_attr($section_id); ?>">
  <div class="veng-inner">
    <div class="veng-eyebrow"><?php echo esc_html($eyebrow); ?></div>
    <h2 class="veng-title"><?php echo vivara_block_multiline($title); ?></h2>
    <p class="veng-sub"><?php echo esc_html($subtitle); ?></p>

    <div class="veng-tabs">
      <button class="veng-tab active" type="button" data-veng-btn="all" data-veng-target="<?php echo esc_attr($section_id); ?>">
        <?php echo esc_html($all_label); ?>
        <span class="veng-tab-count"><?php echo esc_html($total_count); ?></span>
      </button>
      <button class="veng-tab" type="button" data-veng-btn="embassy" data-veng-target="<?php echo esc_attr($section_id); ?>">
        <?php echo esc_html($embassy_label); ?>
        <span class="veng-tab-count"><?php echo esc_html(count($embassy_cards)); ?></span>
      </button>
      <button class="veng-tab" type="button" data-veng-btn="ngo" data-veng-target="<?php echo esc_attr($section_id); ?>">
        <?php echo esc_html($ngo_label); ?>
        <span class="veng-tab-count"><?php echo esc_html(count($ngo_cards)); ?></span>
      </button>
      <button class="veng-tab" type="button" data-veng-btn="humanitarian" data-veng-target="<?php echo esc_attr($section_id); ?>">
        <?php echo esc_html($humanitarian_label); ?>
        <span class="veng-tab-count"><?php echo esc_html(count($humanitarian_cards)); ?></span>
      </button>
    </div>

    <?php $render_cards($embassy_cards, 'embassy', $embassy_label, $section_id . '-embassy'); ?>
    <?php $render_cards($ngo_cards, 'ngo', $ngo_label, $section_id . '-ngo'); ?>
    <?php $render_cards($humanitarian_cards, 'humanitarian', $humanitarian_label, $section_id . '-humanitarian'); ?>
  </div>
</section>

<script>
(function () {
  var root = document.querySelector('[data-veng-root="<?php echo esc_js($section_id); ?>"]');
  if (!root) {
    return;
  }

  var buttons = root.querySelectorAll('[data-veng-btn]');
  var categories = root.querySelectorAll('.veng-category');

  function setCategory(cat) {
    categories.forEach(function (category) {
      if (cat === 'all' || category.getAttribute('data-cat') === cat) {
        category.classList.remove('hidden');
      } else {
        category.classList.add('hidden');
      }
    });

    buttons.forEach(function (button) {
      if (button.getAttribute('data-veng-btn') === cat) {
        button.classList.add('active');
      } else {
        button.classList.remove('active');
      }
    });
  }

  buttons.forEach(function (button) {
    button.addEventListener('click', function () {
      setCategory(button.getAttribute('data-veng-btn'));
    });
  });

  setCategory('all');
})();
</script>
