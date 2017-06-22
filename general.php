//MENU
<!-- Collect the nav links, forms, and other content for toggling -->
<?php

$defaults = array(
'theme_location' => '',
'menu' => '',
'container' => 'div',
'container_class' => 'collapse navbar-collapse',
'container_id' => 'bs-example-navbar-collapse-1',
'menu_class' => 'nav navbar-nav',
'menu_id' => '',
'echo' => true,
'fallback_cb' => 'wp_page_menu',
'before' => '',
'after' => '',
'link_before' => '',
'link_after' => '',
'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
'depth' => 0,
'walker' => ''
);

wp_nav_menu( $defaults );

?>

//TAGS & GENERAL USE

<?php echo get_site_url(); ?>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css" rel="stylesheet">

<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>
<?php get_footer(); ?>