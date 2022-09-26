<?php
require_once("header.php");
?>
<body>
<?php 
function DateFunction(){
     $tz_object = new DateTimeZone('Chicago/America');
 

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}
  echo DateFunction()
 ?>
 
</body>
</html>
