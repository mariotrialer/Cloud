<?php

	session_start();

	if(isset($_SESSION['username']) & isset($_SESSION['fullname'])){

	} else{
		header('Location: login.php');
	}

  include "backend/filelist.php";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Cloud</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/home.css" rel="stylesheet">

    <script type="text/JavaScript" src="js/underscore-min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>

    <script type="text/JavaScript" src="js/modal.js"></script>
    <script type="text/javascript" src="js/mainView.js"></script>


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MWE-Cloud</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#contact" onclick="showUploadDialog();">Datei hochladen</a></li>
          </ul>
          <form class="logoutForm" method="post" action="backend/logout.php" id="logoutForm">
          	<input class="btn btn-default btn-danger" type="submit" value="Logout">
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">

      <div class="starter-template">
        <table class="table table-hover mainTable">
          <thead>
            <th>Index</th>
            <th>Name</th>
            <th>Dateityp</th>
            <th>Größe</th>
            <th>Aktionen</th>
          </thead>
          <tbody>
            <?php getAllFiles(); ?>
          </tbody>
        </table>
      </div>

    </div><!-- /.container -->

    <!-- Popup-->
    <div id="myModal" class="modal fade" >
        <div class="modal-dialog">
          <form action="backend/upload.php" method="post" enctype="multipart/form-data"> 
          <div class="modal-content">
            <!-- dialog body -->
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2  class="uploadLine">Datei hochladen</h2>
                <div id="contentOfDialog">
                    <input type="file" name="datei"><br>
                </div>
            </div>
            <!-- dialog buttons -->
            <div class="modal-footer" id='modal-footer'><button id="dialogOk" type="submit" onclick="closeDialog();" class="btn btn-primary" >Hochladen</button></div>
          </div>
          </form>
        </div>
    </div>

  </body>
</html>