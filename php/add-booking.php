<?php

if(isset($_POST['addBookingBtn'])) {
  
  require 'database.php';

  $userID = $_POST['user-id'];
  $activityID = $_POST['activity-id'];
  $date = $_POST['activity-date'];

  $sql = "INSERT INTO `bookings` (`bk_member_id`, `bk_activity_id`, `bk_date`) 
          VALUES ('" . $userID  . "', '" . $activityID . "','" . $date . "');";
  if(mysqli_query($connection, $sql)) {
    header("Location: ../index.php?booking=success");
    die();
  } else {
    header("Location: ../index.php?error=sqlerror");
    exit();
  }
} else {
  header("Location: ../index.php");
  exit();
}