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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="https://www.polarity.gg/2/index.css" type="text/css" />
<script type="text/javascript" src="https://www.polarity.gg/2/index.js"></script>

<link rel="shortcut icon" href="https://www.polarity.gg/2/images/favicon_animated.ico" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header>

<!-- <header> -->
<div class="container">

  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 logo">
      <a href="https://www.polarity.gg/2/">
        <img class="center-block" src="https://www.polarity.gg/2/images/polarity_logo.png" alt="Polarity: Tournament and Streaming Exellence" />
      </a> 
  </div>
    
<?php
  $channel = "polaritygg";
  try {
    $api = json_decode(file_get_contents("https://api.twitch.tv/kraken/streams/" . $channel), true);
    $streaming = (is_array($api['stream']) ? true : false);
    $current_game = $api['stream']['channel']['game'];
    $channel_title = $api['stream']['channel']['display_name'];
    $stream_title = $api['stream']['channel']['status'];
    $viewers = $api['stream']['viewers'];
  } catch (Exception $e) {
    $api = array();
    $streaming = false;
  }

  if($streaming) { ?>
  <div class="col-xs-12 col-sm-8 col-sm-offset-1 col-md-6 ol-md-offset-3 col-lg-6 col-lg-offset-3 stream-badge">
    <ul>
      <li class="status">Stream Status: <a href="https://www.twitch.tv/polaritygg">Live!</a></li>
      <li class="title"><?php echo("$stream_title") ?></li>
      <li class="game">Streaming <b><?php echo("$current_game") ?></b> to <?php echo("$viewers")?> viewers!</li>
    </ul>
  </div>
 
</div>

  <?php } else { ?>

  <div class="col-xs-12 col-sm-8 col-sm-offset-1 col-md-6 ol-md-offset-3 col-lg-6 col-lg-offset-3 stream-badge">
    <ul>
      <li class="status">Stream Status: Offline</a></li>
      <li class="title">Follow our <a href="https://twitch.tv/polaritygg">Twitch Channel</a> to keep up with our broadcasts</li>
      <li class="game"> and check out our <a href="https://www.youtube.com/PolarityGG">YouTube Channel</a> for VODs!</li>
    </ul>
  </div>
 
</div>

<?php } ?>

<nav class="nav navbar-default" data-spy="affix" data-offset-top="70">
  <div class="container-fluid" id="navbar-container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#polarity_navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
            
    <div class="collapse navbar-collapse no-padding" id="polarity_navbar">
      <ul class="nav nav-justified">
        <li><a href="games">Games</a></li>
        <li><a href="events">Events</a></li>
        <li><a href="aml">AML</a></li>
        <li><a href="stream">Stream</a></li>
        <li><a href="commentary">Commentary</a></li>
        <li><a href="news">News</a></li>
        <li><a href="partners">Partners</a></li>
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- </header> -->

</header>

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