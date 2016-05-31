<?php function get_pol_navbar() { ?>
<!-- <header> -->
<div class="container">

  <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 logo">
      <a href="/2/">
        <img class="center-block" src="images/polarity_logo.png" alt="Polarity: Tournament and Streaming Exellence" />
      </a> 
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
  <div class="col-xs-12 col-sm-7 col-sm-offset-2 col-md-6 ol-md-offset-3 col-lg-5 col-lg-offset-4 stream-badge">
    <ul>
      <li class="status">Stream Status: <a href="https://www.twitch.tv/polaritygg">Live!</a></li>
      <li class="title hidden-xs"><?php echo("$stream_title") ?></li>
      <li class="game">Streaming <b><?php echo("$current_game") ?></b> to <?php echo("$viewers")?> viewers!</li>
    </ul>
  </div>
 
</div>

  <?php } else { ?>

  <div class="col-xs-12 col-sm-5 col-sm-offset-4 col-md-4 ol-md-offset-5 col-lg-4 col-lg-offset-5 stream-badge offline">
    <ul>
      <li class="status">Stream Status: Offline</a></li>
      <li class="game"><a href="https://www.twitch.tv/polaritygg">Click here to follow our Twitch Channel!</a></li>           
    </ul>
  </div>
 
</div>

<?php } ?>
<div class="nav_wrapper">
<nav id="nav" class="nav navbar-default" data-spy="affix">
  <div class="container-fluid" id="navbar-container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#polarity_navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
            
    <div class="collapse navbar-collapse no-padding" id="polarity_navbar">
      <ul class="nav nav-justified">
        <li><a href="games">Games</a></li>
        <li><a href="events">Events</a></li>
        <li><a href="aml">AML</a></li>
        <li><a href="commentary">Commentary</a></li>
        <li><a href="news">News</a></li>
        <li><a href="partners">Partners</a></li>
        <li><a href="about">About</a></li>
        <li><a href="contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>
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
          <h2>About Polarity</h2>
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
            <h3 class="centered">Follow Us</h3>
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
<!--  
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

    </div> -->

  </div>
</div>

</footer>

<?php } ?>

<?php 

/* @kelly */
function get_kelly_facts() {
$kelly_fact_a = array(
  "Favorite Smasher: ",
  "Favorite Movie: ",
  "Favorite TV Show: ",
  "Favorite Band: ",
  "Favorite LoL Team: ",
  "Favorite Overwatch Streamer: ",
  "Favorite Book: ",
  "Favorite Pokemon: ",
  "Favorite Speedrunner: ",
  "Favorite Animes: ",
);

$kelly_fact_b = array(
  "Colbol (duh)",
  "Beauty and the Beast",
  "Game of Thrones",
  "Daft Punk",
  "CLG",
  "A_Seagull",
  "Game of Thrones",
  "Vaporeon",
  "Zfg",
  "Gurren Lagann & Sailor Moon",
);
$index = rand(0, count($kelly_fact_a));
return $kelly_fact = "<b>" . $kelly_fact_a[$index] . "</b>" . $kelly_fact_b[$index];
} 

/* @colin */
function get_colin_facts() {
$colin_fact_a = array(
  "Favorite Smash Event: ",
  "Favorite Movie: ",
  "Favorite Fast Food: ",
  "Favorite Diablo 3 Class: ",
  "Favorite Hearthstone Streamer: ",
  "Favorite Move in Melee: ",
  "Favorite Book: ",
  "Favorite Pokemon: ",
  "Favorite Speedrunner: ",
  "Favorite Anime: ",
);

$colin_fact_b = array(
  "Genesis 1",
  "The Prestige",
  "Checkers",
  "Witch Doctor",
  "StrifeCro",
  "Samus' Uptilt",
  "Ender's Game",
  "Sneasel",
  "Zfg",
  "Steins;Gate",
);
$index = rand(0, count($colin_fact_a));
return $colin_fact = "<b>" . $colin_fact_a[$index] . "</b>" . $colin_fact_b[$index];
} 

