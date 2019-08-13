<?php
function sanitize($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = strip_tags($input);
  $input = htmlspecialchars($input);

  return $input;
}

if(isset($_POST['register-submit'])) {
  require 'database.php';
  
  // Get inputs
  $firstName = htmlspecialchars($_POST['first-name']);
  $lastName = htmlspecialchars($_POST['last-name']);
  $email = htmlspecialchars($_POST['register-email']);
  $phone = htmlspecialchars($_POST['register-phone']);
  $street = htmlspecialchars($_POST['street']);
  $city = htmlspecialchars($_POST['city']);
  $postcode = htmlspecialchars($_POST['postcode']);
  $password = htmlspecialchars($_POST['password']);

  // Sanitize inputs
  $firstName = sanitize($firstName);
  $lastName = sanitize($lastName);
  $email = sanitize($email);
  $phone = sanitize($phone);
  $street = sanitize($street);
  $city = sanitize($city);
  $postcode = sanitize($postcode);
  $password = sanitize($password);

  // Verify if email is already taken
  $sql = "SELECT member_email FROM members WHERE member_email=?";
  $statement = mysqli_stmt_init($connection);
  if(!mysqli_stmt_prepare($statement, $sql)) {
    header("Location: ../index.php?error=sqlerror");
    exit();
  } else {
    mysqli_stmt_bind_param($statement, "s", $email);
    mysqli_stmt_execute($statement);
    mysqli_stmt_store_result($statement);
    $resultCheck = mysqli_stmt_num_rows($statement);
    // If the email is taken, throw an error message in URL
    if($resultCheck > 0) {
      header("Location: ../index.php?error=mailtaken");
      exit();
    } else {
      // If email is NOT taken, proceed to creating new user
      $sql = "INSERT INTO members (member_firstname, member_lastname, member_email, member_phone, street, city, postcode, member_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
      $statement = mysqli_stmt_init($connection);

      if(!mysqli_stmt_prepare($statement, $sql)) {
        header("Location: ../index.php?error=sqlerror");
        exit();
      } else {
        mysqli_stmt_bind_param($statement, "ssssssss", $firstName, $lastName, $email, $phone, $street, $city, $postcode, $password);
        mysqli_stmt_execute($statement);
        header("Location: ../index.php?registration=successful");
        exit();
      }
      mysqli_stmt_close($stmt);
      mysqli_close($conn);
    }
  }
}
else {
  header("Location: ../index.php?notallowed");
  exit();
}