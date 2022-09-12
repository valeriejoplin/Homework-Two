<?php
require_once("header.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
<html>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  Major: <input type="text" name="major">
  Graduation Date: <input type ="text" name="gradyear">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['fname'];
  $mname = $_POST['major'];
  $gname = $_POST['gradyear'];
  if (empty($name)) {
    echo "Please enter your name";
  }else if(empty($mname)){
   echo "Please enter your major";
  }else if(empty($gname)){
   echo "Please enter your expected graduation date";
  } else {
    echo $name ;
    echo $mname ;
    echo $gname ;
  }
}
?>


</body>
</html>
  
<?php
require_once("footer.php");
?>
