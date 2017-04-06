<!DOCTYPE html>
<html>
<head>
	<title>scrolldown site</title>
	<link rel="stylesheet" type="text/css" href="css/Style.css">
	<link rel="stylesheet" type="text/css" href="css/HeaderStyle.css">
	<meta name="viewport" content="width=device-width; initial-scale=1.0;">
</head>
<body>
<div class="container">
	<div id="top-nav" class="nav">
		<div class="top">
			<div class="wrapper">
				<a id="DitbenikLink" href="DitBenIk.php">Dit ben ik!</a>
				<a id="DitbenikLink" href="index.php">Projecten!</a>
			</div>
		</div>
	</div>

	<div class="Shows" id="myDiv">
			
		<div class="Shows-1">
			<a href="">GameWorld</a>
			<img src="img/GameWorldHome.png">
		</div>

		
		<!-- <div class="Info-1">
			<a href="">sdfdfdfdf</a>
			<img src="img/GameWorldHome.png">
		</div>


		<button>jdsiofjsofdinsdof</button> -->
		
		<div class="Shows-2">
			<a href="">Radiogaga</a>
			<img src="img/Radiogaga.png">
		</div>

		<div class="Shows-3">
			<a href="">GuestBook</a>
			<img src="img/GastenBoek.png">
		</div>

	</div>
</div>
<script src="js/jquery.js"></script>
	
</body>
</html>

<script>
$(function ()
{	
	var header = document.getElementById("top-nav");

	$(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    	if(scroll > 200)
		{
			header.style.transition = "0.5s";
			header.style.margin = "-300px 0 0 0";
		}

		else if(scroll < 200)
		{
			header.style.transition = "0.5s";
			header.style.margin = "0px";
		}
	});
});

$(document).ready(function(){
    $("button").click(function(){
        $(".Shows-1").toggle();
    });
});


</script>