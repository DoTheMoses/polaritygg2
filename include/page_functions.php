<?php function get_pol_navbar() { ?>

<div>
<div id="header-logo">
  <a href="/2/"><img src="images/polarity_logo.png" alt="Polarity: Tournament and Streaming Exellence" class="no-svg" /></a> <!-- add svg and no svg options here, see comment below-->
<iframe src="http://streambadge.com/twitch/custom/2b2b2b/930000/808080/polaritygg/" style="border:none;height:4em;width:100%"></iframe>
</div>
</div>

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
            <li><a href="wiiu">Super Smash Brothers WiiU</a></li>
            <li><a href="pm">Project Melee</a></li> 
            <li><a href="melee">Super Smash Brothers Melee</a></li>
            <li><a href="64">Super Smash Brothers (64)</a></li> 
          </ul>
        </li>
        <li><a href="events">Events</a></li>
        <li><a href="aml">AML</a></li>
        <li><a href="partners">Partners</a></li>
        <li><a href="news">News</a></li>
        <!-- <li><a href="store">Store</a></li> -->
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php
}

function get_pol_footer() {
?>

<div class="container-fluid" id="Footer">
  <div class="container">

    <div class="container footer-top-row no-padding no-margin">

      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
        <div class="footer-about">
          <h1>About Polarity</h1>
          <p>Polarity is an Orlando, Florida based gaming organization specializing
          in Super Smash Brothers tournaments and production for other gaming events. 
          We've got a talented staff that has grown with the community.
          Find out more at <a href="/">www.polarity.gg</a>.
          </p>
        </div>
      </div>

      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="padding-top: 13px;">

        <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
          <div class="footer-contact-link">
          <div class="no-padding success">
            <a href="contact">CONTACT US</a>
          </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
          <div class="footer-follow-us">
            <h1 class="centered">Follow Us</h1>
            <div class= "container-fluid centered no-padding">
            <ul class="no-padding">
              <li><a class="twitter" href="https://www.twitter.com/PolarityGG" target="_blank"><img src="images/social_media/twitter_logo.png" alt="Twitter" /></a></li>
              <li><a class="instagram" href="https://instagram.com/PolarityGG" target="_top"><img src="images/social_media/instagram_logo.png" alt="Instagram" /></a></li>
              <li><a class="facebook" href="https://www.facebook.com/PolarityGG" target="_blank"><img src="images/social_media/facebook_logo.png" alt="Facebook" /></a></li>
              <li><a class="twitch" href="https://www.twitch.tv/PolarityGG" target="_blank"><img src="images/social_media/twitch_logo.png" alt="Twitch" /></a></li>
              <li><a class="youtube" href="https://www.youtube.com/PolarityGG" target="_blank"><img src="images/social_media/youtube_logo.png" alt="YouTube" /></a></li>
            </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

    <hr />

    <div class="container footer-bottom-row no-padding no-margin">

      <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <div class="footer-copy-rights">
          <div class="content">
            <p>Polarity is a registered trademark of Polarity, Inc.<br />
            All rights reserved.
            </p>
          </div>
        </div>
      </div>

<!--       <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
          <div class="footer-rhs-links">
            <div class="region region-footer-other-links-mandator-link">
                <div class="content">
                  <ul class="footer-rhs-links-two no-padding">
                  <li><a href="joinpolarity.html">Join the Polarity Team</a> | </li>
                  <li><a href="/terms-use">Terms of Use</a> | </li>
                  <li><a href="/accessibility-statement">Accessibility Statement</a> | </li>
                  <li><a href="/privacy-policy">Privacy Policy</a> | </li>
                  <li><a href="/corporate-social-responsibility-policy">CSR Policy</a> | </li>
                  <li><a href="/cookie-policy">Cookie Policy</a> | </li>
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
