<?php
$file=file_get_contents("txt/all.txt");
$exp=explode("---",$file);

$rand=rand(0,count($exp));

print $exp[$rand];
