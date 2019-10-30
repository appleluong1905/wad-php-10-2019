<?php 
	session_start();
	$_SESSION['myNameSession'] = 'Chad 111';


	echo $_SESSION['myNameSession'];
?>