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
		<link rel="stylesheet" href="../core/css/core.css">
		<!--<script src="../core/js/modernizr.custom.js"></script>-->
	</head>
	<body>
		<? echo generateHeader(); ?>
		
		<header class="page-main">
			<div class="hero">
				<div class="title">
					<img id="icon" src="../files/images/thumbs/about-icon-thumb.png" />
					<a id="name">About Me</a>
                    <a id="flair" href="http://stackoverflow.com/users/579132/conor-taylor">
<img src="http://stackoverflow.com/users/flair/579132.png" width="208" height="58" alt="profile for Conor Taylor at Stack Overflow, Q&amp;A for professional and enthusiast programmers" title="profile for Conor Taylor at Stack Overflow, Q&amp;A for professional and enthusiast programmers">
</a>
				</div>
                <p>I'm a 2nd year Computer Science student in Trinity College, Dublin. The majority of my programming experience is in Java, C, Objective-C, and PHP.</p>
				<p>Frostplant is a business I set up in 2012 to sell iOS and Mac apps. That has since developed into <a href="http://frostplantgames.com">Frostplant Games</a>, while Frostplant now focuses on services and start-up projects, many of which are in the early stages of development.</p>
			</div>
		</header>
		
		<? echo generateFooter(); ?>
    </body>
</html>
