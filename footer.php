<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!-- FOOTER -->
<footer>
  <a href="#" class="nav-logo" style="text-decoration:none;">
    <img class="nav-logo-image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/vivara_logo_white.png' ); ?>" alt="Vivara Foundation">
  </a>
  <ul class="footer-links">
    <li><a href="#mission">Mission</a></li>
    <li><a href="#pillars">Pillars</a></li>
    <li><a href="#programs">Programs</a></li>
    <li><a href="#founders">Founders</a></li>
    <li><a href="#impact">Impact</a></li>
    <li><a href="#partners">Partners</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
  <div class="footer-meta" style="text-align:right;">
    <div class="footer-statement">We do not respond to change. We help design it.</div>
    <div class="footer-copy" style="margin-top:4px;">© 2025 Vivara Foundation. All rights reserved.</div>
  </div>
</footer>

<script>
// Custom cursor
const cursor = document.getElementById('cursor');
const ring = document.getElementById('cursorRing');
if (cursor && ring) {
  let mx=0,my=0,rx=0,ry=0;
  document.addEventListener('mousemove', e => { mx=e.clientX; my=e.clientY; cursor.style.left=mx+'px'; cursor.style.top=my+'px'; });
  function animRing(){ rx+=(mx-rx)*0.12; ry+=(my-ry)*0.12; ring.style.left=rx+'px'; ring.style.top=ry+'px'; requestAnimationFrame(animRing); }
  animRing();
  document.querySelectorAll('a,button').forEach(el => {
    el.addEventListener('mouseenter',()=>{ cursor.style.width='18px'; cursor.style.height='18px'; ring.style.width='56px'; ring.style.height='56px'; });
    el.addEventListener('mouseleave',()=>{ cursor.style.width='10px'; cursor.style.height='10px'; ring.style.width='36px'; ring.style.height='36px'; });
  });
}

// Nav scroll
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', ()=>{ navbar.classList.toggle('scrolled', window.scrollY > 60); });

// Scroll reveal
const revealEls = document.querySelectorAll('.reveal');
const observer = new IntersectionObserver(entries => {
  entries.forEach(e => { if(e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); } });
}, { threshold: 0.12 });
revealEls.forEach(el => observer.observe(el));
</script>
<?php wp_footer(); ?>
</body>
</html>