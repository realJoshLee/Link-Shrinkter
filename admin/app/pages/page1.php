<?php
if ($handle = opendir('../../url/')) {

  while (false !== ($entry = readdir($handle))) {

      if ($entry != "." && $entry != "..") {

        $shortLinkFile = fopen("../../url/$entry", "r") or die("Short link does not exist");
        $link = fread($shortLinkFile,filesize("../../url/$entry"));

        echo '
        <div class="sec">
          <p>
            <span class="short-cont">'.$entry.'</span>
            <span class="float-right"><span class="OpenDrop OpenDrop-'.$entry.'" data-id="'.$entry.'">View Link</span><span class="CloseDrop CloseDrop-'.$entry.'" data-id="'.$entry.'">Close</span>&nbsp;&nbsp;&nbsp;<a href="delete.php?del='.$entry.'">X</a></span>

            
            <div class="toggle-sec '.$entry.'">
            '.$link.'
            </div>
          </p>
        </div>';
      }
  }

  closedir($handle);
}
?>