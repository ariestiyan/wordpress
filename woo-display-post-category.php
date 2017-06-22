<?php
$prod_categories = get_terms( 'product_cat', array(
'orderby' => 'name',
'order' => 'ASC',
'hide_empty' => 1
));
foreach( $prod_categories as $prod_cat ) :
$cat_thumb_id = get_woocommerce_term_meta( $prod_cat->term_id, 'thumbnail_id', true );
$cat_thumb_url = wp_get_attachment_thumb_url( $cat_thumb_id );
$term_link = get_term_link( $prod_cat, 'product_cat' );
?>
<li>
<a href="<?php echo $term_link; ?>"><?php echo $prod_cat->name; ?></a></li>
<?php endforeach; wp_reset_query(); ?>

DISPLAY PRODUCT

<?php

$meta_query = WC()->query->get_meta_query();
$meta_query[] = array(
'key' => '_featured',
'value' => 'no'
);
$args = array(
  'post_type' => 'product',
  'stock' => 1,
  'showposts' => 4,
  'orderby' => 'date',
  'order' => 'DESC',
  'product_cat' => '',
  'meta_query' => $meta_query
);

  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

  <div class="col-xs-12 col-sm-4 prod-list">
  <a href="<?php the_permalink(); ?>"><div class="thumb"></div></a>
  <div class="prod-price pull-right">$20</div>
  <div class="prod-name"><?php the_title(); ?></div>
  <div class="prod-category">Category</div>
  </div><!-- prod-list ends -->

<?php
  endwhile;
  wp_reset_query();
?>