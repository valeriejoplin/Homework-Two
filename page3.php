<?php
require_once("header.php");
?>
<html>
<body>
  <h3> Fill out your student information below </h3>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="major">
  Major: <input type="text" name="minor">
  Graduation Date: <input type ="text" name="gradyear">
  <input type="submit">
</form>
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $major = $_POST['major'];
  $minor = $_POST['minor'];
  $gradyr = $_POST['gradyear'];
  if (empty($major)) {
    echo "Please enter your major";
  }else if(empty($minor)){
   echo "Please enter your minor, if none, enter "None" ";
  }else if(empty($gradyr)){
   echo "Please enter your expected graduation date";
  } else 
    echo $major;
    echo $minor;
    echo $gradyr; 
  }
}
?>
</body>
</html>
  
<?php
require_once("footer.php");
?>
