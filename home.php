<?php
$dir = "/assets/img/pblock/";
$pblockArray = array();
// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            $pblockArray[] = $file;
        }
        closedir($dh);
    }
}
echo gettype($pblockArray);
print_r($pblockArray);
$myJSON = json_encode($pblockArray);