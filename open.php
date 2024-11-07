<?php
$myfile = fopen("webdictionary.txt", "a") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?>