<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/4f2a2e5394.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Admin Page</title>
  </head>
  <body>
    <nav>
      <div class="container">
        <ul>
          <li><a href="#!">Bookings</a></li>
          <li><a href="#!">Messages</a></li>
        </ul>
      </div>
      <form action="../php/logout.php" method="post">
			  <button id="adminLogoutBtn" class="btn" type="submit" name="logout-submit">Logout</button>
			</form>
    </nav>

    <!-- Section Messages -->
    <section id="messages">
      <div class="container">
        <h4>Messages</h4>

        <?php
          require '../php/database.php'; 
          $sql = "SELECT * FROM messages;";
          $result = mysqli_query($connection, $sql);
          $resultCheck = mysqli_num_rows($result);

          echo '<ul class="collapsible">';

          if($resultCheck > 0) {
            
            while($row = mysqli_fetch_assoc($result)) { 
              echo '<li>';
              echo '<div class="collapsible-header"><i class="fas fa-envelope">
                    </i>'.$row['from_email'].'</div>';
              echo '<div class="collapsible-body"><span>'.$row['from_message'].'</span></div></li>';
            }
          } else {
            echo '<h4>There are no messages!</h4>';
          }

          echo '</ul>';
        ?> 
      </div>
    </section>

    <!-- Section Bookings -->
    <section id="bookings">
      <div class="container">
        <h4>Bookings</h4>
        <table>
          <thead>
            <tr>
              <th>Name</th>
              <th>Activity</th>
              <th>Date</th>
              <th>Update/Delete</th>
            </tr>
          </thead>
  
          <tbody>
            <!-- Fetch bookings from database and display -->
            <?php 
              require '../php/database.php';
              $sql = "SELECT * FROM `bookings`
                LEFT JOIN `members` ON `bookings`.`bk_member_id` = `members`.`member_id`
                LEFT JOIN `activities` ON `activities`.`activity_id` = `bookings`.`bk_activity_id`
                ORDER BY `member_firstname`;";
              $result = mysqli_query($connection, $sql);
              $resultCheck = mysqli_num_rows($result);

              if($resultCheck > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                  echo '<tr><td>' . $row['member_firstname'] . ' ' . $row['member_lastname'] . '</td>';
                  echo '<td>' . $row['activity_name'] . '</td>';
                  echo '<td>' . $row['bk_date'] . '</td>';
                  echo '<td><i class="fas fa-pen datepicker"></i>';
                  echo '<form action="delete-booking.php" method="post">
                        <input type="hidden" name="booking-id" value="' . $row['booking_id'] .'">
                        <button href="#!" type="submit" name="btnDeleteBooking"><i class="far fa-trash-alt"></i></button>
                        </form></td></tr>';
                }
              } else {
                echo '<h4>No bookings made!</h4>';
              }
            ?>
          </tbody>
        </table>
      </div>
    </section>

    <!-- Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.js"
      integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../js/admin.js"></script>
  </body>
</html>
