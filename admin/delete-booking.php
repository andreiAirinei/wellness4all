<?php

if(isset($_POST['btnDeleteBooking'])) {
  require '../php/database.php';

  $bookingID = $_POST['booking-id'];

  $sql = "DELETE FROM bookings WHERE booking_id=" . $bookingID . ";";
  if(mysqli_query($connection, $sql)) {
		header("Location: ../admin/admin.php?delete=success");
		exit();
	} else {
    header("Location: ../admin/admin.php?error=sqlerror");
		exit();
  }
  mysqli_close($conn);
} else {
  header("Location: ../admin/admin.php?notallowed");
	exit();
}