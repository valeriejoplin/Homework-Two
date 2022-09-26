<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
  $currentDateTime = date('Y-m-d H:i:s');
    echo $currentDateTime;
}
  echo DateFunction()
 ?>
 
</body>
</html>
