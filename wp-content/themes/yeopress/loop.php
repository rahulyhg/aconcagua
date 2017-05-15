<?php if (is_page()): the_post() ?>
	<article id="page-<?php the_ID() ?>">
		<?php the_content(); ?>
	</article>
<?php else: ?>
  <?php if(is_single()): ?>
    <section class="herospace herospace--full herospace--static">
        <div class="herospace__wrapper" style="background-image: url('<?php the_post_thumbnail_url('full'); ?>')">
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
            <h2 class="herospace__data__title"><?php the_title(); ?></h2>
            <p class="herospace__data__description"><?php dynamic_excerpt2('250') ?></p>
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
            <a href="https://twitter.com/<?php the_author_meta('twitter'); ?>" target="_blank" class="article__left__author__data__twitter">@<?php the_author_meta('twitter'); ?></a>
          </div>
        </div>

        <div class="article__left__tags">
          <?php the_tags( '<ul class="article__left__tags__list"><li class="article__left__tags__list__item">', '<span>.</span></li><li class="article__left__tags__list__item">', '<span>.</span></li></ul>' ); ?>
        </div>

        <div class="article__left__share">
          <div class="article__left__share__link">
            <span>Share</span>
          </div>
          <?php echo do_shortcode('[addtoany buttons="facebook,twitter,email"]'); ?>
        </div>
      </div>
      <div class="article__center">
        <?php the_content(); ?>

        <?php comments_template(); ?>
      </div>
      <div class="article__right">
        <div class="article-top-banner">
          <?php wp_banner_manager(4);?>
        </div>
        <?php if ( function_exists( 'tptn_show_pop_posts' ) ) { tptn_show_pop_posts(); } ?>
        <div class="article-bottom-banner">
          <?php wp_banner_manager(5);?>
        </div>
      </div>
    </section>

    <section class="related-posts">
      <?php $orig_post = $post;
      global $post;
      $categories = get_the_category($post->ID);
      if ($categories) {
      $category_ids = array();
      foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
      $args=array(
      'category__in' => $category_ids,
      'post__not_in' => array($post->ID),
      'posts_per_page'=> 2,
      'caller_get_posts'=>1
      );
      $my_query = new wp_query( $args );
      if( $my_query->have_posts() ) {
      echo '<div class="related-posts__title"><h3>Notas</h3></div><div><ul class="related-posts__list">';
      while( $my_query->have_posts() ) {
      $my_query->the_post();?>
        <li class="related-posts__list__item">
          <a href="<? the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>">
            <div class="related-posts__list__item__image" style="background-image: url('<?php the_post_thumbnail_url(); ?>')"></div>
            <div class="related-posts__list__item__data">
              <div class="related-posts__list__item__content">
                <h3 class="related-posts__list__item__data__title"><?php the_title(); ?></h3>
                <p class="related-posts__list__item__data__description"><?php dynamic_excerpt('100') ?></p>
                <span class="related-posts__list__item__data__author">Por <?php the_author(); ?></span>
              </div>
            </div>
          </a>
        </li>
      <?php } ?>
      <?php echo '</ul></div>'; ?>
      <?php } ?>
      <?php } ?>
      <?php
        $post = $orig_post;
        wp_reset_query();
      ?>
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

    <section class="banner banner--bottom">
      <?php wp_banner_manager(2);?>
    </section>
  <?php endif; ?>

  <?php if(is_tag()): ?>
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
                <h3 class="article__data__title"><?php the_title(); ?></h3>
                <p class="article__data__description"><?php dynamic_excerpt('100'); ?></p>
                <span class="article__data__author">Por <?php the_author(); ?></span>
              </div>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
      </ul>

    <?php
    the_posts_pagination( array(
      'screen_reader_text' => ' ',
      'mid_size'  => 10,
      'prev_text' => __( 'Anterior', 'textdomain' ),
      'next_text' => __( 'Siguiente', 'textdomain' ),
    ));
     ?>
	<?php  endif; ?>
  </div>

  <section class="banner banner--bottom">
    <?php wp_banner_manager(2); ?>
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
        <?php mymail_form( $id = 2 ); ?>
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
          <?php mymail_form( $id = 2 ); ?>
        </div>
      </div>
    </div>
  </section>
  <?php  endif; ?>

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
                <h3 class="article__data__title"><?php the_title(); ?></h3>
                <p class="article__data__description"><?php dynamic_excerpt('100'); ?></p>
                <span class="article__data__author">Por <?php the_author(); ?></span>
              </div>
            </div>
          </a>
        </li>
      <?php endwhile; ?>
      </ul>

    <?php
      the_posts_pagination( array(
        'screen_reader_text' => ' ',
        'mid_size'  => 10,
        'prev_text' => __( 'Anterior', 'textdomain' ),
        'next_text' => __( 'Siguiente', 'textdomain' ),
      ));
    ?>
	<?php endif; ?>
  </div>


  <section class="banner banner--bottom">
    <?php wp_banner_manager(2); ?>
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
        <?php mymail_form( $id = 2 ); ?>
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
          <?php mymail_form( $id = 2 ); ?>
        </div>
      </div>
    </div>
  </section>
  <?php  endif; ?>
<?php  endif; ?>
