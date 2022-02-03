<?php include_once 'dbconnect.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Register Account</h2>

<form action="<?= htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
  <label for="username">Username</label><br>
  <input type="text" id="username" name="username" required><br>
  <label for="e-mail">E-mail</label><br>
  <input type="text" id="email" name="email" required><br>
  <label for="password">Password</label><br>
  <input type="text" id="passsword" name="passsword" required><br><br>
  <input type="submit" name="submit" value="submit">
</form> 


<?php

if (isset($_POST['submit'])) {
  if (!empty($_POST['username'])) {
    if (!empty($_POST['email'])) {
        if (!empty($_POST['passsword'])) {
            $username = htmlentities((string)$_POST['username']);
            $email = htmlentities((string)$_POST['email']);
            $password = htmlentities((string)$_POST['passsword']);
            storeValues($conn, $username, $email, $password);
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

function storeValues($conn, string $username, string $email, string $password)
    {
        $query = "INSERT INTO registration (username, email, passsword) VALUES (
            ?,?,?
        );";

        $stmt = mysqli_prepare($conn, $query) or die(mysqli_error($conn));
        mysqli_stmt_bind_param($stmt, 'sss', $username, $email, $password);

        mysqli_stmt_execute($stmt) or die(mysqli_error($conn));

        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        echo "Account created! <br>";
        header('Location: index.php');
    }

?>

</body>
</html>