<?php function get_pol_navbar() { ?>

<!-- <div class="row"> -->
  <div id="header-logo">
    <a href="index.php"><img src="images/polarity_logo.png" alt="Polarity: Tournament and Streaming Exellence" class="no-svg" /></a> <!-- add svg and no svg options here, see comment below-->
  </div>
<!-- </div>  -->

<nav class="nav navbar-default" data-spy="affix" data-offset-top="75">
  <div class="container-fluid" id="navbar-container" style="padding:0px">
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
            <li><a href="melee.php">Super Smash Brothers Melee</a></li>
            <li><a href="wiiu.php/">Super Smash Brothers WiiU</a></li>
            <li><a href="pm.php/">Project Melee</a></li> 
            <li><a href="64.php/">Super Smash Brothers (64)</a></li> 
          </ul>
        </li>
        <li><a href="events.php">Events</a></li>
        <li><a href="aml.php">Amateur Melee League</a></li>
        <li><a href="partners.php">Partners</a></li>
        <li><a href="blog_wp.php">Announcements</a></li>
        <li><a href="store.php">Store</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
}

function get_pol_footer() {
?>

<div class="container-fluid" id="Footer">
  <div id="Footer" class="container">

    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
      <div class="footer-about">
        <h1>About Polarity</h1>
        <p>Polarity is an Orlando, Florida based gaming organization specializing
        in Super Smash Brothers tournaments and production for other gaming events. 
        We've got a talented staff that has grown with the community.
        Find out more <a href="index.php">here</a>.
        </p>
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
              <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
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
           
      <div class="row">

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="footer-copy-rights">
            <div class="region region-footer-trademark-copyright">
                <div class="content">
                  <p>Polarity is a registered trademark of Polarity, Inc.</p>
                  <p>All rights reserved.</p>
                </div>
              </div>
          </div>
        </div>
<!--         <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
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
        </div> -->
    </div>
  </div>
</div>

<?php } ?>
