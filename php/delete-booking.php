<?php

if(isset($_POST['btnDeleteBooking'])) {
  require 'database.php';

  $bookingID = $_POST['booking-id'];

  $sql = "DELETE FROM bookings WHERE booking_id=" . $bookingID . ";";
  if(mysqli_query($connection, $sql)) {
		header("Location: ../index.php?delete=success");
		exit();
	} else {
    header("Location: ../index.php?error=sqlerror");
		exit();
  }
  mysqli_close($conn);
} else {
  header("Location: ../index.php?notallowed");
	exit();
}