<?php
	include("header.php");
	$lang = GetIndexText();
?>
	<link rel="stylesheet" type="text/css" href="css/style_index.css" />
		<section>
			<div class="page-half-height" >
				<div id="title"><?php echo $lang[0] ?><span id="deeppink">Samuel Daigle</span></div>
				<div id="subtitle"><?php echo $lang[1] ?></div>
			</div>
		</section>
		
		<section>
			<div id="showcase">
			<a href="game.php"><div class="button right"><?php echo $lang[2] ?></div></a>
				<div id="featured"><?php echo $lang[3] ?></div>
				
				<br>
				<table>
					<tr>
						<td><img src="img/engine/engine3D.jpg" class="project-preview"/></td>
						<td>
						<p class="project-title"><?php echo $lang[4] ?></p>
						<p class="project-description"><?php echo $lang[5] ?></p></td>
					</tr>
					<tr>
						<td><img src="img/unreal/unreal.jpg" class="project-preview"/></td>
						<td>
						<p class="project-title"><?php echo $lang[6] ?></p>
						<p class="project-description"><?php echo $lang[7] ?></p></td>
					</tr>
				</table>
				<br>
			</div>
		</section>
		
		<section class="bigger-margin">
			<a href="about.php"><div class="circle"><b>C++</b></div></a>
			<div id="circle-description"><?php echo $lang[8] ?></div>
			<a href="about.php"><div class="center"><div class="button center"><?php echo $lang[9] ?></div></div></a>
			<br>
			<br>
			<br>
		</section>
		
		<section class="bigger-margin">
			<a href="contact.php" class="white-hover"><img src="img/resume.png" id="resume-icon"/></a>
			<div id="circle-description"><?php echo $lang[10] ?></div>
			<a href="contact.php"><div class="button center"><?php echo $lang[11] ?></div></a>
			<br>
			<br>
			<br>
		</section>

<?php
	include("footer.php");
?>