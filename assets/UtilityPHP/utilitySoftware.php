<?php
$dir = "../img/software/";
$softwareArray = array();
// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            $softwareArray[] = $file;
        }
        closedir($dh);
    }
}
//print_r($pblockArray);

echo json_encode($softwareArray);