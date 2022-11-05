<?php
$dir = "../img/cabine/";
$impiantiElettriciArray = array();
// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            $impiantiElettriciArray[] = $file;
        }
        closedir($dh);
    }
}
echo json_encode($impiantiElettriciArray);