<?php
		// Databaseconnectie
	  DEFINE('DB_USERNAME', 'st320757');
	  DEFINE('DB_PASSWORD', '7cJvSwfw');
	  DEFINE('DB_HOST', 'st320757.cmd17c.cmi.hanze.nl');
	  DEFINE('DB_DATABASE', 'st320757');

	  	// make connection 
	  $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		// Check connection
	  if (mysqli_connect_error()) {
	    die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
	  }
	  $mysqli->close();

	// vaste gegevens database
	$emailBedrijf = 'w.b.h.muurling@st.hanze.nl';

?>