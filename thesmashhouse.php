<!DOCTYPE html>
<html lang="en-US">
  
<!-- =================================================================== -->
<head>
<!-- =================================================================== -->

<title>Polarity: The Smash House</title>
<meta charset="utf-8" />
<meta name="description" content="CFL-Based Tournament & Production Source" />
<meta name="keywords" content="Polarity, polarity, melee, ssbm, smash 4, sfv" />

<?php include("page_functions.php"); ?>

<?php get_pol_head_section(); ?> 

<!-- ========================================================= -->
<!-- content                                                   -->
<!-- ========================================================= -->

<!-- the players -->
<div class="container-fluid players-section-title">
  <div class="container">
    <h1>THE PLAYERS</h1>
  </div>
</div>

<script>
$(document).ready(function(){
    $(".grid-hbox").hover(function(){
        $(".player-big-picture").css("background-color", "yellow");
        }, function(){
        $(".player-big-picture").css("background-color", "pink");
    });
});

$(document).ready(function(){
    $(".grid-colbol").hover(function(){
        $("BIO").html("Hovered!");
        }, function(){
        $("BIO").html("UnHovered!");
    });
});



</script>

<script>
function displayHbox()     { document.getElementById("bio_title").innerHTML = "Liquid`Hungrybox";
                             document.getElementById("bio").innerHTML = "Juan loves Chipotle.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/colbolbig.jpg' alt='Rula' />" }

function displayPlup()     { document.getElementById("bio_title").innerHTML = "PG | Plup";
                             document.getElementById("bio").innerHTML = "Plup is a bully.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/plupbig.jpg' alt='Rula' />" }
 
function displayColbol()   { document.getElementById("bio_title").innerHTML = "SS | Colbol";
                             document.getElementById("bio").innerHTML = "Colin is ballin'.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/colbolbig.jpg' alt='Rula' />" }

function displayWizzy()    { document.getElementById("bio_title").innerHTML = "COG | Wizzrobe";
                             document.getElementById("bio").innerHTML = "Wizzy is the shizzy.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/rulabig.jpg' alt='Rula' />" }

function displayDfox()     { document.getElementById("bio_title").innerHTML = "DruggedFox";
                             document.getElementById("bio").innerHTML = "Druggedfox plays shiek.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/colbolbig.jpg' alt='Rula' />" }

function displayGahtzu()   { document.getElementById("bio_title").innerHTML = "Gahtzu";
                             document.getElementById("bio").innerHTML = "Gahtzu is 20GX.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/rulabig.jpg' alt='Rula' />" }

function displayBlea()     { document.getElementById("bio_title").innerHTML = "Blea Gelo";
                             document.getElementById("bio").innerHTML = "Ole ole ole ole.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/colbolbig.jpg' alt='Rula' />" }

function displayChops()    { document.getElementById("bio_title").innerHTML = "VS | Porkchops";
                             document.getElementById("bio").innerHTML = "Porkchops looks like Jesus.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/rulabig.jpg' alt='Rula' />" }


