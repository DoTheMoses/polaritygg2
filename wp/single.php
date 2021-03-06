<!DOCTYPE html>
<html lang="en-US">
<html>

<!-- ========== -->
<!-- To DO:     --> 
<!-- XHTML?     -->
<!-- ========== -->

<!-- ================================================ -->
<!-- begin head                                       -->
<!-- ================================================ -->

<head>

  <title>Polarity</title>
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

</head>

<!-- ================================================ -->
<!-- begin body                                       -->
<!-- ================================================ -->

<body>

<!-- ================================================ -->
<!-- begin header and navbar                          -->
<!-- ================================================ -->
<div>
  <div id="header-logo">
    <a href="index.html"><img src="images/polarity_logo.png" alt="Polarity: Tournament and Streaming Exellence" class="no-svg" /></a> <!-- add svg and no svg options here, see comment below-->
  </div>
</div> 

<nav class="nav navbar-default" data-spy="affix" data-offset-top="75">
  <div class="container-fluid" style="padding:0px">
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
            <li><a href="melee.html">Super Smash Brothers Melee</a></li>
            <li><a href="wiiu.html/">Super Smash Brothers WiiU</a></li>
            <li><a href="pm.html/">Project Melee</a></li> 
            <li><a href="64.html/">Super Smash Brothers (64)</a></li> 
          </ul>
        </li>
        <li><a href="events.html">Events</a></li>
        <li><a href="aml.html">Amateur Melee League</a></li>
        <li><a href="partners.html">Partners</a></li>
        <li><a href="blog_wp.php">Announcements</a></li>
        <li><a href="store.html">Store</a></li>
        <li><a href="about.html">About</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- ================================================ -->
<!-- end navbar                                       -->
<!-- ================================================ -->

<?php 
/* Short and sweet */
define('WP_USE_THEMES', true);
require('../wp/wp-blog-header.php');
?>

<?php
$posts = get_posts('numberposts=10&order=ASC&orderby=post_title');
foreach ($posts as $post) : setup_postdata( $post ); ?>
<?php the_date(); echo "<br />"; ?>
<?php the_title(); ?>    
<?php the_excerpt(); ?> 
<?php
endforeach;
?>

<!-- ================================================ -->
<!-- begin footer                                     -->
<!-- ================================================ -->

<div class="section" id="FooterBottom" data-type="footer">
  <section id="Footer" class="container-fluid">
    <div class="container">

      <div class="row footer-about-company-row">

        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">

          <div class="footer-about-company">
            <div class="region region-footer-about-mindtree">
                <div class="content">
                  <h2>About Polarity</h2> <!-- size doesnt change with window width -->
                  <p>Polarity is an Orlando, Florida based gaming organization specializing
                  in Super Smash Brothers tournaments and production for other gaming events. 
                  We've got a talented staff that has grown with the community.
                  Find out more <a href="index.html">here</a>.</p> <!-- size changes to bigger size with bigger window font -->
                </div>
              </div>
          </div>
        </div>  
        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">

          <div class="row footer-contact-row">
            <div class="region region-footer-contactus-social-links">
                <div class="content">
                  <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                    <div class="footer-contact-link">
                      <a href="/contact-us">CONTACT US</a>
                    </div>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 footer-follow-us-sep">
                    <div class="footer-follow-us">
                      <h1>Follow Us</h1>
                      <ul>
                        <li><a class="twitter" href="https://www.twitter.com/PolarityGG" target="_blank"><img src="images/social_media/twitter_logo.png" alt="Twitter"></></a></li>
                        <li><a class="instagram" href="https://instagram.com/PolarityGG" target="_top"><img src="images/social_media/instagram_logo.png" alt="Instagram"></></a></li>
                        <li><a class="facebook" href="https://www.facebook.com/PolarityGG" target="_blank"><img src="images/social_media/facebook_logo.png" alt="Facebook"></></a></li>
                        <li><a class="twitch" href="https://www.twitch.tv/PolarityGG" target="_blank"><img src="images/social_media/twitch_logo.png" alt="Twitch"></></a></li>
                        <li><a class="youtube" href="https://www.youtube.com/PolarityGG" target="_blank"><img src="images/social_media/youtube_logo.png" /></a></li>
                      </ul>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
           
      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="footer-copy-rights">
            <div class="region region-footer-trademark-copyright">
                <div class="content">
                  <p>Polarity is a registered trademarks of Polarity, Inc.</p>
                  <p>All rights reserved.</p>
                </div>
              </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="footer-rhs-links">
            <div class="region region-footer-other-links-mandator-link">
                <div class="content">
                  <ul>          
                    <li><a href="joinpolarity.html">Join the Polarity Team</a></li>
                  </ul>
                  <ul class="footer-rhs-links-two">
                    <li><a href="/terms-use">Terms of Use</a></li>
                    <li><a href="/accessibility-statement">Accessibility Statement</a></li>
                    <li><a href="/privacy-policy">Privacy Policy</a></li>
                    <li><a href="/corporate-social-responsibility-policy">CSR Policy</a></li>
                    <li><a href="/cookie-policy">Cookie Policy</a></li>
                    <li><a href="/sitemap">Sitemap</a></li>
                  </ul>  
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- ================================================ -->
<!-- end footer                                       -->
<!-- ================================================ -->

</body>

<!-- ================================================ -->
<!-- end body                                         -->
<!-- ================================================ -->

</html>