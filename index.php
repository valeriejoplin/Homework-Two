<?php
require_once("header.php");
?>
  <body>
    <h3>Please enter your information</h3>
    <form action="page2.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Phone: <input type="text" name="phone"><br>
    <input type="submit">
      </form>
<?php
require_once("footer.php");
?>
