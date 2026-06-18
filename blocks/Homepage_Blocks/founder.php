<?php
require_once __DIR__ . '/helpers.php';

$image = get_field('image');
$name = get_field('name') ?: 'Gistelle Semaan';
$role = get_field('role') ?: 'President & Founder · Vivara Foundation';
$eyebrow = get_field('eyebrow') ?: 'Founder Vision';
$title = get_field('title') ?: 'From Generational Engagement to National Change.';
$quote = get_field('quote') ?: '"We do not respond to change. We help design it."';
$body = get_field('body') ?: 'Vivara Foundation is built on the belief that societies evolve through coordinated action — across generations, institutions, and sectors. Through education, leadership, and civic engagement, we are creating the infrastructure for a more equal, more inclusive Lebanon.';
$button_text = get_field('button_text') ?: 'Partner With Vivara';
$button_url = get_field('button_url') ?: '#contact';
?>
<section class="founder" id="about">
  <div class="founder-left founder-media reveal" style="padding:0;overflow:hidden;position:relative;min-height:640px;">
    <?php if ($image) : ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?: $name); ?>" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center top;display:block;"/>
    <?php endif; ?>
    <div style="position:absolute;inset:0;background:linear-gradient(to top, rgba(8,12,26,0.92) 0%, rgba(8,12,26,0.5) 45%, transparent 70%);z-index:1;"></div>
    <div style="position:absolute;top:0;bottom:0;right:0;width:1px;background:linear-gradient(to bottom,transparent,rgba(3,145,77,0.6),transparent);z-index:2;"></div>
    <div class="founder-caption" style="position:absolute;bottom:0;left:0;right:0;padding:40px 48px;z-index:3;">
      <div class="founder-caption-name" style="font-family:'Bebas Neue',sans-serif;font-size:32px;color:white;letter-spacing:0.06em;line-height:1;"><?php echo esc_html($name); ?></div>
      <div class="founder-caption-role" style="font-size:10px;font-weight:700;letter-spacing:0.22em;text-transform:uppercase;color:#03914D;margin-top:6px;"><?php echo esc_html($role); ?></div>
    </div>
  </div>
  <div class="founder-right reveal reveal-delay-2">
    <div class="eyebrow"><div class="eyebrow-line"></div><?php echo esc_html($eyebrow); ?></div>
    <h2 class="big-title"><?php echo esc_html($title); ?></h2>
    <div class="founder-quote-callout" style="font-family:'Mukta Malar',sans-serif;font-size:20px;font-weight:700;font-style:italic;line-height:1.45;color:rgba(255,255,255,0.85);border-left:3px solid #03914D;padding-left:20px;margin:24px 0;"><?php echo esc_html($quote); ?></div>
    <p class="founder-body"><?php echo esc_html($body); ?></p>
    <a href="<?php echo esc_url($button_url); ?>" class="btn-hero btn-hero-primary"><?php echo esc_html($button_text); ?> <span class="btn-arrow">→</span></a>
  </div>
</section>
