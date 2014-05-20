<?php

include "core.php";

?>

<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="chrome=5">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<title>Frostplant</title>
		<link rel="stylesheet" href="core/css/core.css">
		<link rel="stylesheet" href="core/css/grid.css">
		<script src="core/js/modernizr.custom.js"></script>
	</head>
	<body>
        <? echo generateHeader(); ?>
		<header class="grid-container">
			<ul class="grid effect" id="grid">
				<li onclick="window.location.href='http://frostplantgames.com'">
					<img src="files/images/games-icon.png" />
					<a id="title">Frostplant Games</a>
					<a id="subtext">Rich, <span id="bold">feature-filled</span> games, available on <span id="bold">iOS</span> and <span id="bold">Mac</span> appstores.</a>
				</li>
				<li onclick="window.location.href='clublink/'">
					<img class="shrink" src="files/images/clublink-icon.png" />
					<a id="title">ClubLink</a>
					<a id="subtext">An <span id="bold">affordable</span> and easy to use communications solution for <span id="bold">Golf Club</span> administrators - Keep members informed, <span id="bold">instantly</span>. Available for iOS and Android.</a>
				</li>
				<li onclick="window.location.href='about/'">
					<img class="abouticon" src="files/images/about-icon.png" />
					<a id="title">About me</a>
				</li>
				<li onclick="window.location.href='services/'">
                    <img class="servicesicon" id="l0" src="files/images/rocket-layers/r0.png" />
					<img class="servicesicon" id="l1" src="files/images/rocket-layers/r1.png" />
					<a id="title">Services</a>
					<a id="subtext">Need a new <span id="bold">website</span> or <span id="bold">app</span>? Have an awesome idea that you don't know how to make? I can help. Take a look at my portfolio of previous and ongoing projects.</a>
				</li>
				<li onclick="window.location.href='mailto:conor@frostplant.com'">
					<img class="mailicon" id="l0" src="files/images/mail-layers/m0.png" />
					<img class="mailicon" id="l1" src="files/images/mail-layers/m1.png" />
					<a id="title">Contact me</a>
				</li>
			</ul>
		</header>
		
		<? echo generateFooter(); ?>

		<script src="core/js/masonry.pkgd.min.js"></script>
		<script src="core/js/imagesloaded.js"></script>
		<script src="core/js/classie.js"></script>
		<script src="core/js/AnimOnScroll.js"></script>
		<script>
			new AnimOnScroll( document.getElementById('grid'), {
				minDuration : 0.4,
				maxDuration : 0.7,
				viewportFactor : 0.2
			});
		</script>
    </body>
</html>
