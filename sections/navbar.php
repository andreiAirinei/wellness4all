<!-- Navbar -->
<div id="navbar">
      <h5 class="logo">
        <span class="text-primary"
          ><i class="fas fa-dumbbell"></i> Wellness</span
        >4All
      </h5>
      <ul class="nav-list">
        <li>
          <a href="#home">
            <span class="text-primary"><i class="fas fa-home"></i></span>
            Home</a
          >
        </li>
        <li>
          <a href="#exercise">
            <span class="text-primary"><i class="fas fa-dumbbell"></i></span>
            Exercise</a
          >
        </li>
        <li>
          <a href="#trainers">
            <span class="text-primary"><i class="fas fa-users"></i></span>
            Trainers</a
          >
        </li>
        <li>
          <a href="#health">
            <span class="text-primary"><i class="fas fa-plus-square"></i></span>
            Health</a
          >
        </li>
        <li>
          <a href="#contact">
            <span class="text-primary"
              ><i class="fas fa-map-marker-alt"></i
            ></span>
            Contact</a
          >
        </li>
      </ul>
      
      <ul class="nav-signing">
      <?php   
        if(isset($_SESSION['userID'])) {
          echo '<li>
          <a href="#modal-bookings" class="modal-trigger mr-3">
            <span class="text-primary"><i class="fas fa-calendar-check"></i></span>
            My Bookins
          </a>
          </li>
          <li>
          <div id="logoutBtn">
            <a href=""><span class="text-primary"
                ><i class="fas fa-door-open"></i
              ></span>
              Logout</a
            >
          </div> 
        </li>';
        } else {
          $logged = 0;
          echo '<li><a id="loginBtn" class="modal-trigger" href="#modal-login">
          <span class="text-primary"><i class="fas fa-hand-point-right"></i></span>
          Member login</a></li>';
        }
      ?>
      </ul>
    </div>

    