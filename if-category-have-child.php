<?php
	$term_id = $queried_object->term_id;
	$taxonomy_name = $queried_object->taxonomy;
	$term_children = get_terms( $taxonomy_name,
                         array(
                               'parent' => $term_id,
                               'orderby' => 'term_order',
                               'order' => 'ASC',
                               'hide_empty' => false
                              )
                     );
?>
<?php if ( !array_exists($term_children)) : // when category doesn have child ?>
	<?php if (have_posts()) : // category have posts ?>
		<?php while ( have_posts() ) : the_post(); ?>

			list of post doesnt have child
			
		<?php endwhile; ?>
	<?php endif; ?>
<?php else : ?>
	<?php if(array_exists($term_children)): // category child exists ?>
		<?php foreach ( $term_children as $term ): ?>

			list of post does have child

		<?php endforeach; ?>
	<?php endif; ?>
<?php endif; ?>