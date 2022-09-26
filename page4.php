<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
    $dt = new DateTime();
    echo "The current date and time are " . 
        $dt->format('D-m-y h:i');
}
  echo DateFunction()
 ?>
 
</body>
</html>
