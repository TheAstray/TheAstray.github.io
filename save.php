<?php
  if(isset($_POST['save'])){
    ectract($_REQUEST);
    $file = fopen("interessenten.txt", "a");

    fwrite($file,"Name: ");
    fwrite($file,$name "\n");
    fwrite($file,"E-Mail: ");
    fwrite($file,$emailadresse "\n");
    fwrite($file, "\n");
    fclose($file);
  }
?>