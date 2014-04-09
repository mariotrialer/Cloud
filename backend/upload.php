<?php

	move_uploaded_file($_FILES['datei']['tmp_name'], "../upload/".$_FILES['datei']['name']);

	header('Location: ../home.php');

	//echo "Die Datei wurde hochgeladen";
?>