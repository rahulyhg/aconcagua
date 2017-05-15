<?php get_header() ?>
<section class="herospace">
  <?php query_posts('category_name=herospace'); ?>
  <div class="herospace__container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="herospace__wrapper herospace__wrapper--hover" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
        <span class="herospace__category">
          <?php
            $cat = new WPSEO_Primary_Term('category', get_the_ID());
            $cat = $cat->get_primary_term();
            $catName = get_cat_name($cat);
            $catLink = get_category_link($cat);
            echo $catName;
          ?>
        </span>
        <div class="herospace__data">
          <span class="herospace__data__category">
            <?php
              $cat = new WPSEO_Primary_Term('category', get_the_ID());
              $cat = $cat->get_primary_term();
              $catName = get_cat_name($cat);
              $catLink = get_category_link($cat);
              echo $catName;
            ?>
          </span>
          <a href="<?php the_permalink(); ?>" class="herospace__data__title"><?php the_title() ?></a>
          <a href="<?php the_permalink(); ?>" class="herospace__data__description"><?php dynamic_excerpt2('210') ?></a>
          <small class="herospace__data__author">Por <?php the_author(); ?></small>
        </div>
      </div>
    <?php endwhile; endif; ?>
  </div>

  <div class="herospace__dots">
    <div class="herospace__dots__actions">
      <div class="herospace__dots__actions__current">01</div>
      <div class="herospace__dots__actions__total"></div>
    </div>
  </div>
</section>

<section class="herospace-slider">
  <div class="herospace-slider__mobile">
    <?php query_posts('category_name=herospace-secondary&posts_per_page=3'); ?>
    <div class="herospace-slider__mobile__list">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="herospace-slider__mobile__list__item">
          <a href="<?php the_permalink(); ?>" class="herospace-slider__mobile__list__item__link">
            <div class="herospace-slider__mobile__box">
              <span class="herospace-slider__mobile__box__category">
                <?php
                  $cat = new WPSEO_Primary_Term('category', get_the_ID());
                  $cat = $cat->get_primary_term();
                  $catName = get_cat_name($cat);
                  $catLink = get_category_link($cat);
                  echo $catName;
                ?>
              </span>
              <h3 class="herospace-slider__mobile__box__title"><?php the_title() ?></h3>
              <small class="herospace-slider__mobile__box__author">Por <?php the_author(); ?></small>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
    </div>

    <div class="herospace-slider__mobile__dots"></div>
  </div>
</section>

<?php query_posts('category_name=herospace-secondary&posts_per_page=3'); ?>
  <?php if ( have_posts() ) { ?>
    <section class="herospace-articles">
      <?php while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="herospace-slider__mobile__box">
          <span class="herospace-slider__mobile__box__category">
            <?php
              $cat = new WPSEO_Primary_Term('category', get_the_ID());
              $cat = $cat->get_primary_term();
              $catName = get_cat_name($cat);
              $catLink = get_category_link($cat);
              echo $catName;
            ?>
          </span>
          <h3 class="herospace-slider__mobile__box__title"><?php the_title() ?></h3>
          <small class="herospace-slider__mobile__box__author">Por <?php the_author(); ?></small>
        </a>
      <?php endwhile; ?>
      <div class="herospace-banner">
        <?php wp_banner_manager(3);?>
      </div>
    </section>
  <?php } ?>
<?php wp_reset_query(); ?>

<section class="change">
  <?php query_posts('category_name=herospace-think'); ?>
    <div class="change__container">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="change__wrapper" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
          <span class="change__category">
            <?php
              $cat = new WPSEO_Primary_Term('category', get_the_ID());
              $cat = $cat->get_primary_term();
              $catName = get_cat_name($cat);
              $catLink = get_category_link($cat);
              echo $catName;
            ?>
          </span>
          <div class="change__data">
            <span class="change__data__category">
              <?php
                $cat = new WPSEO_Primary_Term('category', get_the_ID());
                $cat = $cat->get_primary_term();
                $catName = get_cat_name($cat);
                $catLink = get_category_link($cat);
                echo $catName;
              ?>
            </span>
            <h2 class="change__data__title"><?php the_title() ?></h2>
            <p class="change__data__description"><?php dynamic_excerpt2('210') ?></p>
            <small class="change__data__author">Por <?php the_author(); ?></small>
          </div>
        </a>
      <?php endwhile; endif; ?>
    </div>
  <?php wp_reset_query(); ?>

  <div class="change__dots">
    <div class="change__dots__actions">
      <div class="change__dots__actions__current">01</div>
      <div class="change__dots__actions__total"></div>
    </div>
  </div>
</section>

