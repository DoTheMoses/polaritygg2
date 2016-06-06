<!DOCTYPE html>
<html lang="en-US">

<!-- =================================================================== -->
<head>
<!-- =================================================================== -->

<title>Polarity Website 2.0</title>
<meta charset="utf-8" />
<meta name="description" content="CFL-Based Tournament & Production Source" /> 
<meta name="keywords" content="Polarity, polarity, melee, ssbm, smash 4, sfv" />

<?php include("page_functions.php"); ?>

<?php get_pol_head_section(); ?> 

<?php get_pol_header(); ?>

<!-- ========================================================= -->
<content>
<!-- ========================================================= -->

<!-- begin carousel -->
<div id="Carousel" class="container-fluid">
  <div class="container">

    <div id="main_carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
      <!-- indicators -->
      <ol class="carousel-indicators">
        <li data-target="#main_carousel" data-slide-to="0" class="active"></li>
        <li data-target="#main_carousel" data-slide-to="1"></li>
        <li data-target="#main_carousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox"> 
        
        <!-- slide 0 -->
        <div class="item active">
          <img src="images/hands.jpg" alt="Grid">
          <div class="carousel-caption-plus">
            <div class="carousel-caption-plus-link">
              <h1>Polarity Southeast Melee Invitational</h1>
              <p>July 30th - 31st in Orlando, Florida</p>
              <a href="https://www.facebook.com/events/1661446734125439/"></a>
            </div>  
          </div>
        </div>

        <!-- slide 1 -->
        <div class="item">
          <img src="images/plup.jpg" alt="Dudes">
          <div class="carousel-caption-plus">
            <div class="carousel-caption-plus-link">
              <h1>The FBC Presents: Come to Papa</h1>
              <p>March 19th-20th in Orlando, Florida</p>
              <a href="https://smash.gg/tournament/the-fbc-presents-come-to-papa-1"></a>
            </div>  
          </div>
        </div>

        <!-- slide 2 -->
        <div class="item">
          <img src="images/hands.jpg" alt="Hands">
          <div class="carousel-caption-plus">
            <div class="carousel-caption-plus-link">
              <h1>Impact 2016</h1>
              <p>April 9th-10th in Orlando, Florida</p>
              <a href="https://www.facebook.com/events/1661446734125439/"></a>
            </div>  
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- end carousel -->

<!-- begin recent brackets -->
<span class="anchor" id="recent_brackets"></span>
<div class="container-fluid content-section content-section-dark">
  <div class="container">
      
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding hidden-xs">
      <div class="content-box-dark">
        <h1>Recent Brackets</h1>
        <p>Looking for a bracket from a recent event? Check <a href="https://t.polarity.gg">here</a>!</p>
      </div>
    </div>
      
  </div>
</div>
<!-- end communiities & resources -->

<div class="container">
  <div class="container-fluid">
    <a class="twitter-timeline" 
    href="https://twitter.com/PolarityGG" 
    data-widget-id="730171926224719872" 
    width="1300"
    height="250">
    Tweets by @PolarityGG</a>
    <script>
      !function(d,s,id) {
        var js,fjs=d.getElementsByTagName(s)[0],
        p=/^http:/.test(d.location)?'http':'https';

        if(!d.getElementById(id)) {
            js=d.createElement(s);
            js.id=id;
            js.src=p+"://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js,fjs);
          }
        }
      (document,"script","twitter-wjs");
    </script>
  </div>
</div>

</content>

<?php get_pol_footer(); ?>

<!-- =================================================================== -->
</body>
<!-- =================================================================== -->

</html>