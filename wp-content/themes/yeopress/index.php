<?php get_header() ?>
<section class="herospace">
  <?php query_posts('category_name=herospace'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="herospace__wrapper" style="background-image: url('/aconcagua/wp-content/themes/yeopress/images/herospace.jpg')">
        <span class="herospace__category"><?php echo get_post_meta($post->ID, 'category', true); ?></span>
        <div class="herospace__data">
          <span class="herospace__data__category"><?php echo get_post_meta($post->ID, 'category', true); ?></span>
          <h2 class="herospace__data__title"><?php the_title() ?></h2>
          <p class="herospace__data__description"><?php the_content() ?></p>
          <small class="herospace__data__author">Por <?php echo get_post_meta($post->ID, 'writter', true); ?></small>
        </div>
      </div>
    <?php endwhile; endif; ?>

  <div class="herospace__dots">
    <div class="herospace__dots__actions">
      <div class="herospace__dots__actions__current">01</div>
      <div class="herospace__dots__actions__total">03</div>
    </div>
    <a href="" class="herospace__dots__btn herospace__dots__prev herospace__dots__btn--inactive"></a>
    <a href="" class="herospace__dots__btn herospace__dots__next"></a>
  </div>
</section>

<section class="herospace-slider">
  <div class="herospace-slider__mobile">
    <ul class="herospace-slider__mobile__list">
      <li class="herospace-slider__mobile__list__item">
        <div class="herospace-slider__mobile__box">
          <span class="herospace-slider__mobile__box__category">Explorar</span>
          <h3 class="herospace-slider__mobile__box__title">Trump, paredón y después</h3>
          <small class="herospace-slider__mobile__box__author">Por Leonardo Volpe</small>
        </div>
      </li>
    </ul>

    <div class="herospace-slider__mobile__dots">
      <a href="#" class="herospace-slider__mobile__dots__link"></a>
      <a href="#" class="herospace-slider__mobile__dots__link herospace-slider__mobile__dots__link--active"></a>
      <a href="#" class="herospace-slider__mobile__dots__link"></a>
    </div>
  </div>
</section>

<?php query_posts('category_name=herospace-secondary&posts_per_page=3'); ?>
  <?php if ( have_posts() ) { ?>
    <section class="herospace-articles">
      <?php while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="herospace-slider__mobile__box">
          <span class="herospace-slider__mobile__box__category"><?php echo get_post_meta($post->ID, 'category', true); ?></span>
          <h3 class="herospace-slider__mobile__box__title"><?php the_title() ?></h3>
          <small class="herospace-slider__mobile__box__author">Por <?php echo get_post_meta($post->ID, 'writter', true); ?></small>
        </a>
      <?php endwhile; ?>
      <div class="herospace-banner"></div>
    </section>
<?php } ?>

<section class="change">
  <?php query_posts('category_name=herospace-think'); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="change__wrapper">
        <span class="change__category"><?php echo get_post_meta($post->ID, 'category', true); ?></span>
        <div class="change__data">
          <span class="change__data__category"><?php echo get_post_meta($post->ID, 'category', true); ?></span>
          <h2 class="change__data__title"><?php the_title() ?></h2>
          <p class="change__data__description"><?php the_excerpt() ?></p>
          <small class="change__data__author">Por <?php echo get_post_meta($post->ID, 'writter', true); ?></small>
        </div>
      </div>
  <?php endwhile; endif; ?>
  <div class="change__dots">
    <div class="change__dots__actions">
      <div class="change__dots__actions__current">01</div>
      <div class="change__dots__actions__total">03</div>
    </div>
    <a href="" class="change__dots__btn change__dots__prev herospace__dots__btn--inactive"></a>
    <a href="" class="change__dots__btn change__dots__next"></a>
  </div>
</section>

<section class="change-slider">
  <div class="change-slider__mobile">
    <ul class="change-slider__mobile__list">
      <li class="change-slider__mobile__list__item">
        <div class="change-slider__mobile__box">
          <span class="change-slider__mobile__box__category">Carreras Verdes</span>
          <big class="change-slider__mobile__box__time">Hace 3 min</big>
          <div class="change-slider__mobile__box__extra">
            <p class="change-slider__mobile__box__extra__text">Las "carreras verdes" pican en punta: el sector atraerá inversiones por más de...</p>
          </div>
        </div>
      </li>
    </ul>

    <div class="change-slider__mobile__dots">
      <a href="#" class="change-slider__mobile__dots__link"></a>
      <a href="#" class="change-slider__mobile__dots__link change-slider__mobile__dots__link--active"></a>
      <a href="#" class="change-slider__mobile__dots__link"></a>
    </div>
  </div>
</section>

<section class="change-articles">
  <div class="change-slider__mobile__box">
    <span class="change-slider__mobile__box__category">Carreras Verdes</span>
    <big class="change-slider__mobile__box__time">Hace 3 min</big>
    <div class="change-slider__mobile__box__extra">
      <p class="change-slider__mobile__box__extra__text">Las "carreras verdes" pican en punta: el sector atraerá inversiones por más de...</p>
    </div>
  </div>
  <div class="change-slider__mobile__box">
    <span class="change-slider__mobile__box__category">Carreras Verdes</span>
    <big class="change-slider__mobile__box__time">Hace 3 min</big>
    <div class="change-slider__mobile__box__extra">
      <p class="change-slider__mobile__box__extra__text">Las "carreras verdes" pican en punta: el sector atraerá inversiones por más de...</p>
    </div>
  </div>
  <div class="change-slider__mobile__box">
    <span class="change-slider__mobile__box__category">Carreras Verdes</span>
    <big class="change-slider__mobile__box__time">Hace 3 min</big>
    <div class="change-slider__mobile__box__extra">
      <p class="change-slider__mobile__box__extra__text">Las "carreras verdes" pican en punta: el sector atraerá inversiones por más de...</p>
    </div>
  </div>
  <div class="change-slider__mobile__box">
    <span class="change-slider__mobile__box__category">Carreras Verdes</span>
    <big class="change-slider__mobile__box__time">Hace 3 min</big>
    <div class="change-slider__mobile__box__extra">
      <p class="change-slider__mobile__box__extra__text">Las "carreras verdes" pican en punta: el sector atraerá inversiones por más de...</p>
    </div>
  </div>
</section>

<section class="camping">
  <div class="camping__mobile">
    <div class="camping__mobile__header">
      <div class="camping__mobile__header__content">
        <h3 class="camping__mobile__header__title">Camping</h3>
        <p class="camping__mobile__header__description">Periodismo positivo, contenidos inspiradores, información para vivir mejor. En tu día de descanso, lo mejor de Aconcagua en la palma de tu mano. </p>
      </div>
    </div>
    <div class="camping__mobile__wrapper">
      <p class="camping__mobile__wrapper__text">Se parte de nuestra comunidad y participá de foros actividades únicas!</p>
    </div>
    <div class="camping__mobile__email">
      <input class="camping__mobile__email__text" type="text">
      <button class="camping__mobile__email__submit"></submit>
    </div>
  </div>

  <div class="camping__desktop">
    <div class="camping__desktop__content">
      <h3 class="camping__desktop__content__title">Camping</h3>
      <p class="camping__desktop__content__description">Periodismo positivo, contenidos inspiradores, información para vivir mejor. En tu día de descanso, lo mejor de Aconcagua en la palma de tu mano. </p>
    </div>
    <div class="camping__desktop__data">
      <p class="camping__desktop__data__text">Se parte de nuestra comunidad y participa de foros actividades únicas!</p>
      <div class="camping__desktop__data__input">
        <?php mymail_form( $id = 1 ) ?>
      </div>
    </div>
  </div>
</section>

  <section class="banner banner--bottom">
    <?php wp_banner_manager(1);?>
  </section>

<section class="news">
  <div class="news__content">
    <div class="news__content__box">
      <div class="news__content__box__image" style="background-image: url('/aconcagua/wp-content/themes/yeopress/images/news.jpg')"></div>
      <div class="news__content__box__data">
        <h3 class="news__content__box__data__title">El rey regresa a su selva</h3>
        <p class="news__content__box__data__description">Un proyecto ecologista busca reintroducir al mítico yaguareté en los Esteros del Iberá para devolver el equilibrio al ecosistema del noroeste del del país.</p>
        <span class="news__content__box__data__author">Por Guillermo Alduncin</span>
      </div>
    </div>

    <div class="news__dots">
      <div class="news__dots__actions">
        <div class="news__dots__actions__current">01</div>
        <div class="news__dots__actions__total">03</div>
      </div>
      <a href="" class="news__dots__btn news__dots__prev herospace__dots__btn--inactive"></a>
      <a href="" class="news__dots__btn news__dots__next"></a>
    </div>
  </div>
</section>

<section class="domingo">
  <div class="domingo__mobile">
    <div class="domingo__mobile__header">
      <div class="domingo__mobile__header__content">
        <h3 class="domingo__mobile__header__title">Domingo</h3>
        <p class="domingo__mobile__header__description">Periodismo positivo, contenidos inspiradores, información para vivir mejor. En tu día de descanso, lo mejor de Aconcagua en la palma de tu mano.</p>
      </div>
    </div>
    <div class="domingo__mobile__wrapper">
      <p class="domingo__mobile__wrapper__text">Suscribite a nuestro newsletter y recibí noticias sustentables pensadas para vos</p>
    </div>
    <div class="domingo__mobile__email">
      <input class="domingo__mobile__email__text" type="text">
      <button class="domingo__mobile__email__submit"></submit>
    </div>
  </div>

  <div class="domingo__desktop">
    <div class="domingo__desktop__content">
      <h3 class="domingo__desktop__content__title">Domingo</h3>
      <p class="domingo__desktop__content__description">Periodismo positivo, contenidos inspiradores, información para vivir mejor. En tu día de descanso, lo mejor de Aconcagua.</p>
    </div>
    <div class="domingo__desktop__data">
      <p class="domingo__desktop__data__text">Se parte de nuestra comunidad y participa de foros actividades únicas!</p>
      <div class="domingo__desktop__data__input">
      </div>
    </div>
  </div>
</section>

<section class="banner banner--bottom">
  <?php wp_banner_manager(2);?>
</section>
<!-- <div id="page-content">
	<?php get_template_part('loop', 'index') ?>
</div> -->
<!-- <?php get_sidebar() ?> -->
<?php get_footer() ?>
