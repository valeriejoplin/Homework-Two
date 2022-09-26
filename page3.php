<?php
require_once("header.php");
?>

  <h3> Enter your student information below </h3>
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
    echo $name;
    echo $mname;
    echo $gname;
  }
}
?>

  
<?php
require_once("footer.php");
?>
