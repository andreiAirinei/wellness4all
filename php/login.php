<?php

function sanitize($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = strip_tags($input);
  $input = htmlspecialchars($input);

  return $input;
}

if(isset($_POST['login-submit'])) {
  require 'database.php';

  $email = htmlspecialchars($_POST['login-email']);
  $password = htmlspecialchars($_POST['login-password']);

  $email = sanitize($email);
  $password = sanitize($password);

  $sql = "SELECT * FROM members WHERE member_email=?;";
  $statement = mysqli_stmt_init($connection);

  if(!mysqli_stmt_prepare($statement, $sql)) {
    header("Location: index.php?error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($statement, "s", $email);
    mysqli_stmt_execute($statement);
    $result = mysqli_stmt_get_result($statement);
    if($row = mysqli_fetch_assoc($result)){
      // if($passwordCheck == false) {
        if($password != $row['member_password']) {
        header("Location: ../index.php?error=wrongpassword");
        exit();
      } else if($password == $row['member_password']) {
        session_start();
        $_SESSION['userID'] = $row['member_id'];
        $_SESSION['userEmail'] = $row['member_email'];

        // For admin log in, redirect to admin page
        if($email === 'admin') {
          header("Location: ../admin/admin.php?login=success");
          exit();
        } else {
          header("Location: ../index.php?login=success");
          exit();
        }
      } else {
        header("Location: ../index.php?error=wrongpassword");
        exit();
      }
    } else {
      header("Location: ../index.php?nouser");
      exit();
    }
  }

  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}

else {
	header("Location: ../index.php?wtf");
	exit();
}
?>