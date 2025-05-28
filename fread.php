<?php

$myfile = "ds.text";
$text = fopen($myfile, 'r');
$my_file_read = filesize($myfile);

echo $myfile . " - Size: " . $my_file_read;

fclose($text);

?>