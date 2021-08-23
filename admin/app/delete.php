<?php
include '../conf/conf.php';
include '../conf/init.php';

if(isset($_GET['del'])){
  $file_pointer = "../../url/".$_GET['del']; 
   
  // Use unlink() function to delete a file 
  if (!unlink($file_pointer)) { 
      echo ("$file_pointer cannot be deleted due to an error"); 
  } 
  else { 
      echo ("$file_pointer has been deleted"); 
      header('Location: index.php');
  } 
}