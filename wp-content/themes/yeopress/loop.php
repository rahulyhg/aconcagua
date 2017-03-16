<?php if (is_page()): the_post() ?>
	<article id="page-<?php the_ID() ?>">
		<?php the_content(); ?>
	</article>
<?php else: ?>
  <div class="list">
	<?php if (have_posts()): ?>
    <ul class="list__content">
		<?php while (have_posts()) : the_post() ?>
      <li class="list__content__item">
  			<a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>" id="article-<?php the_ID() ?>" class="article">
          <div class="article__image">
            <?php the_post_thumbnail() ?>
          </div>
  				<div class="article__data">
            <div class="article__data__content">
              <h3 class="article__data__title"><?php the_title(); ?></h3>
              <p class="article__data__description"><?php the_excerpt(); ?></p>
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
<?php  endif; ?>
