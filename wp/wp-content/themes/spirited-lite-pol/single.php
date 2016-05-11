<?php

/**

 * The Template for displaying all single posts.

 *

 * @package SKT Spiritedlite

 */

get_header(); ?>

<div class="container-fluid content-section">
  <div class="container">
    <?php while ( have_posts() ) : the_post(); ?>

      <div class="container-fluid no-padding">  
        <div class="container no-padding content-box" style="margin-top:10px; margin-bottom:15px;">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1 style="font-size:7em; font-style: bold;"><?php the_title(); ?></h1>
<!--             <p><img class="img-responsive no-padding" style ="max-width: 600px; margin:auto;" src=
            <?php the_post_thumbnail(full); ?>
            </p> -->
            <h2 style="font-size:2em;"><?php the_date(); ?></h2>
            <h2 style="font-size:2em;">by <?php the_author(); ?></h2>
            <?php the_content();?>
          </div>
        </div>  
      <?php endwhile; // end of the loop. ?>          
    </div>

    <div class="clear"></div>

  </div>
</div>



<?php get_footer(); ?>