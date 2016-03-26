<?php
	include("header.php");
	$lang = GetFallingStarText();
?>
	<link rel="stylesheet" type="text/css" href="css/style_game_content.css" />

	<section>
		<h1 id="section-description">FALLING STAR</h1>
		<br>
		<br>
		<br>
		<h2>Description</h2>
		<br>
		<br>
		<p><?php echo $lang[0] ?></p>
		<br>
		<br>
		<br>
		<br>
		<br>
		<h2><?php echo $lang[1] ?></h2>
		<br>
		<br>
		<ul class="square-list">
			<li><?php echo $lang[2] ?></li>
			<li><?php echo $lang[3] ?></li>
			<li><?php echo $lang[4] ?></li>
			<li><?php echo $lang[5] ?></li>
			<li><?php echo $lang[6] ?></li>
			<ul class="square-list">
				<li><?php echo $lang[7] ?></li>
				<li><?php echo $lang[8] ?></li>
				<li><?php echo $lang[9] ?></li>
				<li><?php echo $lang[10] ?></li>
				<li><?php echo $lang[11] ?></li>
			</ul>
			<li><?php echo $lang[12] ?></li>
			<li><?php echo $lang[13] ?></li>
			<li><?php echo $lang[14] ?></li>
			<li><?php echo $lang[15] ?></li>
			<li><?php echo $lang[16] ?></li>
			<ul class="square-list">
				<li><?php echo $lang[17] ?></li>
				<li><?php echo $lang[18] ?></li>
				<li><?php echo $lang[19] ?></li>
				<li><?php echo $lang[20] ?></li>
			</ul>
			<li><?php echo $lang[21] ?></li>
		</ul>
		<br>
		<br>
		<br>
		<br>
		<br>
		<h2><?php echo $lang[22] ?></h2>
		<br>
		<br>
		<img src="img/unreal/falling star.gif" />
		<br>
		<br>
		<h2><?php echo $lang[23] ?></h2>
		<br>
		<br>
		<img src="img/unreal/Build_20150715.jpg" class="fill-width" />
		<img src="img/unreal/Build_20150716.jpg" class="fill-width" />
		<img src="img/unreal/Build_20150718.jpg" class="fill-width" />
		<img src="img/unreal/Build_20150719.jpg" class="fill-width" />
		<br>
		<br>
	</section>



<?php
	include("footer.php");
?>