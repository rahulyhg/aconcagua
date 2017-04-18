<?php get_header(); ?>
  <?php if (is_category()): ?>
    <section class="herospace herospace--full herospace--small">
        <div class="herospace__wrapper" style="background-image: url('/aconcagua/wp-content/themes/yeopress/images/herospace.jpg')">
          <div class="herospace__data">
            <h2 class="herospace__data__title"><?php single_cat_title(); ?></h2>
            <p class="herospace__data__description"><?php echo category_description(); ?></p>
            <span class="article__data__author">
            <?php
              $thisCat = get_category(get_query_var('cat'),false);
              $total_posts = $thisCat->count;
              echo $total_posts;
            ?>
            resultados
            </span>
          </div>
        </div>
    </section>

    <section class="category-page">
      <div class="category-page__content">
        <?php get_template_part('loop', 'archive'); ?>
      </div>
    </section>
  <?php endif; ?>
</div>
<?php get_footer(); ?>
