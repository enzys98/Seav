<?php
$dir = "../img/distribuzione/";
$distribuzioneArray = array();
// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            $distribuzioneArray[] = $file;
        }
        closedir($dh);
    }
}
//print_r($pblockArray);

echo json_encode($distribuzioneArray);