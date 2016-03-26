<?php
	include_once("header.php");
	$lang = GetAboutText();
?>
	<link rel="stylesheet" type="text/css" href="css/style_about.css" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<?php
		include("donut-chart.php");
		include("half-donut-chart.php");
		include("bar-chart.php");
	?>
		<section>
			<div id="objective">
				<h2><?php echo $lang[0] ?></h2>
				<hr>
				<p><?php echo $lang[1] ?></p>
			</div>
		</section>
	
		<section>
			<div id="school">
				<h2><?php echo $lang[2] ?></h2>
				<hr>
				<p><?php echo $lang[3] ?></p>
			</div>
			
			<img src="img/cegep.png" id="cegep-logo"/>
			
			
			<!-- Doughnut Pie Chart -->
			<div id="container"></div>
			<div id="language">
				<h2><?php echo $lang[4] ?></h2>
				<hr>
				<p><?php echo $lang[5] ?></p>
			</div>
			
			<!-- Half Doughnut Pie Chart -->
			<div id="container-half"></div>
			<div id="engine">
				<h2><?php echo $lang[6] ?></h2>
				<hr>
				<p><?php echo $lang[7] ?></p>
			</div>
			
			<!-- Basic Column Chart -->
			<div id="container-bar"></div>
			<div id="research">
				<h2><?php echo $lang[8] ?></h2>
				<hr>
				<p><?php echo $lang[9] ?></p>
			</div>
			
			<div id="work">
				<h2><?php echo $lang[10] ?></h2>
				<hr>
				<br>
				<br>
				<table id="work-showcase">
					<tr>
						<td class="date"><?php echo $lang[11] ?></td>
						<td class="description">
						<b><?php echo $lang[12] ?></b><br>
						<p><?php echo $lang[13] ?></p>
						</td>
					</tr>
					<tr>
						<td class="date"><?php echo $lang[14] ?></td>
						<td class="description">
						<b><?php echo $lang[15] ?></b>
						<p><?php echo $lang[16] ?></p>
						</td>
					</tr>
				</table>
			</div>
			
			<hr>
			<br>
			<br>
			
			<div id="participation">
				<table id="participation">
					<tr>
						<td><img src="img/extralife.png"/></td>
						<td class="description">
						<b><?php echo $lang[17] ?></b><br>
						<p><?php echo $lang[18] ?></p>
						</td>
					</tr>
					<tr>
						<td><img src="img/handshake.png" style="width: 85%; height: 70%; padding-left: 25px;"/></td>
						<td class="description">
						<b><?php echo $lang[19] ?></b><br>
						<p><?php echo $lang[20] ?></p>
						</td>
					</tr>
				</table>
			</div>
			
			<br>
			<br>
			<br>
			<br>
		</section>
		
<?php
	include("footer.php");
?>
