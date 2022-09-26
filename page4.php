<?php
require_once("header.php");
?>
<body>
<?php 
function DateTimeFunction() {
date_default_timezone_set("America/Chicago");
echo "The time is " .
date("h:i:sa");
}
 echo DateTimeFunction()
 ?>
 
</body>
</html>

