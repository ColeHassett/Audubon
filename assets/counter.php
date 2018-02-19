<?php

  //This is php code to keep track of the views on the main page of the site using a text file.

  $File = "/home/csh5328/www/wm2/project2/assets/counter.txt";
  $handle = fopen($File, 'r+');
  $data = fread($handle, 512);
  $count = $data + 1;

  print "Total Views: ".$count;

  fseek($handle, 0);
  fwrite($handle, $count);
  fclose($handle);

 ?>
