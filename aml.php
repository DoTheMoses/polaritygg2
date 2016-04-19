<!DOCTYPE html>
<html lang="en-US">
<html>

<!-- =================================================================== -->
<head>
<!-- =================================================================== -->

<title>Polarity: Melee</title>
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

<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="index.css" type="text/css" />

<!-- =================================================================== -->
</head>
<!-- =================================================================== -->

<!-- =================================================================== -->
<body>
<!-- =================================================================== -->

<?php include("page_functions.php"); ?>

<!-- ========================================================= -->
<!-- header and navbar                                         -->
<!-- ========================================================= -->

<?php get_pol_navbar(); ?>

<!-- ========================================================= -->
<!-- content                                                   -->
<!-- ========================================================= -->

<!-- begin carousel -->
<div id="Carousel" class="container-fluid">
  <div class="row">

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

<!-- begin about -->
<div class="container-fluid content-section">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h1 style="text-align: center;">Amateur Melee League</h1>
        <p>The Amateur Melee League, or AML, was designed to give up-and-coming players more chances 
           to play meaningful matches against players of their own caliber. Currently based in 
           Orlando, FL, we aim to grow the melee scene and give the new school the push it needs 
           to take it to the next level!<br /><br />
          
           To keep up with our league, join the <a href="https://www.facebook.com/groups/1132977010049649/">Facebook group</a>.
        </p>
      </div>

    </div>           
  </div>
</div>
<!-- end about -->

<!-- ========================================================= -->
<!-- footer                                                    -->
<!-- ========================================================= -->

<?php get_pol_footer(); ?>

<!-- =================================================================== -->
</body>
<!-- =================================================================== -->

</html>
