<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Vivara Foundation — Empower · Create · Change</title>
<?php wp_head(); ?>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Mukta+Malar:wght@300;400;600;700;800&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300&display=swap" rel="stylesheet">
</head>
<body <?php body_class(); ?>>

<!-- WordPress handoff note: Sections are organized with clear IDs and reusable cards. Text, images, tabs, program rows, partner cards, and founder profiles can be added, deleted, or edited in WordPress content blocks without changing the visual design. -->

<!-- CURSOR -->
<div class="cursor" id="cursor"></div>
<div class="cursor-ring" id="cursorRing"></div>

<!-- NAV -->
<nav id="navbar">
  <a href="#" class="nav-logo">
    <img class="nav-logo-image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/vivara_logo_white.png' ); ?>" alt="Vivara Foundation">
  </a>
  <ul class="nav-links">
    <li><a href="#mission">Mission</a></li>
    <li><a href="#pillars">Pillars</a></li>
    <li><a href="#programs">Programs</a></li>
    <li><a href="#founders">Founders</a></li>
    <li><a href="#impact">Impact</a></li>
    <li><a href="#partners">Partners</a></li>
    <li><a href="#contact" class="nav-cta">Get Involved</a></li>
  </ul>
</nav>