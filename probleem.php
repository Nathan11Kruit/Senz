<?php
	include 'header.php';
?>
<a href="index.php"><img class="center-image back" src="images/whitearrow.png"></a><div class="main-title-block"><h1 class="title text-center">Probleem melden</h1></div>

  <div class="container">
    <div class="row spacing-top probleemcontainer">
      <div class="col-12 date">
          <p class="probleemtext">Help ons verbeteren door problemen tijdig door te geven. Is een container onverhoopt vol geraakt of loopt u tegen een ander probleem aan? Meld het ons.</p>
              <form action="">
              <input class="probleemform" type="text" name="naam" placeholder="Uw naam"><br>
              <input class="probleemform" type="email" name="email" placeholder="Uw e-mailadres"><br>
              <input class="probleemform" type="number" name="conainternummer" placeholder="Containernummer"><br>
                <input class="probleemradio" type="radio" name="probleem1" value="1"> Container zit vol <br>
                <input class="probleemradio" type="radio" name="probleem1" value="2"> Container kan niet sluiten/openen <br>
                <input class="probleemradio" type="radio" name="probleem1" value="3"> Ligt afval naast de container <br>
                <input class="probleemradio" type="radio" name="probleem1" value="4" checked> Anders: <br>
              <textarea class="probleemarea" rows="4" placeholder="Licht uw antwoord toe"></textarea>
              <div class="col-md-4 text-center">
                <input type="submit" class="koptekst probleemsubmit" value="Verzenden">
              </div>
            </form>
      </div>
    </div>
  </div>

<?php include 'menu.php'; ?>

<?php
	include 'footer.php';
?>
