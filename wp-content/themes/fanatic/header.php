<?php /* Header */  ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title><?php bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, minimal-ui" />
<?php wp_head(); ?>
</head>
<?php $color = get_field('page_colour_scheme'); ?>
<body <?php body_class($color); ?>>
<header class="header">
  <div class="logo">  
    <div>Source </br>Recruitment</div>
  </div>
  <nav class="primary nav">
    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
  </nav>
</header>
