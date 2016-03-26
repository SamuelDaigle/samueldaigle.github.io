<?php
session_start();
 
SwitchLanguage();

echo "<script>history.go(-1)</script>";

function SwitchLanguage()
{
	if($_SESSION['lang'] == 'fr')
	{
		$_SESSION['lang'] = 'en';
	}
	else if($_SESSION['lang'] == 'en')
	{
		$_SESSION['lang'] = 'fr';
	}
}
?>