<?php
$d = $_GET['name'];
$myfile = fopen("testfile.txt", "w");
fwrite($myfile, $d);
fclose($myfile);
?>