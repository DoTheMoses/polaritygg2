<!DOCTYPE html>
<html lang="en-US">

<!-- =================================================================== -->
<head>
<!-- =================================================================== -->

<title>Polarity: News</title>
<meta charset="utf-8" />
<meta name="description" content="CFL-Based Tournament & Production Source" />
<meta name="keywords" content="Polarity, polarity, melee, ssbm, smash 4, sfv" />
<meta name="author" content="Matt Kiep" />

<meta name="viewport" content="width=device-width, initial-scale=1" />

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="index.css" type="text/css" />
<script type="text/javascript" src="index.js"></script>

<link rel="shortcut icon" href="images/fav_icon.png" type="image/x-icon" />

<!-- =================================================================== -->
</head>
<!-- =================================================================== -->

<!-- =================================================================== -->
<body>
<!-- =================================================================== -->

<?php include("page_functions.php"); ?>

<!-- ========================================================= -->
<header>
<!-- ========================================================= -->

<?php get_pol_navbar(); ?>

</header>

<!-- ========================================================= -->
<content>
<!-- ========================================================= -->

<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('../wp/wp-blog-header.php');
?>

<!-- begin top-header -->
<div class="container-fluid content-section-top top-news">
  <div class="container">

    <div class="container-fluid content-section-top-title">
      <h1>News & Blog</h1>
    </div>

  </div>
</div>
<!-- end top-header -->

<?php $posts = get_posts('numberposts=2&order=DSC&orderby=post_date');
      foreach ($posts as $post) : setup_postdata( $post ); ?>

<div class="container-fluid content-section">
  <div class="container">

    <div class="col-xs-12 col-sm-7 col-sm-7 col-lg-7 no-padding">
      <div class="content-box content-box-image">
        <a href="<?php the_permalink(); ?>">
          <img class="img-responsive" src=<?php the_post_thumbnail(full); ?>
        </a>
      </div>
    </div>

    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5 no-padding">
      <div class="content-box back-to-top">       

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <h4><?php the_date(); ?></h4>
        <p><?php the_excerpt(); ?></p>

      </div>
    </div>

  </div>  
</div>

<?php endforeach; ?>

</content>

<!-- ========================================================= -->
<!-- footer                                                    -->
<!-- ========================================================= -->

<?php get_pol_footer(); ?>

<!-- =================================================================== -->
</body>
<!-- =================================================================== -->

</html>