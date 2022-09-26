<?php
require_once("header.php");
?>
<h2>
<?php 
function DateFunction(){
  date_default_timezone_set("America/Chicago");
  $currentDateTime = date('m-d-Y H:i:s');
    echo "The current date/time: " . 
      $currentDateTime;
}
  echo DateFunction()
 ?>
</h2>