function displayGravy()    { document.getElementById("bio_title").innerHTML = "Gravy";
                             document.getElementById("bio").innerHTML = "Retired?"
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/colbolbig.jpg' alt='Rula' />" }

function displayKpan()     { document.getElementById("bio_title").innerHTML = "Kpan";
                             document.getElementById("bio").innerHTML = "From GA.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/rulabig.jpg' alt='Rula' />" }

function displayLinguini() { document.getElementById("bio_title").innerHTML = "Linguini";
                             document.getElementById("bio").innerHTML = "Is noodles.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/colbolbig.jpg' alt='Rula' />" }

function displayBaka()     { document.getElementById("bio_title").innerHTML = "Baka4Moe";
                             document.getElementById("bio").innerHTML = "I know nothing of this person.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/rulabig.jpg' alt='Rula' />" }

function displayPengie()   { document.getElementById("bio_title").innerHTML = "Pengie";
                             document.getElementById("bio").innerHTML = "Betrayed GA.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/colbolbig.jpg' alt='Rula' />" }

function displayNica()     { document.getElementById("bio_title").innerHTML = "Nicaboy";
                             document.getElementById("bio").innerHTML = "Betrayed SFL.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/rulabig.jpg' alt='Rula' />" }

function displayRula()     { document.getElementById("bio_title").innerHTML = "Rula";
                             document.getElementById("bio").innerHTML = "AHHHHHHH.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/rulabig.jpg' alt='Rula' />" }

function displayHarriet()  { document.getElementById("bio_title").innerHTML = "Harriet";
                             document.getElementById("bio").innerHTML = "Subscribe today to Harriet's method.";
                             document.getElementById("player_picture_big").innerHTML = "<img id='player_picture_big' class='img-responsive' src='images/thesmashhouse/harrietbig.jpg' alt='Rula' />" }

</script>

<div class="container-fluid players-grid">

    <div class="row">

      <div onmouseover="displayHbox()" class="col-xs-6 col-sm-1 col-md-1 col-lg-1 col-md-offset-2">
        <div class="box red">
          <h3>Hungrybox</h3>
        </div>
      </div>

      <div onmouseover="displayPlup()" class="col-xs-6 col-sm-1 col-md-1 col-lg-1">
        <div class="box red">        
          <h3>Plup</h3>
        </div>
      </div>   

      <div onmouseover="displayColbol()" class="col-xs-6 col-sm-1 col-md-1 col-lg-1">
        <div class="box red">        
          <h3>Colbol</h3>
        </div>
      </div>

      <div onmouseover="displayWizzy()" class="col-xs-6 col-sm-1 col-md-1 col-lg-1">
        <div class="box red">
          <h3>Wizzrobe</h3>
        </div>
      </div> 


      <div onmouseover="displayDfox()" class="col-xs-6 col-sm-1 col-md-1 col-lg-1">
        <div class="box blue">
          <h3>DruggedFox</h3>
        </div>
      </div>

      <div onmouseover="displayGahtzu()" class="box blue col-xs-6 col-sm-1 col-md-1 col-lg-1">
        <h3>Gahtzu</h3>
      </div>   

      <div onmouseover="displayBlea()" class="box blue col-xs-6 col-sm-1 col-md-1 col-lg-1">
        <h3>Blea Gelo</h3>
      </div>

      <div onmouseover="displayChops()" class="box blue col-xs-6 col-sm-1 col-md-1 col-lg-1">
        <h3>Porkchops</h3>
      </div> 

    </div>

    <div class="row">

      <div onmouseover="displayGravy()" class="box red col-xs-1 col-sm-1 col-md-1 col-lg-1 col-md-offset-2">
        <h3>Gravy</h3>
      </div>

      <div onmouseover="displayKpan()" class="box red col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <h3>Kpan</h3>
      </div>   

      <div onmouseover="displayLinguini()" class="box red col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <h3>Linguini</h3>
      </div>

      <div onmouseover="displayBaka()" class="box red col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <h3>Baka4Moe</h3>
      </div> 


      <div onmouseover="displayPengie()" class="box blue col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <h3>Pengie</h3>
      </div>

      <div onmouseover="displayNica()" class="box blue col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <h3>Nicaboy</h3>
      </div>   

      <div onmouseover="displayRula()" class="box blue col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <h3>Rula</h3>
      </div>

      <div onmouseover="displayHarriet()"class="box blue col-xs-1 col-sm-1 col-md-1 col-lg-1">
        <h3>Harriet</h3>
      </div> 

    </div>


</div>

<div class="container-fluid players-info">

    <div class="row">

      <div id="player_picture_big" class="player-picture-big col-xs-4 col-sm-4 col-md-4 col-lg-4 col-sm-offset-2">
        <img class="img-responsive" src="images/thesmashhouse/rulabig.jpg" alt="Rula" />
      </div>

      <div class="player-bio col-xs-5 col-sm-5 col-md-5 col-lg-5 col-sm-offset-1">
        <h3 id="bio_title"> LIQUID`HUNGRYBOX</h3>
        <p id="bio">Hungrybox is a professional Super Smash Bros. Melee smasher from Orlando, 
        FL who currently resides in Atlanta, Georgia. He is widely considered to be
        the best Jigglypuff main in the world by a considerable margin. He is also 
        one of the top 6 players in the world due to consistent high placements at national events.
        </p>
      </div>




  </div>
</div>

<!-- =================================================================== -->
</body>
<!-- =================================================================== -->

</html>
