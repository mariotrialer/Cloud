<?php

	function getAllFiles(){
		if ($handle = opendir('upload')) {
			$counter = 0;
	        while (false !== ($entry = readdir($handle))) {
	        	if ($entry != "." && $entry != "..") {

		        	$counter = $counter +1;

		        	$filesize = filesize('upload/'.$entry)/1000;
		        	$filesize = $filesize." KB";

		        	$downloadButton = "<button data-filename='".$entry."' class='btn btn-default btn-success' onclick='downloadFile(this)'>Download</button>";
		        	$deleteButton = "<button data-filename='".$entry."' style='margin-left: 5px;' class='btn btn-default btn-warning' onclick='deleteFile(this);'>Löschen</button>";

		        	$ext = strtolower(pathinfo('upload/'.$entry, PATHINFO_EXTENSION));

		            echo "<tr id='".$counter."' data-filename='".$entry."'>";

		            //Fileinfo
		            echo "<td>".$counter."</td>";
		            echo "<td>".$entry."</td>";
		            echo "<td>".$ext."</td>";
		            echo "<td>".$filesize."</td>";
		            echo "<td>".$downloadButton.$deleteButton."</td>";

		            echo "</tr>";
		        }
	        }
	        closedir($handle);
   		}	
	}

?>