<section class="change-slider">
  <div class="change-slider__mobile">
    <?php query_posts('category_name=herospace-think-secondary&posts_per_page=4'); ?>
    <div class="change-slider__mobile__list">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="change-slider__mobile__list__item">
          <a href="<?php the_permalink(); ?>" class="change-slider__mobile__list__item__link">
            <div class="change-slider__mobile__box">
              <span class="change-slider__mobile__box__category"><?php the_title() ?></span>
              <big class="change-slider__mobile__box__time">Hace <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></big>
              <div class="change-slider__mobile__box__extra">
                <p class="change-slider__mobile__box__extra__text"><?php dynamic_excerpt(60); ?></p>
              </div>
            </div>
          </a>
        </div>
      <?php endwhile; ?>
      <?php wp_reset_query(); ?>
    </div>

    <div class="change-slider__mobile__dots"></div>
  </div>
</section>

<section class="change-articles">
  <?php query_posts('category_name=herospace-think-secondary&posts_per_page=4'); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink(); ?>" class="change-slider__mobile__box">
      <span class="change-slider__mobile__box__category"><?php the_title(); ?></span>
      <big class="change-slider__mobile__box__time">Hace <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ); ?></big>
      <div class="change-slider__mobile__box__extra">
        <p class="change-slider__mobile__box__extra__text"><?php the_excerpt(); ?></p>
      </div>
    </a>
  <?php endwhile; ?>
  <?php wp_reset_query(); ?>
</section>

<!-- <section class="camping">
  <div class="camping__mobile">
    <div class="camping__mobile__header">
      <div class="camping__mobile__header__content">
        <h3 class="camping__mobile__header__title">Camping</h3>
        <p class="camping__mobile__header__description">Hay mucho por descubrir y queremos que seas parte!. Sumáte a la nuestra comunidad y acompañanos en cada descubrimiento.</p>
      </div>
    </div>
    <div class="camping__mobile__wrapper">
      <p class="camping__mobile__wrapper__text">Se parte de nuestra<br> comunidad y participá de<br> foros actividades únicas!</p>
    </div>
    <div class="camping__mobile__email">
      <?php //mymail_form( $id = 1 ) ?>
    </div>
  </div>

  <div class="camping__desktop">
    <div class="camping__desktop__content">
      <h3 class="camping__desktop__content__title">Camping</h3>
      <p class="camping__desktop__content__description">Hay mucho por descubrir y queremos que<br>seas parte!. Sumáte a la nuestra comunidad<br>y acompañanos en cada descubrimiento.</p>
    </div>
    <div class="camping__desktop__data">
      <p class="camping__desktop__data__text">Se parte de nuestra<br> comunidad y participá de<br> foros actividades únicas!</p>
      <div class="camping__desktop__data__input">
        <?php //mymail_form( $id = 1 ) ?>
      </div>
    </div>
  </div>
</section> -->

  <section class="banner banner--bottom">
    <?php wp_banner_manager(1);?>
  </section>

<section class="news">
  <div class="news__content">
    <?php query_posts('category_name=news'); ?>
    <div class="news__wrapper">
      <?php while ( have_posts() ) : the_post(); ?>
        <div class="news__content__box">
          <div class="news__content__box__image" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')"></div>
          <div class="news__content__box__data">
            <h3 class="news__content__box__data__title"><?php the_title(); ?></h3>
            <p class="news__content__box__data__description"><?php the_excerpt(); ?></p>
            <span class="news__content__box__data__author">Por <?php the_author(); ?></span>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <?php wp_reset_query(); ?>

    <div class="news__dots">
      <div class="news__dots__actions">
        <div class="news__dots__actions__current">01</div>
        <div class="news__dots__actions__total"></div>
      </div>
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
      <?php mymail_form( $id = 2 ) ?>
    </div>
  </div>

  <div class="domingo__desktop">
    <div class="domingo__desktop__content">
      <h3 class="domingo__desktop__content__title">Domingo</h3>
      <p class="domingo__desktop__content__description">Periodismo positivo, contenidos inspiradores,<br> información para vivir mejor. En tu día de descanso,<br> lo mejor de Aconcagua en la palma de tu mano.</p>
    </div>
    <div class="domingo__desktop__data">
      <p class="domingo__desktop__data__text">Suscribite a nuestro<br> newsletter y recibí noticias<br> sustentables pensadas para vos</p>
      <div class="domingo__desktop__data__input">
        <?php mymail_form( $id = 2 ) ?>
      </div>
    </div>
  </div>
</section>

<section class="banner banner--bottom">
  <?php wp_banner_manager(2);?>
</section>
<?php get_footer() ?>
