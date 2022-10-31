<?php
$dir = "assets/img/automazione/";
$automazioneArray = array();
// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      $automazioneArray[] = $file;
    }
    closedir($dh);
  }
}

$myJSON = json_encode($automazioneArray);
