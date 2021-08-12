<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Partnering</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
    <div class="container-fluid mt-5">
      <div class="col-12">
        <div class="card mb-3">
          <div class="card-header">
            <h1>Hier entsteht eine Übersicht aller (links) einsehbaren tasks</h1>
            <h1 class="text-info">Soon Home-Overview</h1>
          </div>
          <div class="card-body">
            <p>
              Hier kann man dann ganz simpel, nur eine Übersicht der Tasks einsehen.
            </p>
            <p class="text-info">
              Simply an overview of the tasks.
            </p>
          </div>
        </div>
        <div class="row">
          <?php getSectionFrameContent(); ?>
        </div>
      </div>
    </div>
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
      echo '<div class="col-2"><div class="card"><div class="card-body"><a class="list-group-item mt-1 text-dark text-capitalize" target="homeFrame" href="pages/'.$cont.'.php">'.$cont.'</a></div></div></div>';
    }
  }elseif(!is_array($aContent)){
    echo '<div class="card"><div class="card-body"><a class="list-group-item mt-1 text-dark text-capitalize" target="homeFrame" href="pages/'.$cont.'.php">'.$cont.'</a></div></div>';
  }else{
    echo "ERR: something went wrong!";
  }
}