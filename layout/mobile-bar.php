<nav class="mobile-bar">
  <a href="" class="mobile-bar__link mobile-bar__link--home">
    <div class="mobile-bar__icon">
      <?php get_template_part('assets/svg/home'); ?>
    </div>
    Portada
  </a>
  <a href="#" onclick="$('.nav-oculto').toggleClass('nav-oculto-active');$('.btn-mobile').toggleClass('btn-mobile-active');" class="mobile-bar__link mobile-bar__link--search btn-mobile">
    <div class="mobile-bar__icon">
      <?php get_template_part('assets/svg/search'); ?>
    </div>
    Buscar
  </a>
</nav>
