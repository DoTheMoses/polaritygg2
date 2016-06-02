<!DOCTYPE html>
<html lang="en-US">

<!-- =================================================================== -->
<head>
<!-- =================================================================== -->

<title>Polarity: News</title>
<meta charset="utf-8" />
<meta name="description" content="CFL-Based Tournament & Production Source" />
<meta name="keywords" content="Polarity, polarity, melee, ssbm, smash 4, sfv" />

<?php include("page_functions.php"); ?>

<?php get_pol_head_section(); ?> 

<?php get_pol_header(); ?>

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

<?php get_pol_footer(); ?>

<!-- =================================================================== -->
</body>
<!-- =================================================================== -->

</html>