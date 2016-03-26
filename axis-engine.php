<?php
	include("header.php");
	$lang = GetAxisText();
?>
	<link rel="stylesheet" type="text/css" href="css/style_game_content.css" />
	
	<section>
		<h1 id="section-description">AXIS ENGINE</h1>
		<br>
		<br>
		<br>
		<h2>Description</h2>
		<br>
		<br>
		<p><?php echo $lang[0] ?></p>
		<p><?php echo $lang[1] ?></p><br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<h2><?php echo $lang[2] ?></h2>
		<br>
		<br>
		<img src="img/engine/engine3D.jpg" class="right" id="interface-picture" />
		<ul class="square-list">
			<li><?php echo $lang[3] ?></li>
			<li><?php echo $lang[4] ?></li>
			<ul class="square-list">
				<li><?php echo $lang[5] ?></li>
				<li><?php echo $lang[6] ?></li>
			</ul>
			<li><?php echo $lang[7] ?></li>
			<li><?php echo $lang[8] ?></li>
			<li><?php echo $lang[9] ?></li>
		</ul>
		<div class="clear" />
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<h2><?php echo $lang[10] ?></h2>
		<br>
		<br>
		<p><?php echo $lang[11] ?></p>
		<ul class="square-list">
			<li><?php echo $lang[12] ?></li>
			<li><?php echo $lang[13] ?></li>
			<li><?php echo $lang[14] ?></li>
			<li><?php echo $lang[15] ?></li>
			<li><?php echo $lang[16] ?></li>
		</ul>
		<br>
		<p><?php echo $lang[17] ?></p>
		<ul class="square-list">
			<li>Windows SDK</li>
			<li>DirectInput</li>
			<li>XInput</li>
			<li>XAudio2</li>
			<li>Windows Form</li>
		</ul>
		<br>
		<br>
		<br>
		<br>
		<br>
		<h2><?php echo $lang[18] ?></h2>
		<br>
		<br>
		<img src="img/engine/engine-2015-09-27.png" class="half-width" />
		<!--<img src="img/engine/engine2D.jpg" class="half-width" />-->
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</section>




<?php
	include("footer.php");
?>