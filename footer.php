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
    <div class="nav-logo-text">
      <div class="nav-logo-vivara">VIV<span class="cedar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 26" style="height:0.8em;width:auto;margin:0 2px;"><rect x="5.5" y="20" width="3" height="5" rx="1" fill="#03914D"/><path d="M0.5 20 Q7 14 13.5 20Z" fill="#03914D"/><path d="M2 15.5 Q7 9.5 12 15.5Z" fill="#03914D"/><path d="M3.5 11 Q7 5.5 10.5 11Z" fill="#03914D"/><path d="M5 7 Q7 2.5 9 7Z" fill="#03914D"/><circle cx="7" cy="1.5" r="1.2" fill="#03914D"/></svg></span>RA</div>
      <div class="nav-logo-foundation">Foundation</div>
    </div>
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
  <div style="text-align:right;">
    <div class="footer-statement">We do not respond to change. We help design it.</div>
    <div class="footer-copy" style="margin-top:4px;">© 2025 Vivara Foundation. All rights reserved.</div>
  </div>
</footer>

<script>
// Custom cursor
const cursor = document.getElementById('cursor');
const ring = document.getElementById('cursorRing');
let mx=0,my=0,rx=0,ry=0;
document.addEventListener('mousemove', e => { mx=e.clientX; my=e.clientY; cursor.style.left=mx+'px'; cursor.style.top=my+'px'; });
function animRing(){ rx+=(mx-rx)*0.12; ry+=(my-ry)*0.12; ring.style.left=rx+'px'; ring.style.top=ry+'px'; requestAnimationFrame(animRing); }
animRing();
document.querySelectorAll('a,button').forEach(el => {
  el.addEventListener('mouseenter',()=>{ cursor.style.width='18px'; cursor.style.height='18px'; ring.style.width='56px'; ring.style.height='56px'; });
  el.addEventListener('mouseleave',()=>{ cursor.style.width='10px'; cursor.style.height='10px'; ring.style.width='36px'; ring.style.height='36px'; });
});

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