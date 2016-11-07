<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>
      <?php echo wp_get_document_title(); ?>
    </title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="wrapper">
      <div class="header">
        <?php 
        $menuParameters = array(
          'container'       => false,
          'echo'            => false,
          'items_wrap'      => '%3$s',
          'depth'           => 0
        );
        ?>
        <div class="menu">
        <?php
        echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );

        ?>
        </div>
      </div>
