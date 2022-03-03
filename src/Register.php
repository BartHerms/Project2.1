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
  <h2>Register Account</h2>

  <form action="<?= htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="username">Username</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="e-mail">E-mail</label><br>
    <input type="text" id="email" name="email" required><br>
    <label for="password">Password</label><br>
    <input type="text" id="password" name="password" required><br><br>
    <input type="submit" name="submit" value="submit">
    <a href="Login.php">Login now</a>
  </form>


  <?php

  if (isset($_POST['submit'])) {
    if (!empty($_POST['username'])) {
      if (!empty($_POST['email'])) {
        if (!empty($_POST['password'])) {
          $username = htmlentities((string)$_POST['username']);
          $email = htmlentities((string)$_POST['email']);
          $password = htmlentities((string)$_POST['password']);
          $hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
          storeValues($conn, $username, $email, $hashedPassword);
        } else {
          echo "no password given";
        }
      } else {
        echo "no e-mail given";
      }
    } else {
      echo "no username given";
    }
  }

  function storeValues($conn, string $username, string $email, string $hashedPassword)
  {
    $query = "INSERT INTO registration (username, email, password) VALUES (
            ?,?,?
        );";

    $stmt = mysqli_prepare($conn, $query) or die(mysqli_error($conn));
    mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $hashedPassword);

    mysqli_stmt_execute($stmt) or die(mysqli_error($conn));

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    echo "Account created! <br>";
  }

  ?>
  <?php include_once 'footer.php' ?>
</body>

</html>