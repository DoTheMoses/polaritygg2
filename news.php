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

<link href='https://fonts.googleapis.com/css?family=Exo+2:900' rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="css/index.css" type="text/css" />
<script type="text/javascript" src="js/index.js"></script>

<link rel="shortcut icon" href="/images/favicon_animated.ico" type="image/x-icon" />

<!-- =================================================================== -->
</head>
<!-- =================================================================== -->

<!-- =================================================================== -->
<body>
<!-- =================================================================== -->

<?php include("include/page_functions.php"); ?>

<!-- ========================================================= -->
<!-- header and navbar                                         -->
<!-- ========================================================= -->

<?php get_pol_navbar(); ?>

<!-- ========================================================= -->
<!-- content                                                   -->
<!-- ========================================================= -->

<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('../wp/wp-blog-header.php');
?>

<!-- begin top -->
<div class="container-fluid content-section top-content">
  <div class="container">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
      <div class="content-box">
        <h1>News & Blog</h1>
      </div>
     </div>

  </div>
</div>
<!-- end top -->

<div class="container-fluid content-section">
  <div class="container">

    <?php
    $posts = get_posts('numberposts=2&order=DSC&orderby=post_date');
    foreach ($posts as $post) : setup_postdata( $post ); ?>

      <div class="container-fluid no-padding">       
        <div class="container no-padding content-box" style="margin-bottom:15px;">        

          <div class="col-md-7">
            <a href="<?php the_permalink(); ?>">
              <img class="img-responsive" src=<?php the_post_thumbnail(full); ?>
            </a>
          </div>
          <div class="col-md-5">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <h4><?php the_date(); ?></h4>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>
      </div>

    <?php
    endforeach;
    ?>

    <!-- Pagination -->
<!--     <div class="row text-center">
      <div class="col-lg-12">
        <ul class="pagination">
          <li><a href="#">&laquo;</a></li>
          <li class="active"><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
    </div> -->

  </div>  
</div>
<!-- /.container -->

<!-- ========================================================= -->
<!-- footer                                                    -->
<!-- ========================================================= -->

<?php get_pol_footer(); ?>

<!-- =================================================================== -->
</body>
<!-- =================================================================== -->

</html>