<?php
$dir = "../img/impiantiStabilimenti/";
$impiantiStabilimentiArray = array();
// Open a directory, and read its contents
if (is_dir($dir)){
    if ($dh = opendir($dir)){
        while (($file = readdir($dh)) !== false){
            $impiantiStabilimentiArray[] = $file;
        }
        closedir($dh);
    }
}
//print_r($pblockArray);

echo json_encode($impiantiStabilimentiArray);