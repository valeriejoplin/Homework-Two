<?php
require_once("header.php");
?>
  <body>
    <h2>Response Completed</h2>
    Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>
Your phone number is: <?php echo $_GET["phone"]; ?><br>

    <h3> Click the button below to fill out more information! </h3>
<a class="btn btn-primary" href="page3.php" role="button">Continue</a>
</body> 
<?php
require_once("footer.php");
?>

