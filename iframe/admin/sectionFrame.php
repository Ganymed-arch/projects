<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Partnering</title>
    <link href="../../src/css/frames.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body class="bg-success">
    <a href="home.php" id="getHome" target="homeFrame"><h1 class="border-bottom border-4 text-light fw-bold text-uppercase text-center">Tasks</h1></a>
    <ul class="list-group rounded-0">
      <?php
        getSectionFrameContent()
      ?>
    </ul>
  </body>
</html>

<?php

function getSectionFrameContent(): void{
  $sFile = "./construct/admin/sectionFrames.yaml";
  $rHandle = fopen($sFile, "r");
  $aContent = fread($rHandle, filesize($sFile));

  $aContent = explode("\n", $aContent);

  if (is_array($aContent)){
    foreach ($aContent as $key => $cont){
      echo '<li><a class="list-group-item mt-1 text-dark text-capitalize" target="homeFrame" href="pages/'.$cont.'.php">'.$cont.'</a></li>';
    }
  }elseif(!is_array($aContent)){
    echo '<li><a class="list-group-item mt-1 text-dark text-capitalize" target="homeFrame" href="pages/' . $aContent . '.php">' . $aContent . '</a></li>';
  }else{
    echo "ERR: something went wrong!";
  }
}