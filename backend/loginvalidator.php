<?php

	session_start();
	
	include "dbconfig.php";

	//Datenbankverbindung herstellen
	mysql_connect($db_host, $db_user, $db_pass) or die("Datenbankverbindung fehlgeschlagen");
	//Datenbank auswählen
	mysql_select_db($db_name) or die("Datenbank nicht gefunden");

	//Variablen auslesen
	$mail = $_POST["email"];
	$pass = md5($_POST["password"]);

	$isfound = false;

	//Query
	$query = "SELECT password, firstname, lastname FROM users WHERE email='$mail'";

	$rs = mysql_query($query);

	//Ergebnis parsen
	//if (!is_resource($rs)) {
  		while($row = mysql_fetch_array($rs)){
  			if($row["password"] == $pass){
  				$_SESSION["username"] = $mail;
  				$_SESSION["fullname"] = $row["firstname"]." ".$row["lastname"];
  				header('Location: ../home.php');	
  			}else{
  				header('Location: ../login.php');
  			}
  		}
	//}
?>