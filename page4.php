<?php
require_once("header.php");
?>
<body>
<?php 
function TimeFunction() {
date_default_timezone_set("America/Chicago");
echo "The time is " .
date("h:i:sa");
}
function DateFunction(){
    $dt = new DateTime();
    echo $dt->format('Y-m-d H:i:s');
}
 
 echo TimeFunction()
  echo DateFunction()
  
 ?>
 
</body>
</html>

