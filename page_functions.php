<?php function get_pol_navbar() { ?>

<!-- <header> -->
<div class="container">
  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 no-padding">
    <div id="header-logo">
      <a href="/2/">
        <img src="images/polarity_logo.png" alt="Polarity: Tournament and Streaming Exellence" />
      </a> 
    </div>
  </div>
    
<?php
  $channel = "polaritygg";
  try {
    $api = json_decode(file_get_contents("https://api.twitch.tv/kraken/streams/" . $channel), true);
    $streaming = (is_array($api['stream']) ? true : false);
    $current_game = $api['stream']['channel']['game'];
    $channel_title = $api['stream']['channel']['display_name'];
    $stream_title = $api['stream']['channel']['status'];
    $viewers = $api['stream']['viewers'];
  } catch (Exception $e) {
    $api = array();
    $streaming = false;
  }

  if($streaming) { ?>
  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding test">
    <div class="stream-badge">

      <div id="left-bax">
        <img src="images/fav_icon.png" />
      </div>
      <div id="right-bax">
        <ul style="list-style-type: none;">
          <li class="status">Stream Status: <a href="https://www.twitch.tv/polaritygg">Live!</a></li>
          <li class="title"><?php echo("$stream_title") ?></li>
          <li class="game"><?php echo("$current_game") ?></li>
          <li class="viewers"><?php echo("$viewers") ?> viewers</li>    
        </ul>
      </div>
 
    </div>
  </div>
</div>

  <?php } else { ?>

  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 no-padding test">
    <div class="stream-badge">
    <a href="https://www.twitch.tv/polaritygg">
      <ul>
        <li style="display:inline"><img src="images/fav_icon.png" style="height: 40px; width: 40px;" /></li>
        <li style="display:inline">
          <ul style="list-style-type: none;">
            <li class="status">Stream Status: Offline</li>
            <li class="title">Follow us on twitch to be notified when we go live</li>
            <li class="game"><?php echo("$current_game") ?></li>
            <li class="viewers"><?php echo("$viewers") ?> viewers</li>    
          </ul>
        </li>
      </ul>
    </a>   
    </div>
  </div>     
  </div>

</div>

<?php } ?>

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
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Play<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="games">Games</a></li>
            <li><a href="events">Events</a></li>
            <li><a href="aml">Amateur Melee League</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Media<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="stream">Stream</a></li>
            <li><a href="commentary">Commentary</a></li>
            <li><a href="news">News</a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Polarity<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="partners">Partners</a></li>
            <li><a href="about">About</a></li>
            <li><a href="contact">Contact</a></li> 
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- </header> -->

<?php
}

function get_pol_footer() {
?>

<footer>

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

    </div>

  </div>
</div>

</footer>

<?php } ?>
