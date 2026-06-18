<?php
require_once __DIR__ . '/helpers.php';

$items = get_field('items');
if (!$items) {
    $items = array(
        array('text' => 'Generations Equality'),
        array('text' => 'Civic Empowerment'),
        array('text' => 'Fresh Graduate Access'),
        array('text' => 'Diaspora Return'),
        array('text' => 'Leadership Development'),
        array('text' => 'Empower · Create · Change'),
    );
}
?>
<div class="ticker" aria-hidden="true">
  <div class="ticker-inner">
    <?php foreach ($items as $item) : ?>
      <div class="ticker-item"><span class="ticker-dot"></span> <?php echo esc_html(vivara_block_value($item, 'text')); ?></div>
    <?php endforeach; ?>
    <?php foreach ($items as $item) : ?>
      <div class="ticker-item"><span class="ticker-dot"></span> <?php echo esc_html(vivara_block_value($item, 'text')); ?></div>
    <?php endforeach; ?>
  </div>
</div>
