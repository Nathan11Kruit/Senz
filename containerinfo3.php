<?php include 'header.php'; ?>

<?php

$url = 'json/container3.json'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$containers = json_decode($data); // decode the JSON feed


?>

<body>

  <a href="index.php"><img class="center-image back" src="images/whitearrow.png"></a><div class="main-title-block"><h1 class="title text-center">Container 671</h1></div>

<div class="container">
  <div class="col-12 spacing-top">
	<div class="row">
    	<div class="col-12 "> <h6 class="title-block">Is de container al vol?</h6></div>
	</div>
	<div class="col-12 ">
	<div class="row date">
					<?php	echo "<h6>De huidige vulgraad is: </h6>" . $containers[0]->distance . "<br>";
							echo "<h6>Laatste meting: </h6>" . $containers[0]->date; 
			?>
	</div>
  </div>
 </div>

  <div class="col-12 spacing-top">
	<div class="row">
    	<div class="col-12 "> <h6 class="title-block">Verwachte ophaaldag</h6></div>
	</div>
	<div class="col-12">
	<div class="row date">
		<div class="text-center">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot-ophaaldag"></span>
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>
	</div>
  </div>
 </div>

  <div class="col-12 spacing-top">
	<div class="row">
    	<div class="col-12 "> <h6 class="title-block">Locatie</h6></div>
	</div>
	<div class="col-12 ">
	<div class="row date">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1271.8946052697713!2d6.55601429066752!3d53.222179209723826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c9cd45eb689603%3A0x382349948753999a!2sGrote+Rozenstraat%2C+Groningen!5e0!3m2!1snl!2snl!4v1521642485184" width="600" height="175" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
  </div>
 </div>



</div>
</div>
</div>
</div>
</div>


<?php include 'menu.php'; ?>

<?php include 'footer.php'; ?>




</div>
</div>
</div>
</div>

</div>
</div>
</body>
