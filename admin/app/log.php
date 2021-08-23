<?php
date_default_timezone_set('America/Detroit');
$date = date("m.d.Y h-i-sa");
$myfile = fopen("logs/".$date.".txt", "w") or die("Unable to open file!");
$txt = "".$_POST['data']."";
fwrite($myfile, $txt);
fclose($myfile);