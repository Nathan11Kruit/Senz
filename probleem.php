<?php
	include 'header.php';
?>
<body>
      <div class="main-title-block"><h1 class="title text-center">Probleem melden</h1></div>

  <div class="container">
    <div class="col-12 spacing-top">
      <div class="col-12 ">
        <div class="row date">
  <p>Help ons verbeteren door problemen tijdig door te geven. Is een container onverhoopt vol geraakt of loopt u tegen een ander probleem aan? Meld het ons.</p>
      <form action="/action_page.php">
      <input type="text" name="postcode" placeholder="Bijv. 9742KT">
    </form>


    <div class="col-md-4 text-center">  
      <button class="btn btn-primary knoptekst">Verder</button>
    </div>
        </div>
      </div>
    </div>
  </div>

<?php include 'menu.php'; ?>

<?php
	include 'footer.php';
?>