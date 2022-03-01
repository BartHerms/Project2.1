<?php include_once './src/dbconnect.php' ?>
<?php include_once './src/LoginHelper.php' ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/home.css">

</head>

<body>
  <?php include_once '../public/header.php' ?>



  <h2>Login</h2>

  <form action="LoginHelper.php" method="POST">
    <label for="email">E-mail</label><br>
    <input type="text" id="email" name="email" required><br>
    <label for="password">Password</label><br>
    <input type="text" id="password" name="password" required><br><br>
    <input type="submit" value="login" name="submit">
    <a href="Register.php">Register</a>
  </form>
</body>

</html>

<?php

// $sql = "SELECT email, password FROM registration";
// $result = mysqli_query($conn, $sql);

// mysqli_close($conn);

if (isset($_REQUEST["error"]))
  $msg = "Invalid username or Password";
?>
<p style="color:red;">
  <?php if (isset($msg)) {

    echo $msg;
  }
  ?>

  <?php include_once '../public/footer.php' ?>