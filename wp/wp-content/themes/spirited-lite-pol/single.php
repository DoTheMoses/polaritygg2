<?php

/**

 * The Template for displaying all single posts.

 *

 * @package SKT Spiritedlite

 */

get_header(); ?>
<link rel="stylesheet" property="stylesheet" href="https://www.polarity.gg/2/index.css">

<content>

<div class="container-fluid content-section">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
        <div class="content-box wp-content">

          <img src="<?php the_post_thumbnail(full); ?>

          <h1><?php the_title(); ?></h1>

          <h2><?php the_date(); ?></h2>
          <h3>by <?php the_author(); ?></h3>
          <?php the_content();?>
        </div>

      <?php endwhile; // end of the loop. ?>          
    </div>

    <div class="clear"></div>

  </div>
</div>

</content>

<?php get_footer(); ?>