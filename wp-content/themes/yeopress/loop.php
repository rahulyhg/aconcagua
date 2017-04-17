<?php if (is_page()): the_post() ?>
	<article id="page-<?php the_ID() ?>">
		<?php the_content(); ?>
	</article>
<?php else: ?>
  <?php if (is_category()): ?>
  <div class="list">
	<?php if (have_posts()): ?>
    <ul class="list__content">
		<?php while (have_posts()) : the_post() ?>
      <li class="list__content__item">
  			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>" id="article-<?php the_ID() ?>" class="article article--loop">
          <div class="article__image" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
          </div>
  				<div class="article__data">
            <div class="article__data__content">
              <h3 class="article__data__category">Full story</h3>
              <h3 class="article__data__title"><?php the_title(); ?></h3>
              <p class="article__data__description"><?php dynamic_excerpt('100'); ?></p>
              <span class="article__data__author">Por <?php echo get_post_meta($post->ID, 'writter', true); ?></span>
            </div>
          </div>
  			</a>
      </li>
		<?php endwhile; ?>
    </ul>
	<?php else: ?>
		<p>Nothing matches your query.</p>
	<?php  endif; ?>
  </div>

  <section class="banner banner--bottom">
    <?php wp_banner_manager(2);?>
  </section>

  <section class="domingo domingo--grey">
    <div class="domingo__mobile">
      <div class="domingo__mobile__header">
        <div class="domingo__mobile__header__content">
          <h3 class="domingo__mobile__header__title">Domingo</h3>
          <p class="domingo__mobile__header__description">Periodismo positivo, contenidos inspiradores,<br> información para vivir mejor. En tu día de descanso,<br> lo mejor de Aconcagua en la palma de tu mano.</p>
        </div>
      </div>
      <div class="domingo__mobile__wrapper">
        <p class="domingo__mobile__wrapper__text">Suscribite a nuestro<br> newsletter y recibí noticias<br> sustentables pensadas para vos</p>
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
  <?php else: ?>

    <section class="herospace herospace--full">
        <div class="herospace__wrapper" style="background-image: url('/aconcagua/wp-content/themes/yeopress/images/herospace.jpg')">
          <span class="herospace__category"><?php echo get_post_meta($post->ID, 'category', true); ?></span>
          <div class="herospace__data">
            <span class="herospace__data__category"><?php echo get_post_meta($post->ID, 'category', true); ?></span>
            <h2 class="herospace__data__title"><?php the_title(); ?></h2>
            <p class="herospace__data__description"><?php the_excerpt(); ?></p>
          </div>
        </div>
    </section>

    <section class="article">
      <div class="article__left">
        <div class="article__left__time">
          <span class="article__left__time__text"><?php the_time('j F y . H:i') ?>hs</span>
        </div>

        <div class="article__left__author">
          <div class="article__left__author__image">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
          </div>
          <div class="article__left__author__data">
            <h3 class="article__left__author__data__name"><?php the_author(); ?></h3>
            <span class="article__left__author__data__twitter">@<?php the_author_meta('twitter'); ?></span>
            <p class="article__left__author__data__email"><?php the_author_meta('user_email'); ?></p>
          </div>
        </div>

        <div class="article__left__tags">
          <?php the_tags( '<ul class="article__left__tags__list"><li class="article__left__tags__list__item">', '<span>.</span></li><li class="article__left__tags__list__item">', '<span>.</span></li></ul>' ); ?>
        </div>

        <div class="article__left__share">
          <div class="article__left__share__link"></div>
        </div>
      </div>
      <div class="article__center">
        <?php the_content(); ?>
      </div>
      <div class="article__right">
        <?php if ( function_exists( 'tptn_show_pop_posts' ) ) { tptn_show_pop_posts(); } ?>
      </div>
    </section>

  <?php  endif; ?>
<?php  endif; ?>
