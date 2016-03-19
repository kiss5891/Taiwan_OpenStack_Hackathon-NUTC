<?php
  if(isset($_GET['x'])&&isset($_GET['y'])){
    $xml = file_get_contents("http://root:r00tme@172.16.2.26/axis-cgi/com/ptz.cgi?info=1&camera=1&center=".$_GET['x'].",".$_GET['y']);
    echo "Success!!";
  }
