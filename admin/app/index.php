<?php
include '../conf/conf.php';
include '../conf/init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status</title>
  <script
  src="../jquery.min.js"></script>

  <link rel="shortcut icon" type="image/png" href="favicons/favicon-32x32.png"/>
  <link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
  <link rel="mask-icon" href="icons/page-icons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png">

  <meta content="text/html; charset=UTF-8; X-Content-Type-Options=nosniff" http-equiv="Content-Type" />
  <link rel="manifest" href="manifest.json">

  <!--iOS PWA Compatability-->
  <link rel="apple-touch-icon" href="favicons/favicon-32x32.png">
  <meta name="apple-mobile-web-app-title" content="Device Monitor">
  <meta name="apple-mobile-web-app-status-bar-style" content="white">
  <meta name="apple-mobile-web-app-capable" content="yes">
</head>
<body>
  <div class="nav">
    <span class="nav-btn" data-id="page1">Links</span>
    <span class="nav-btn" data-id="page2">Add Link</span>
  </div>

  <div id="page1" class="pages"><div class="pages-style"><?php include('pages/page1.php'); ?></div></div>
  <div id="page2" class="pages" style="display:none;"><div class="pages-style"><?php include('pages/page2.php'); ?></div></div>
</body>
</html>

<script>
  <?php include('dynamic/script.js'); ?>
</script>

<style>
  <?php include('dynamic/style.css'); ?>
</style>