<?php
$dir = "../img/fotovoltaici/";
$fotovoltaiciArray = array();
// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            $fotovoltaiciArray[] = $file;
        }
        closedir($dh);
    }
}
//print_r($pblockArray);

echo json_encode($fotovoltaiciArray);