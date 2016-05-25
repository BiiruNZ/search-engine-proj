<?php

$FileLocation = 'logs/clicks.txt';
if( empty($_POST['clicked']) ) { exit; }

$f = fopen($FileLocation, 'a');

$text = date('Y-m-d H:i:s')."\n".$_POST['query']."\n".$_POST['clicked']."\n\n";

fwrite($f, $text);
fclose($f);
