	<!DOCTYPE HTML>
	
	<html lang="en">
	
	<?php
	session_start(); // to allow variable transfer between pages
	include("config.php");

 	// Connect to Database
 	$dbconnect=mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if(mysqli_connect_error()) {
	echo "Connection failed:".mysqli_connect_error();
	exit;
	}

	?>
	
	<!-- Container -->
	<div class="container">
		<!-- Header -->
		<div class="header">
			<div class="row">
				<div class="col-sm-3">
					<img id="icon" src="/img/logo.jpg"/>
				</div>
				<div class="col-sm-9">
					<h1 class="jumbotron text-center">
						Cubist</h1>
					<p>This is my first website</p>
				</div>
			</div>
		</div>

		