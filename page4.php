<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
  date_default_timezone_set("America/Chicago");
  $currentDateTime = date('m-d-Y H:i:s');
    echo "The current Date/Time: " . 
      $currentDateTime;
}
  echo DateFunction()
 ?>
 
</body>

