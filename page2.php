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
  <body>
    <h1>Post response</h1>
    Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
<?php
require_once("footer.php");
?>
<!---<body style = "text-align:center;">
<h1> About PHP </h1>
  <p>PHP is a recursive acronym for Hypertext preprocessor and it is a widely used
  open source general-purpose scripting language. PHP is well designed for web development and can be 
  embedded into HTML format. PHP contains HTML wth embedded code that does something, it makes working with 
  HTML easier and requires less repetitive code!</p>
</body>
--->
