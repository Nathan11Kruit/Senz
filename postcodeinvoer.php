<?php
	include 'header.php';
?>

<body>
	<div class="achtergrond-postcodescherm">
		<H2 class="kop wit arial">Voer je postcode in</H2>
		<H4 class="plat wit arial">om de dichtstbijzijnde container te vinden.</H4>

		<form action="/action_page.php">
		  <input type="text" class="postcodeform" name="postcode" placeholder="Bijv. 9742KT">
		</form>


		<div class="col-md-4 text-center">	
			<button class="btn btn-primary knoptekst postcodeknop">Verder</button>
		</div>
	    
	</div>
<?php
	include 'footer.php';
?>