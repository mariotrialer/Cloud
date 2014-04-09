<?php

	$filename = $_GET["filename"];
	$fileUrl = "../upload/".$filename;

	unlink($fileUrl);
	
	header('Location: ../home.php');
?>