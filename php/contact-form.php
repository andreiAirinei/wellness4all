<?php

function sanitize($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = strip_tags($input);
  $input = htmlspecialchars($input);

  return $input;
}

if(isset($_POST['message-submit'])) {

  require 'database.php';

  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['contact-email']);
  $phone = htmlspecialchars($_POST['contact-phone']);
  $message = htmlspecialchars($_POST['message']);

  $name = sanitize($name);
  $email = sanitize($email);
  $phone = sanitize($phone);
  $message = sanitize($message);
  
  $sql = "INSERT INTO messages (from_name, from_email, from_phone, from_message)
          VALUES (?, ?, ?, ?)";
  $statement = mysqli_stmt_init($connection);

  if(!mysqli_stmt_prepare($statement, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($statement, "ssss", $name, $email, $phone, $message);
    mysqli_stmt_execute($statement);
    header("Location: ../index.php?message=send");
    exit();
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

} else {
	header("Location: ../index.php?error=notallowed");
	exit();
}