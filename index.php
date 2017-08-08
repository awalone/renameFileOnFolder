<?php

$dir = $_SERVER['DOCUMENT_ROOT'].'/folderku/sampah';
$files = scandir($dir);
unset($files[0], $files[1]);

foreach ($files as $key => $oldname) {
	$newname = substr($oldname,-3);
	rename($dir.'/'.$oldname, $dir.'/gambar'.$key.'.'.$newname);
}

?>