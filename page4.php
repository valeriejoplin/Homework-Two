<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
    $dt = new DateTime();
    echo "The current date and time are " . 
        $dt->format('D-m-y H:i:s');
}
  echo DateFunction()
 ?>
 
</body>
</html>
