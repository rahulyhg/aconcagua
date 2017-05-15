 <?php /* Template Name: Search Page */ ?>
 <form class="search" method="get" action="<?php echo home_url(); ?>" role="search">
  <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  <button type="submit" role="button" class="btn btn-default right"/><span class="glyphicon glyphicon-search white"></span></button>
</form>
 <?php
     global $query_string;
     $query_args = explode("&", $query_string);
     $search_query = array();

     foreach($query_args as $key => $string) {
       $query_split = explode("=", $string);
       $search_query[$query_split[0]] = urldecode($query_split[1]);
     } // foreach

     $the_query = new WP_Query($search_query);
     if ( $the_query->have_posts() ) :
     ?>
     <!-- the loop -->

     <ul>
     <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
         <li>
             <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
         </li>
     <?php endwhile; ?>
     </ul>
     <!-- end of the loop -->

     <?php wp_reset_postdata(); ?>

 <?php else : ?>
     <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
 <?php endif; ?>