/* @lindsay */
function get_lindsay_facts() {
$lindsay_fact_a = array(
  "Favorite Movie: ",
  "Favorite Band: ",
  "Favorite Album: ",
  "Favorite Speedrunner: ",
  "Favorite Book: ",
  "Favorite TV Show: ",
  "Favorite Pokemon: ",
  "Favorite Smasher: ",
  "Favorite Beatles Album: ",
  "Favorite Mixed Drink: ",
);

$lindsay_fact_b = array(
  "Across the Universe",
  "The Strokes",
  "In Rainbows",
  "iateyourpie",
  "The Phantom Tollbooth",
  "Bojack Horseman",
  "Spoink",
  "Armada",
  "Rubber Soul",
  "Piña Coladas",
);
$index = rand(0, count($lindsay_fact_a));
return $lindsay_fact = "<b>" . $lindsay_fact_a[$index] . "</b>" . $lindsay_fact_b[$index];
} 

/* @gavin */
function get_gavin_facts() {
$gavin_fact_a = array(
  "Favorite Smashers: ",
  "Favorite Movie: ",
  "Favorite Fast Food: ",
  "Favorite Graphic Novel: ",
  "Favorite Band: ",
  "Favorite TV Show: ",
  "Favorite DotA Team: ",
  "Favorite Pokemon: ",
  "Favorite DotA Hero: ",
  "Favorite Anime: ",
);

$gavin_fact_b = array(
  "Plup & Armada",
  "Star Wars: The Empire Strikes Back",
  "Five Guys",
  "Scott Pilgrim Series",
  "Coheed and Cambria",
  "Firefly",
  "OG",
  "Jolteon",
  "Rubick",
  "Bakemonogatari",
);
$index = rand(0, count($gavin_fact_a));
return $gavin_fact = "<b>" . $gavin_fact_a[$index] . "</b>" . $gavin_fact_b[$index];
} 

/* @mohamed */
function get_mohamed_facts() {
$mohamed_fact_a = array(
  "Favorite Smasher: ",
  "Favorite TV Show: ",
  "Favorite Band: ",
  "Favorite SCII Player: ",
  "Favorite CSGO Team: ",
  "Favorite Pokemon: ",
  "Favorite Speedrunner: ",
  "Favorite Anime: ",
  "Favorite Starcraft Unit: ",
  "Favorite GoT Character: ",
);

$mohamed_fact_b = array(
  "Chudat",
  "Game of Thrones",
  "Two Door cinema Club",
  "Liquid`Snute",
  "Cloud9",
  "Electrode",
  "thePsychoRipper",
  "Gurren Lagann",
  "Lurkers",
  "Margaery",
);
$index = rand(0, count($mohamed_fact_a));
return $mohamed_fact = "<b>" . $mohamed_fact_a[$index] . "</b>" . $mohamed_fact_b[$index];
}

/* @gabe */
function get_gabe_facts() {
$gabe_fact_a = array(
  "Favorite Smasher: ",
  "Favorite Movie: ",
  "Favorite Fast Food: ",
  "Favorite TF2 Class: ",
  "Favorite Video Game ST: ",
  "Favorite TV Show: ",
  "Favorite Book: ",
  "Favorite Pokemon: ",
  "Favorite Move in PM: ",
  "Favorite Anime",
);

$gabe_fact_b = array(
  "Plup",
  "Kung Pow! Enter the Fist",
  "McDonald's (specically the McChicken)",
  "Pyro",
  "Sonic 3",
  "Mr. Bean",
  "Ender's Game",
  "Scizor",
  "Rob's Gyro",
  "Fullmetal Alchemist: Brotherhood",
);

$index = rand(0, count($gabe_fact_a));
return $gabe_fact = "<b>" . $gabe_fact_a[$index] . "</b>" . $gabe_fact_b[$index];
} 

/* @matt */
function get_matt_facts() {
$matt_fact_a = array(
  "Favorite Movie: ",
  "Favorite Fast Food: ",
  "Favorite Book: ",
  "Favorite TV Show: ",
  "Favorite Smasher: ",
  "Favorite Hearthstone Streamer: ",
  "Favorite DotA 2 Team: ",
  "Favorite DotA 2 Player: ",
  "Favorite Pokemon: ",
  "Favorite Ice Cream: ",
  "Favorite Band: ",
);

$matt_fact_b = array(
  "The Emperor's New Groove",
  "Chipotle",
  "The Mill on the Floss",
  "Futurama",
  "Harriet",
  "Kripparian",
  "Team Empire",
  "Resolution",
  "Zapdos",
  "Cookie Dough",
  "Motion City Soundtrack",
);
$index = rand(0, count($matt_fact_a));
return $matt_fact = "<b>" . $matt_fact_a[$index] . "</b>" . $matt_fact_b[$index];
} 

?>