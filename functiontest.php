<!DOCTYPE html>
<html lang="en-US">
<html>

<!-- =================================================================== -->
<head>
<!-- =================================================================== -->

<title>Polarity Website 2.0</title>
<meta charset="utf-8" />
<meta name="description" content="CFL-Based Tournament Source" /> 
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

<!-- ================================================ -->
<!-- header and navbar                                -->
<!-- ================================================ -->

<?php get_pol_navbar(); ?>

<!-- ================================================ -->
<!-- content                                          -->
<!-- ================================================ -->

<div class="container-fluid content-section">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <h1>Melee Tournaments & Events</h1>
        <p>Polarity currently runs an ongoing weekly series in Orlando, Florida called CFL Smackdown.
           It is held at Campus Cards & Games every Monday & Tuesday night, with Melee featured on Monday
           nights. Turnout each week can reach upwards of 60-75 entrants, and it features some of the best 
           players in the world.<br /><br />
           
           We also hold monthly CFL Smackdown tournaments in the same location. Entrants for Melee at these monthly
           events can easily reach 100 or more people.<br /><br />
           
           Click <a href="events_calendar.html">here</a> to see our event calendar.<br /><br />
           
           To keep up with our events, follow us and subscribe to our events on <a href="index.html">Facebook</a>.
        </p> 
      </div>

      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 hidden-xs">
        <img class="img-responsive" src="images/hands.jpg" />
      </div>

    </div>           
  </div>
</div>

<!-- ================================================ -->
<!-- /content                                         -->
<!-- ================================================ -->

<!-- ================================================ -->
<!-- footer                                           -->
<!-- ================================================ -->

<?php pol_footer(); ?>

<!-- ================================================ -->
<!-- /footer                                          -->
<!-- ================================================ -->

<!-- =================================================================== -->
</body>
<!-- =================================================================== -->

</html>
