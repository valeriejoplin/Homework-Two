<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
   date.timezone = "America/Chicago"
  $currentDateTime = date('m-d-Y H:i:s');
    echo $currentDateTime;
}
  echo DateFunction()
 ?>
 
</body>
</html>
