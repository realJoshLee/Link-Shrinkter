<?php
error_reporting(0);

$short = $_GET['ext'];

if(isset($short)){
  $shortLinkFile = fopen("url/$short", "r") or die("This link does not exist.");
  $link = fread($shortLinkFile,filesize("url/$short"));

  header("Location: ".$link."");
}