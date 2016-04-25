<!DOCTYPE html>
<html lang="en-US">
<html>

<!-- =================================================================== -->
<head>
<!-- =================================================================== -->

<title>Polarity: About</title>
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

<!-- begin top -->
<div class="container-fluid content-section" id="top">
  <div class="container">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
      <div class="content-box">
        <h1 style="text-align: center;">About Polarity</h1>
        <p>In nature, polarity is created when opposites come together, and our community 
        is a reflection of that polarity. We are your source for premiere central Florida 
        events.<br /><br />                

        Polarity is for the players. We want the best for every player, no matter if 
        you're the best player, or if you could stand to improve. We want everyone's 
        tournament experience to be the best, and will treat every players' concerns 
        equally.<br /><br />  

        Polarity is for the viewers. Whether you tune into our stream every time we 
        broadcast, or if you're only here once, we want your time spent watching our 
        stream to be enjoyable and memorable.<br /><br />  

        Polarity is who we are. We consider all ideas from our own staff and from the 
        community, and we use every piece of information we can to make the best decisions 
        for our players, for our stream, and for the community.
        </p> 

        <div class="container-fluid no-padding">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
            <div class="content-box">
              <h1>Tournaments Team</h1>
                <ul>
                  <li>Kelly</li>
                  <li>Colin</li>
                  <li>Lindsay</li>
                </ul>
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
            <div class="content-box">
              <h1>Production Team</h1>
                <ul>
                  <li>Gavin</li>
                  <li>Mohamed</li>
                  <li>Gabriel B.</li>
                </ul>
            </div>
          </div>

          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
            <div class="content-box" style="padding-bottom: 22px;">
              <h1>Operations Team</h1>
                <ul>
                  <li><a href="#matt">Matt</a></li>
                  <li>Gabriel N.</li>
                </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>
<!-- end top -->

<!-- begin matt -->
<div class="container-fluid content-section" id="matt">
  <div class="container">

    <div class="col-xs-12 col-sm-4 col-sm-4 col-lg-4 no-padding">
      <div class="content-box">
        <img src="images/staff/Matt_Kiep.png" alt="Twitch.tv"/>
      </div>
    </div>

    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding">
      <div class="content-box">
        <h1>Matt "Moses" Kiep</h1>
        <p style="margin-bottom: 0px;">Matt has played video games for forever. He began playing Melee casually upon 
        release in 2001, and picked it up competitively in 2009 after meeting Harriet 
        and Rockcrock at UF. After that, he organized Smash fests and tournaments in 
        Gainesville. He graduated in 2012 and moved to Orlando soon after to work full 
        time.<br /><br />

        In summer 2015, He joined the team that would become Polarity. He started the 
        Amateur Melee League with Fearless later that year.<br /><br />

        In the past he has played Halo and Halo 2, both competitively. He has also played 
        Diablo 2 and Starcraft extensively. Matt currently plays DotA (occasionally 
        competitively) and Hearthstone casually.<br /><br />

        He has an affinity for pop-punk and Taylor Swift. You can follow him 
        on twitter at <a href="https://www.twitter.com/DoTheMoses">twitter.com/DoTheMoses</a>.<br /><br />

        <b>Birthday:</b> May 8th<br />
        <b>Favorite Game:</b> Super Smash Brothers Melee<br />
        <p style="margin-bottom: 0px;" id="matt_script"></p>

        <script type="text/javascript">
          
          var matt_fact = [
            "Favorite Movie: The Emperor's New Groove",
            "Favorite Fast Food: Chipotle",
            "Favorite Book: The Mill on the Floss",
            "Favorite TV Show: Futurama",
            "Favorite Smasher: Harriet",
            "Favorite Hearthstone Streamer: Kripparian",
            "Favorite DotA 2 Team: Team Empire",
            "Favorite DotA 2 Player: Resolution",
            "Favorite Pokemon: Zapdos",
            "Favorite Ice Cream: Cookie Dough",
            "Favorite Band: Motion City Soundtrack",
          ];

          function myFunction() {
          var x = document.getElementById("matt_script")
          x.innerHTML = matt_fact[Math.floor((Math.random() * 10) + 1)];
          }

          window.onload = function() {
            myFunction();
          };
        </script> 

        <a href="#top" style="text-align: center;">Back to top</a>
        </p> 
      </div>
    </div>

  </div>
</div>
<!-- end matt -->

<!-- ========================================================= -->
<!-- footer                                                    -->
<!-- ========================================================= -->

<?php get_pol_footer(); ?>

<!-- =================================================================== -->
</body>
<!-- =================================================================== -->

</html>
