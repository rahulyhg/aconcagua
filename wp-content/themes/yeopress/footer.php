		</div>
		<footer class="footer">
      <div class="footer__top">
        <div class="footer__newsletter">
          <h2 class="footer__newsletter__title">Suscribite a nuestro newsletter</h2>
          <div class="footer__newsletter__btn">
            <?php mymail_form( $id = 3 ); ?>
          </div>
        </div>

        <div class="footer__sections">
          <h2 class="footer__sections__title">Secciones</h2>
          <ul class="footer__sections__list">
            <li class="footer__sections__list__items"><a href="/hacer">Hacer</a></li>
            <li class="footer__sections__list__items"><a href="/pensar">Pensar</a></li>
            <li class="footer__sections__list__items"><a href="/explorar">Explorar</a></li>
            <li class="footer__sections__list__items"><a href="/cambiar">Cambiar</a></li>
          </ul>
        </div>

        <div class="footer__about">
          <h2 class="footer__about__title">Acerca de Aconcagua</h2>
          <ul class="footer__about__list">
            <li class="footer__about__list__items footer__about__list__items--who"><a href="#">Quiénes Somos</a></li>
            <li class="footer__about__list__items footer__about__list__items--publicity"><a href="#">Publicidad</a></li>
            <li class="footer__about__list__items footer__about__list__items--contact"><a href="#">Contactános</a></li>
          </ul>
        </div>

        <div class="footer__camping">
          <div class="footer__camping__wrapper"></div>
        </div>
      </div>

      <div class="footer__bottom">
        <a href="#" class="footer__bottom__close"></a>
        <div class="footer__bottom__wrapper">
          <div class="footer__bottom__wrapper__left">
            <ul class="footer__who">
              <?php query_posts('category_name=quienes&posts_per_page=3'); ?>
              <?php while ( have_posts() ) : the_post(); ?>
                <li class="footer__who__box">
                  <h2 class="footer__who__box__title"><?php the_title(); ?></h2>
                  <h3 class="footer__who__box__rol"><?php echo get_post_meta($post->ID, 'rol', true); ?></h3>
                  <p class="footer__who__box__desc"><a href="<?php echo get_post_meta($post->ID, 'mail', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'mail', true); ?></a></p>
                  <p class="footer__who__box__desc"><a href="<?php echo get_post_meta($post->ID, 'hash', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'hash', true); ?></a></p>
                </li>
              <?php endwhile; ?>
              <?php wp_reset_query(); ?>
            </ul>
          </div>
          <div class="footer__bottom__wrapper__right">
            <div class="footer__bottom__wrapper__contact">
              <h3 class="footer__bottom__wrapper__contact__title">Escribinos y compartinos tus ideas!</h3>
              <?php insert_cform('contact'); ?>
            </div>
            <div class="footer__bottom__wrapper__publicity">
              <div class="footer__bottom__wrapper__contact-publicity">
                <p class="footer__bottom__wrapper__contact-publicity__description">Contáctese con nuestros<br>asesores comerciales<br>para publicitar en</p>
                <div class="footer__bottom__wrapper__contact-publicity__lg"></div>
              </div>

              <div class="footer__bottom__wrapper__download">
                <p class="footer__bottom__wrapper__download__description">Acceda al Media Kit<br> y conozca los formatos<br> disponibles</p>
                <div class="footer__bottom__wrapper__download__link">
                  <a href="#" target="_blank">Descargar Media Kit</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer__down">
        <p class="footer__down__copyright">Copyright <?= date('Y'); ?> <?php bloginfo('name'); ?></p>
        <div class="footer__down__social">
          <ul class="footer__down__social__list">
            <li class="footer__down__social__list__item footer__down__social__list__item--fb"><a href="https://www.facebook.com/AconcaguaLat" target="_blank"></a></li>
            <li class="footer__down__social__list__item footer__down__social__list__item--tw"><a href="https://twitter.com/AconcaguaLat" target="_blank"></a></li>
            <li class="footer__down__social__list__item footer__down__social__list__item--inst"><a href="https://www.instagram.com/AconcaguaLat/" target="_blank"></a></li>
          </ul>
        </div>
      </div>
		</footer>
		<?php wp_footer() ?>
	</body>
</html>
