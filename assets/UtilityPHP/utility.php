<?php
$dir = "../img/automazione/";
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

print_r($automazioneArray);
$myJSON = json_encode($automazioneArray);