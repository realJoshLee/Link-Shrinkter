<?php
error_reporting(0);
session_start();
if(!isset($_SESSION["login"])){
  header("location: ../index.php");
}