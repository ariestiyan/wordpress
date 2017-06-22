<?php
$args = array( 'posts_per_page' => 4, 'offset'=> 0, 'category' => array(4, 5) );
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>

  <div class="card-news col-sm-3">
  <figure><img src="<?php echo $url ?>" class="width100"></figure>
  <div class="news-detail">
  <div class="title"><?php the_title(); ?></div>
  <div class="intro"><?php the_content(); ?></div>
  </div><!-- news-detail ends -->
  <div class="news-more"><a href="<?php the_permalink() ?>">read more</a></div>
  </div><!-- card-news ends -->

<?php endforeach;
wp_reset_postdata();?>

DISPLAY ALL POST :

<?php
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

<?php if ( $wpb_all_query->have_posts() ) : ?>

<ul>

 <!-- the loop -->
 <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 <?php endwhile; ?>
 <!-- end of the loop -->

</ul>

 <?php wp_reset_postdata(); ?>

<?php else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>