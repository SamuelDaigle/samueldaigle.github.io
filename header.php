<?php
	session_start();
	include("language.php");
	if (!isset($_SESSION['lang']))
	{
		$_SESSION['lang'] = 'en';
	}
	$lang = GetHeaderText();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Samuel Daigle's portfolio</title>
		<link rel="stylesheet" type="text/css" href="css/style_general.css" />
		<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
	</head>
	<body>
		<header>
			<a href="index.php"><div id="logo"></div></a>
			<a href="language-switch.php" id="language-change"> <?php echo $lang[0] ?> </a>
			<nav>
				<a href="game.php"><?php echo $lang[1] ?></a>
				<span class="leftverticalline"><a href="about.php"><?php echo $lang[2] ?></a></span>
				<span class="leftverticalline"><a href="contact.php"><?php echo $lang[3] ?></a></span>
			</nav>
		</header>