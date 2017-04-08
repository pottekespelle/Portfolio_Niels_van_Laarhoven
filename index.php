<!DOCTYPE html>
<html>
<head>
	<title>scrolldown site</title>
	<link rel="stylesheet" type="text/css" href="css/HeaderStyle.css">
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<meta name="viewport" content="width=device-width; initial-scale=1.0;">
</head>
<body>
<div class="container">
	<?php include"inc/header.php"; ?>

	<div class="Shows" id="myDiv">
		<!-- Img en Info van GameWorld -->
		<div class="Shows-1">
			<p>GameWorld</p>
			<img src="img/GameWorldHome.png">
			<div class="knop">knop</div>
		</div>
		
		<div class="Info-1">
			<p>GameWorld</p>

			<p>Met deze site ging ik een webshop maken voor games.
			<br>
			Ik heb deze site zelf gemaakt.
			<br>
			ik heb in de site gebruik gemaakt van:
			<br>
			php, html, css en javascript.
			</p>

			<div class="w3-content w3-display-container">
			  <img class="mySlides" src="img/Radiogaga.png" style="height:25% width:25%;">
			  <img class="mySlides" src="img/GameWorldHome.png" style="height:25% width:25%;">
			  <img class="mySlides" src="img/GastenBoek.png" style="height:25% width:25%;">
			  <img class="mySlides" src="img/GastenBoek.png" style="height:25% width:25%;">

			  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
			  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
			</div>
			<div class="knop">knop</div>
		</div>
		
		<!-- Img en Info van Radiogaga -->
		<div class="Shows-2">
			<p>Radiogaga</p>
			<img src="img/Radiogaga.png">
			<label class="pressForInfo">Klik voor meer info &rarr;</label>
		</div>

		<div class="Info-2">
			<p>Radiogaga</p>

			<p>sdjlkfslkdfjsldfkjsldkfjsldfjslkdfjsldfjsldfsldflsdfjk
			shkjhfkjsdhfkshdfkhsjdfkjsdhfkjsdhfksjdfhksdfhiwefbiudsvcksjdfsf
			ksdfbisdufgbsefikjsbdcksdkveiwuvbgwouvbdskvjsbdvksufwiefgsddsfsdf</p>
		</div>

		<!-- Img en Info van GastenBoek -->
		<div class="Shows-3">
			<p>GuestBook</p>
			<img src="img/GastenBoek.png">
			<label class="pressForInfo">Klik voor meer info &rarr;</label>
		</div>

		<div class="Info-3">
			<p>GuestBook</p>

			<p>sdjlkfslkdfjsldfkjsldkfjsldfjslkdfjsldfjsldfsldflsdfjk
			shkjhfkjsdhfkshdfkhsjdfkjsdhfkjsdhfksjdfhksdfhiwefbiudsvcksjdfsf
			ksdfbisdufgbsefikjsbdcksdkveiwuvbgwouvbdskvjsbdvksufwiefgsddsfsdf</p>
		</div>

	</div>
</div>
<script src="js/jquery.js"></script>
<script src="js/Mainjs.js"></script>
</body>
</html>