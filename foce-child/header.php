<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">

    <!-- Bouton Burger -->
     <nav id="site-navigation" class="main-navigation">
     <ul>
     <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
     </ul>
     <div class="burger-menu">
        <span class="burger-icon"></span>
    </div> 
    </nav>
    <nav id="site-navigation" class="menu-overlay">
    <img class=logo-menu-overlay src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image_logo.png" alt="logo Fleurs d'oranger & chats errants">
        <ul>
            <li><a href="#story">Histoire</a></li>
            <li><a href="#characters">Personnages</a></li>
            <li><a href="#place">Lieu</a></li>
            <li><a href="#studio">Studio Koukaki</a></li>
        </ul>
    <p class="studio-name">STUDIO KOUKAKI</p>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Orchid.png" alt="" class="left1">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat.png" alt="" class="left2">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Flower.png" alt="" class="left3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/cat-1.png" alt="" class="left4">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Sunflower.png" alt="" class="right1">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Random-Flower.png" alt="" class="right2">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Group-180.png" alt="" class="right3">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Hibiscus-footer.png" alt="" class="right4">
    </nav>
</header>
