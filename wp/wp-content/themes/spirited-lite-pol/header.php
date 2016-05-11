<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div class="container">

 *

 * @package SKT Spiritedlite

 */

?>

<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="stylesheet" href="https://www.polarity.gg/2/css/index.css" type="text/css" />

<link rel="shortcut icon" href="https://www.polarity.gg/2/images/favicon_animated.ico" type="image/x-icon" />

<base href="https://www.polarity.gg/2/" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- <div class="row"> -->
  <div id="header-logo">
    <a href="https://polarity.gg/2"><img src="https://polarity.gg/2/images/polarity_logo.png" alt="Polarity: Tournament and Streaming Exellence" class="no-svg" /></a> <!-- add svg and no svg options here, see comment below-->
  </div>
<!-- </div>  -->

<nav class="nav navbar-default" data-spy="affix" data-offset-top="75">
  <div class="container-fluid no-padding" id="navbar-container" style="padding:0px">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#polarity_navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
            
    <div class="collapse navbar-collapse" id="polarity_navbar" style="padding:0px">
      <ul class="nav nav-justified">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Games<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="wiiu">Super Smash Brothers WiiU</a></li>
            <li><a href="pm">Project Melee</a></li> 
            <li><a href="melee">Super Smash Brothers Melee</a></li>
            <li><a href="64">Super Smash Brothers (64)</a></li> 
          </ul>
        </li>
        <li><a href="events">Events</a></li>
        <li><a href="aml">AML</a></li>
        <li><a href="partners">Partners</a></li>
        <li><a href="news">News</a></li>
        <!-- <li><a href="store">Store</a></li> -->
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php if ( is_front_page() && ! is_home() ) { ?>

<!-- <section id="home_slider">

  <?php

			$sldimages = ''; 

			$sldimages = array(

						'1' => get_template_directory_uri().'/images/slides/slider1.jpg',

						'2' => get_template_directory_uri().'/images/slides/slider2.jpg',

						'3' => get_template_directory_uri().'/images/slides/slider1.jpg',

			); ?>

  <?php

			$slAr = array();

			$m = 0;

			for ($i=1; $i<4; $i++) {

				if ( get_theme_mod('slide_image'.$i, $sldimages[$i]) != "" ) {

					$imgSrc 	= get_theme_mod('slide_image'.$i, $sldimages[$i]);

					$imgTitle	= get_theme_mod('slide_title'.$i);

					$imgDesc	= get_theme_mod('slide_desc'.$i);

					$imgLink	= get_theme_mod('slide_link'.$i);

					if ( strlen($imgSrc) > 2 ) {

						$slAr[$m]['image_src'] = get_theme_mod('slide_image'.$i, $sldimages[$i]);

						$slAr[$m]['image_title'] = get_theme_mod('slide_title'.$i);

						$slAr[$m]['image_desc'] = get_theme_mod('slide_desc'.$i);

						$slAr[$m]['image_link'] = get_theme_mod('slide_link'.$i);

						$m++;

					}

				}

			}

			$slideno = array();

			if( $slAr > 0 ){

				$n = 0;?>

  <div class="slider-wrapper theme-default">

    <div id="slider" class="nivoSlider">

      <?php 

                foreach( $slAr as $sv ){

                    $n++; ?>

      <img src="<?php echo esc_url($sv['image_src']); ?>" alt="<?php echo esc_attr($sv['image_title']);?>" title="<?php echo esc_attr('#slidecaption'.$n) ; ?>" />

      <?php

                    $slideno[] = $n;

                }

                ?>

    </div>

    <?php

                foreach( $slideno as $sln ){ ?>

    <div id="slidecaption<?php echo esc_attr($sln); ?>" class="nivo-html-caption">

      <div class="slide_info">

        <h2><?php echo esc_attr(get_theme_mod('slide_title'.$sln, __('Welcome To Our Website','spirited-lite'))); ?></h2>

        <p>

          <?php  echo esc_attr(get_theme_mod('slide_desc'.$sln, __('Quisque blandit dolor risus, sed dapibus dui facilisis sed. Donec eu porta elit. Aliquam porta sollicitudin ante, acntum orci mattis et. Phasellus ac nibh eleifend, sagittis purus nec, elementum massa. Quisque tincidunt sapien a sem porttitor, id convallis dolor','spirited-lite'))); ?>

        </p>

        <a class="slide_more" href="<?php echo esc_url(get_theme_mod('slide_link'.$sln,'#link'.$sln)); ?>">

        <?php esc_attr_e('Read More', 'spirited-lite'); ?>

        </a> </div>

    </div>

    <?php  } ?>

  </div> -->

  <div class="clear"></div>

  <?php }  ?>

</section>

<div class="clear"></div>

<?php }  ?>