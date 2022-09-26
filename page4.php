<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
    echo (new \DateTime())->format('Y-m-d H:i:s');
}
  echo DateFunction()
 ?>
 
</body>
</html>

    $dt = new DateTime();
    echo "The current date and time are " . 
        $dt->format('D-m-y h:i');
