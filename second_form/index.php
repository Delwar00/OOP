<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  // if(isset($_POST['submit'])){
  //
  // if(isset($_POST['name'])){
  //   echo $_POST['name'];
  // }
  // if(empty($_POST['name'])){
  //   echo "lol";
  // }
  //
  // }
  $a="";
  if(isset($_GET['submit'])){

    if(empty($_GET['name']) && !preg_match('/^[a-zA-Z ]*$/",$_GET["name"]')){
      $a= "<span style='color:red'>Name Is required</span>";
    }
    if(isset($_GET['name'])){
      $ab=$_GET['name'];
    }

  }
  ?>

  <form action="" method="get">
    <input type="text" name="name"><br>
<span><?php echo $a; ?></span>
<span><?php if(isset($ab)) echo $ab; ?></span>

    <br><br>
    <input type="text" name="email"><br>
    <input type="submit" name="submit">
  </form>

</body>
</html>
