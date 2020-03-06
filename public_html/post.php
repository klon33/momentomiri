<?php
$file=file_get_contents("txt/all.txt");
$exp=explode("---",$file);

print count($exp);
