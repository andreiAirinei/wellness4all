<!-- Navbar Modals -->
<!-- Login Modal -->
<div id="modal-login" class="modal">
  <a href="#!"><i class="modal-close fas fa-times 7x"></i></a>
  <div class="modal-content">
    <h4>Login</h4>
    <form action="php/login.php" method="post">
      <input
        type="text"
        id="login-email"
        name="login-email"
        placeholder="Email address..."
        required="" aria-required="true"
      />
      <input
        type="password"
        id="login-password"
        name="login-password"
        placeholder="Password..."
        required="" aria-required="true"
      />
      <input
        type="submit"
        id="login-submit"
        name="login-submit"
        value="Enter"
      />
    </form>
  </div>
  <div class="modal-footer">
    <h6 class="text-center">
      Not a member?
      <a href="#modal-register" class="modal-trigger">Register here</a>
    </h6>
  </div>
</div>

<!-- Register: Modal -->
<div id="modal-register" class="modal top-sheet bg-light">
  <div class="modal-content">
    <h4><span class="text-primary">Become</span> a Member</h4>
    <!-- Register Fields -->
    <div class="row">
      <form class="col s12" action="php/register.php" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input id="first-name" name="first-name" type="text" class="validate" required="" aria-required="true"/>
            <label for="first-name">First Name</label>
          </div>
          <div class="input-field col s6">
            <input id="last-name" name="last-name" type="text" class="validate" required="" aria-required="true"/>
            <label for="last-name">Last Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="register-email" name="register-email" type="email" class="validate" required="" aria-required="true"/>
            <label for="register-email">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="register-phone" name="register-phone" type="number" class="validate" required="" aria-required="true"/>
            <label for="register-phone">Phone Number</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="street" name="street" type="text" class="validate" required="" aria-required="true"/>
            <label for="street">Street</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="city" name="city" type="text" class="validate" required="" aria-required="true"/>
            <label for="city">City</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="postcode" name="postcode" type="text" class="validate" required="" aria-required="true"/>
            <label for="postcode">Postcode</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate" required="" aria-required="true"/>
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">
          <button type="submit" class="btn2 register-submit" name="register-submit">
            <i class="fas fa-check"></i> Submit
          </button>
          <button class="btn2 register-cancel modal-close">
            <i class="fas fa-times 7x"></i> Cancel
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- My Bookings Modal -->
<div id="modal-bookings" class="modal top-sheet">
  <div class="modal-content">
    <h4><span class="text-primary">My</span> Bookings</h4>

    <!-- Print User's bookings -->
    <?php
      require 'php/database.php';
      // $sql = 'SELECT `activities`.`activity_name`, `bookings`.`bk_date` 
      //   FROM `members`
      //   LEFT JOIN `bookings` ON `bookings`.`bk_member_id` = `members`.`member_id`
      //   LEFT JOIN `activities` ON `activities`.`activity_id` = `bookings`.bk_activity_id
      //   WHERE `members`.`member_id` = ' . $_SESSION['userID'] . ';' ;
      $sql = "SELECT * FROM bookings WHERE bk_member_id ='" . $_SESSION['userID'] . "';";
      $result = mysqli_query($connection, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0) {
        ?> 
        <table class="bookings-list highlight">
          <thead>
            <tr>
              <th>Activity</th>
              <th>Date</th>
              <th></th>
            </tr>
            <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)) {
              $getActivityName = "SELECT * FROM activities WHERE activity_id='" . $row['bk_activity_id'] . "';";
              $activityResult = mysqli_query($connection, $getActivityName);
              $activityRow = mysqli_fetch_assoc($activityResult);
              echo '<tr><td>' . $activityRow['activity_name'] . '</td>';
              echo '<td>' . $row['bk_date'] . '</td>';
              echo '<td>
              <form action="php/delete-booking.php" method="post">
              <input type="hidden" name="booking-id" value="' . $row['booking_id'] .'">
              <button href="#!" type="submit" name="btnDeleteBooking"><i class="far fa-trash-alt"></i></button>
              </form></td>';
            }
            ?>
            </tbody>
          </thead>
        </table>
      <?php
      } else {
        echo '<br><h4>No bookings made!</h4>';
      }
    ?>

  </div>
  <div class="modal-footer">
    <a href="#!" class="btn modal-close"
      ><i class="fas fa-chevron-circle-left"></i> Go Back</a
    >
  </div>
</div>