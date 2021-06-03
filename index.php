<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Cubist.Timer</title>
	<link href="/css/data_style.css" rel="stylesheet" type="text/css" />
	<link href="/css/responsive.css" rel="stylesheet" type="text/css" />

	<!-- Bootstrap files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">

	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">

	</script>

	<!--FAVICON ICON-->
	<link rel="icon" type="image/jpg" href="/img/logo.jpg">

</head>

<body>
	<script src="/scripts/script.js">

	</script>

	<?php include("topbit.php") ?>

		<!-- Contents -->
		<!-- Using Bootstrap grid ideas Source:https://www.w3schools.com/bootstrap4/bootstrap_grid_basic.asp -->
		<h2>Responsive Columns</h2>
		<p>Resize the browser window to see the effect.</p>
		<p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
		<div class="row">
			<div class="col-sm-3">
				<h3>Playstation.Com</h3>
			</div>
			<div class="col-sm-3">
				<h3>Xbox.Com</h3>
			</div>
			<div class="col-sm-3">
				<h3>Gamespot.Com</h3>
			</div>
			<div class="col-sm-3">
				<h3>Kotaku.Com</h3>
			</div>
		</div>

	<?php include ("bottombit.php") ?>
</body>

</html>