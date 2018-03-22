<?php
	include 'header.php';
?>

<body>
	<div class="achtergrond-instellingen">	   
	      <div class="main-title-block">
	      		<h1 class="title text-center">Instellingen</h1>
	      </div>

	<div class="container">
  		<div class="col-12 spacing-top">
		  	<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<div class="row">
			    		<div class="col-9">
			    			<p class="balkinhoud">Push notificaties</p>
			    		</div>
			    		<div class="col-1">
			    			<div class="balkinhoud">
			    				<label class="switch">
								  <input type="checkbox">
								  <span class="slider round"></span>
								</label>
			    			</div>
			    		</div>
			    	</div>
			    </div>
			</div>

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<div class="row">
			    		<div class="col-9">
			    			<p class="balkinhoud">Live locatie</p>
			    		</div>
			    		<div class="col-1">
			    			<div class="balkinhoud">
			    				<label class="switch">
								  <input type="checkbox">
								  <span class="slider round"></span>
								</label>
			    			</div>
			    		</div>
			    	</div>
		    	</div>
			</div>

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<div class="row">
			    		<div class="col-6">
			    			<p class="balkinhoud">Postcodewijzigen</p>
			    		</div>
			    		<div class="col-3">
  							<input type="text" placeholder="9742KT" class="wijzigpostcode balkinhoud">
			    		</div>
			    		<div class="col-1">
							<button type="button" class="btn btn-primary btn-sm balkinhoud">Wijzig</button>
			    		</div>
			    	</div>
		    	</div>
			</div>

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<p>Voorwaarden en privacy</p>
		    	</div>
			</div>

			<div class="row">
		    	<div class="col-12 balkinstellingen">
		    		<p>Uitloggen</p>
		    	</div>
			</div>
		</div>
	</div>	


<?php
	include 'footer.php';
	include 'menu.php';
?>