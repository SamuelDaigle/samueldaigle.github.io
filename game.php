<?php
	include_once("header.php");
	$lang = GetGameText();
?>
	<link rel="stylesheet" type="text/css" href="css/style_game.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/style_timeline.css" />
	<script src="js/modernizr.js"></script>
		
		<section>
			<h1 id="section-description"><?php echo $lang[0] ?></h1>
		</section>
		<section id="cd-timeline" class="cd-container">
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-movie">
					<img src="img/icon/heart297.png" alt="Movie">
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h1><?php echo $lang[1] ?></h1>
					<p><?php echo $lang[2] ?></p>
					<b><?php echo $lang[3] ?></b>
					<br>
					<br>
					<img src="img/unity/unity-placeholder.jpg" class="project-preview"/>
					<a href="ducktators.php" class="cd-read-more"><?php echo $lang[4] ?></a>
					<span class="cd-date"><?php echo $lang[5] ?></span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->

			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-movie">
					<img src="img/icon/heart297.png" alt="Movie">
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h1><?php echo $lang[6] ?></h1>
					<p><?php echo $lang[7] ?></p>
					<b><?php echo $lang[8] ?></b>
					<br>
					<br>
					<img src="img/engine/engine3D.jpg" class="project-preview"/>
					<a href="axis-engine.php" class="cd-read-more"><?php echo $lang[9] ?></a>
					<span class="cd-date"><?php echo $lang[10] ?></span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-movie">
					<img src="img/icon/heart297.png" alt="Movie">
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h1><?php echo $lang[11] ?></h1>
					<p><?php echo $lang[12] ?></p>
					<b><?php echo $lang[13] ?></b>
					<br>
					<br>
					<img src="img/unreal/Build_20150715.jpg" class="project-preview"/>
					<a href="falling-star.php" class="cd-read-more"><?php echo $lang[14] ?></a>
					<span class="cd-date"><?php echo $lang[15] ?></span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-picture">
					<img src="img/icon/basic14.png" alt="Picture">
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h1><?php echo $lang[16] ?></h1>
					<p><?php echo $lang[17] ?></p>
					<b><?php echo $lang[18] ?></b>
					<br>
					<br>
					<img src="img/projects/squirreltown.png" class="project-preview"/>
					<span class="cd-date"><?php echo $lang[19] ?></span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-picture">
					<img src="img/icon/basic14.png" alt="Picture">
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h1><?php echo $lang[20] ?></h1>
					<p><?php echo $lang[21] ?></p>
					<b><?php echo $lang[22] ?></b>
					<br>
					<br>
					<img src="img/projects/WinterWar.png" class="project-preview"/>
					<span class="cd-date"><?php echo $lang[23] ?></span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-picture">
					<img src="img/icon/basic14.png" alt="Picture">
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h1><?php echo $lang[24] ?></h1>
					<p><?php echo $lang[25] ?></p>
					<b><?php echo $lang[26] ?></b>
					<br>
					<br>
					<img src="img/projects/MineSweeper.png" class="project-preview" style="margin-top:-75px;"/>
					<span class="cd-date"><?php echo $lang[27] ?></span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
			
			<div class="cd-timeline-block">
				<div class="cd-timeline-img cd-picture">
					<img src="img/icon/basic14.png" alt="Picture">
				</div> <!-- cd-timeline-img -->

				<div class="cd-timeline-content">
					<h1><?php echo $lang[28] ?></h1>
					<p><?php echo $lang[29] ?></p>
					<b><?php echo $lang[30] ?></b>
					<br>
					<br>
					<img src="img/projects/MusicZ.png" class="project-preview"/>
					<span class="cd-date"><?php echo $lang[31] ?></span>
				</div> <!-- cd-timeline-content -->
			</div> <!-- cd-timeline-block -->
		</section> <!-- cd-timeline -->
		
		<section class="center">
			<br>
			<br>
			<br>
			<br>
			<br>
			<h2><?php echo $lang[32] ?></h2>
			<ul id="project-list">
				<li>C#</li>
				<ul>
					<li>Map editor</li>
					<li>Asteroid</li>
				</ul>
				<li>Java</li>
				<ul>
					<li>Tower of Hanoi</li>
					<li>State machine for an AI demo</li>
				</ul>
				<li>C++</li>
				<ul>
					<li>Mastermind</li>
					<li>Labyrinth (I.A.)</li>
				</ul>
				<li>VB.Net</li>
				<ul>
					<li>Space Invader</li>
					<li>Map editor</li>
				</ul>
			</ul>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
		</section>
		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<?php
	include("footer.php");
?>