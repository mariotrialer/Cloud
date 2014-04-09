<?php
   if(is_writable("upload") && isset($_FILES['file'])) {
      move_uploaded_file($_FILES['file']['name'], "upload");
   }
?>