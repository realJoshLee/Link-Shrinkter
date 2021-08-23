<?php
  if($_POST['createLink']){
    $myfile = fopen("../../url/".$_POST['short']."", "w") or die("Unable to create file!");
    $txt = "".$_POST['link']."";
    fwrite($myfile, $txt);
    fclose($myfile);

    header("Refresh:0");
  }
?>
<div class="form">
  <form method="POST">
    <input type="text" class="form-control" name="short" id="short" placeholder="Short Link"><br>
    <input type="text" class="form-control" name="link" id="link" placeholder="Origional Link">
    <input type="submit" class="form-control-submit" name="createLink" value="Create">
  </form>
</div>

<script>
  function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * 
  charactersLength));
    }
    return result;
  }

  var shortURL = makeid(6);
  document.getElementById("short").value = shortURL;
</script>