<?php
	include("header.php");
	$lang = GetDucktatorsText();
?>
	<link rel="stylesheet" type="text/css" href="css/style_game_content.css" />

	<section>
		<h1 id="section-description">DUCKTATORS</h1>
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
		<ul class="square-list">
			<li><?php echo $lang[3] ?></li>
			<li><?php echo $lang[4] ?></li>
			<li><?php echo $lang[5] ?></li>
			<li><?php echo $lang[6] ?></li>
			<li><?php echo $lang[7] ?></li>
			<li><?php echo $lang[8] ?></li>
			<li><?php echo $lang[9] ?></li>
			<li><?php echo $lang[10] ?></li>
			<li><?php echo $lang[11] ?></li>
			<li><?php echo $lang[12] ?></li>
			<li><?php echo $lang[13] ?></li>
		</ul>
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