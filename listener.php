<?php
  $file_reader = fopen("data.txt", "r") or die("Unable to open file for reading!");
  $data = fread($file_reader,filesize("data.txt"));
  fclose($file_reader);

  $file_writer = fopen("data.txt", "w") or die("Unable to open file for writing!");
  fwrite($file_writer, "EMPTY");
  fclose($file_writer); 

  echo $data;
?>