<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All appiontment</h1>
   
    <?php
   
  // The global $_POST variable allows you to access the data sent with the POST method by name
  // To access the data sent with the GET method, you can use $_GET
  $Dname= htmlspecialchars($_POST['Dname']);
  $Pname  = htmlspecialchars($_POST['Pname']);
  echo"<h1>All appiontment</h1>";

  echo  "<h1>$Dname</h1>", ' ', $Pname;
  
?>
</body>
</html><?php /**PATH D:\Programs\laravel\His project\resources\views/show.blade.php ENDPATH**/ ?>