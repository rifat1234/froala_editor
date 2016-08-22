<?php
    // Get src.
    $src = $_POST["src"];
    
    $ar = explode("/",$src);
    $len = sizeof($ar);
    $src = 'uploads/'.$ar[$len-1];
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $len);
    fclose($myfile);
    // Check if file exists.
    if (file_exists( $src)) {
      // Delete file.

      unlink( $src);
    }
?>