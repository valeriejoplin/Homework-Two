<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
    echo (new \DateTimeNow())->format('Y-m-d H:i:s');
}
  echo DateFunction()
 ?>
 
</body>
</html>
