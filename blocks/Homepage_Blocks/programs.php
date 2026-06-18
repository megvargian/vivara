<?php
require_once __DIR__ . '/helpers.php';

$eyebrow = get_field('eyebrow') ?: 'Programs & Action Areas';
$title = get_field('title') ?: "From Mission\nto Action.";
$tabs = get_field('tabs') ?: array(
    array('label' => 'Mission', 'target' => '#mission'),
    array('label' => 'Pillars', 'target' => '#pillars'),
    array('label' => 'Programs', 'target' => '#programs'),
    array('label' => 'Founders', 'target' => '#founders'),
    array('label' => 'Impact', 'target' => '#impact'),
    array('label' => 'Partners', 'target' => '#partners'),
);
$items = get_field('items') ?: array(
    array('number' => '01', 'title' => 'Leadership & Governance Labs', 'description' => 'Cultivating ethical, adaptive leadership across generations — from university students to professionals contributing to public and institutional life.'),
    array('number' => '02', 'title' => 'Dialogue for Peace & Reconciliation', 'description' => "Structured platforms for participation, exchange, and public discourse — creating the trust infrastructure Lebanon's civic renewal depends on."),
    array('number' => '03', 'title' => 'Equal Opportunity Pathways', 'description' => 'Mentorship, networking, and employability support connecting fresh graduates with companies, internships, and career pathways they genuinely deserve.'),
    array('number' => '04', 'title' => 'Sports for Cohesion & Inclusion', 'description' => 'Using sports as a structured tool for discipline, unity, and resilience — building social connection across communities and breaking barriers to inclusion.'),
    array('number' => '05', 'title' => 'Diaspora & Return Initiatives', 'description' => 'Future-facing programs encouraging Lebanese expats to return, mentor, invest, and create opportunities locally — turning brain drain into national renewal.'),
);
?>
<section class="programs" id="programs">
  <div class="eyebrow reveal"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
  <h2 class="big-title reveal"><?php echo vivara_block_multiline($title); ?></h2>
  <div class="content-tabs reveal reveal-delay-1" aria-label="Section tabs">
    <?php foreach ($tabs as $tab) : ?>
      <a class="tab-link" href="<?php echo esc_attr(vivara_block_value($tab, 'target', '#')); ?>"><?php echo esc_html(vivara_block_value($tab, 'label')); ?></a>
    <?php endforeach; ?>
  </div>
  <div class="programs-list">
    <?php foreach ($items as $index => $item) : ?>
      <div class="prog-item <?php echo esc_attr(vivara_block_reveal_class(min($index + 1, 5))); ?>">
        <div class="prog-num"><?php echo esc_html(vivara_block_value($item, 'number')); ?></div>
        <div class="prog-content">
          <div class="prog-title"><?php echo esc_html(vivara_block_value($item, 'title')); ?></div>
          <p class="prog-desc"><?php echo esc_html(vivara_block_value($item, 'description')); ?></p>
        </div>
        <div class="prog-arrow">→</div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
