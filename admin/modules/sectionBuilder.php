<?php

class sectionBuilder{

  public function getSectionFrameContent(): void{

    echo "TEST";

    $sFile = "../../iframe/admin/construct/admin/sectionFrames.yaml";
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
}
