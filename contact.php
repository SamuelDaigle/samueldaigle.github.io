<?php
	include("header.php");
	$lang = GetContactText();
?>
<link rel="stylesheet" type="text/css" href="css/style_contact.css" />
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

	<section id="form-contact">
		<?php
			echo '<h2>'.$lang[9].'</h2>
					<hr>
					<br>
					<br>
					<p id="availability">'.$lang[12].'</p>
					<a href="https://ca.linkedin.com/in/samueldaigle" target="_blank" class="small-icon"><img src="img/linkedin.png" />   '.$lang[10].'</a><br>
					<a href="/files/resume.pdf" class="small-icon" download><img src="img/resume.png"/>    '.$lang[11].'</a><br>
					<table class="section-info">
						<tr>
							<td>
								<img src="img/icon/mail80.png" class="icon"><br>
								<br><hr class="blue-bar" size="3"><br>
								'.$lang[3].'<br>samuel_daigle@outlook.com
							</td>
							<td>
								<img src="img/icon/telephone38.png" class="icon"><br>
								<br><hr class="blue-bar" size="3"><br>
								'.$lang[4].'<br>418-627-2539
							</td>
							<td>
								<img src="img/icon/location44.png" class="icon"><br>
								<br><hr class="blue-bar" size="3"><br>
								'.$lang[5].'<br>9020 avenue du <br>Plateau-de-Charlesbourg
							</td>
						</tr>
					</table>'
		?>
		<?php 
		/*if(isset($_POST['submit']))
		{
			if(isset($_POST['g-recaptcha-response'])){
			  $captcha=$_POST['g-recaptcha-response'];
			}
			if(!$captcha){
				// On did not check captcha.
				echo '<h2>'.$lang[0].'</h2>';
				echo '<form action="contact.php">
						<input class="button" type="submit" value="'.$lang[1].'" />
					  </form>';
				exit;
			}
			$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc0AQ4TAAAAAJRMw__7AggW7vRd2uBRF1flRuD3&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);
			if($response.success==false)
			{
				// On spam
				echo '<h2>'.$lang[2].'</h2>';
			}else
			{
				// On success
				echo '<table class="section-info">
						<tr>
							<th>
								<img src="img/icon/mail80.png" class="icon">
							</th>
							<th>
								<img src="img/icon/telephone38.png" class="icon">
							</th>
							<th>
								<img src="img/icon/location44.png" class="icon">
							</th>
						</tr>
						<tr>
							<td>'.$lang[3].'<br>samuel_daigle@outlook.com</td>
							<td>'.$lang[4].'<br>418-627-2539</td>
							<td>'.$lang[5].'<br>9020 avenue du Plateau-de-Charlesbourg</td>
						</tr>
					</table>';
			}
		}
		else
		{
			// Show the form.
			echo "<h1>$lang[6]</h1>
				<u>$lang[7]</u>
				<br>
				<br>";
			echo '<form action="contact.php" method="POST">
					  <div class="g-recaptcha" id="recaptcha" data-sitekey="6Lc0AQ4TAAAAALtNf_ojiFYSRvcCD2ocgx5has4y"></div>
					  <br/>
					  <input class="button" type="submit" name="submit" value="'.$lang[8].'"/>
				  </form>';
		}*/
		?>
		<br>
		<br>
		<br>
	</section>

<?php
	include("footer.php");
?>