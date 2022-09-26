<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
  $currentDateTime = date('m-d-Y H:i:s');
    echo $currentDateTime;
      date.timezone = "America/Chicago";
}
  echo DateFunction()
 ?>
 
</body>
</html>
