<!-- Section: Activities -->
<section id="exercise" class="bg-light">
      <div class="container">
        <h1 class="l-heading text-center">
          <span class="text-primary">Classes </span> & Leisure
        </h1>
        <div class="row">
          <div class="col s4 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/gym.jpg" />
                <a
                  href="#modal-exercise1"
                  class="activity-plus-btn modal-trigger btn-floating halfway-fab waves-effect waves-light bg-primary"
                  ><i class="fas fa-plus"></i
                ></a>
              </div>
              <div class="card-content">
                <p><span class="text-primary">Fitness</span></p>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. A,
                  et! Impedit beatae pariatur porro nulla accusamus sapiente
                  iure natus itaque?
                </p>
              </div>
            </div>
          </div>
          <div class="col s4 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/running-track.jpg" />
                <a
                  href="#modal-exercise2"
                  class="activity-plus-btn modal-trigger btn-floating halfway-fab waves-effect waves-light bg-primary"
                  ><i class="fas fa-plus"></i
                ></a>
              </div>
              <div class="card-content">
                <p><span class="text-primary">Running Track</span></p>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. A,
                  et! Impedit beatae pariatur porro nulla accusamus sapiente
                  iure natus itaque?
                </p>
              </div>
            </div>
          </div>
          <div class="col s4 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/boxing.jpg" />
                <a
                  href="#modal-exercise3"
                  class="activity-plus-btn modal-trigger btn-floating halfway-fab waves-effect waves-light bg-primary"
                  ><i class="fas fa-plus"></i
                ></a>
              </div>
              <div class="card-content">
                <p><span class="text-primary">Boxing</span></p>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. A,
                  et! Impedit beatae pariatur porro nulla accusamus sapiente
                  iure natus itaque?
                </p>
              </div>
            </div>
          </div>
          <div class="col s4 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/football.jpg" />
                <a
                 href="#modal-exercise4"
                  class="activity-plus-btn modal-trigger btn-floating halfway-fab waves-effect waves-light bg-primary"
                  ><i class="fas fa-plus"></i
                ></a>
              </div>
              <div class="card-content">
                <p><span class="text-primary">Football</span></p>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. A,
                  et! Impedit beatae pariatur porro nulla accusamus sapiente
                  iure natus itaque?
                </p>
              </div>
            </div>
          </div>
          <div class="col s4 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/tennis.jpg" />
                <a
                  href="#modal-exercise5"
                  class="activity-plus-btn modal-trigger btn-floating halfway-fab waves-effect waves-light bg-primary"
                  ><i class="fas fa-plus"></i
                ></a>
              </div>
              <div class="card-content">
                <p><span class="text-primary">Tennis</span></p>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. A,
                  et! Impedit beatae pariatur porro nulla accusamus sapiente
                  iure natus itaque?
                </p>
              </div>
            </div>
          </div>
          <div class="col s4 m4">
            <div class="card">
              <div class="card-image">
                <img src="img/swimming-pool.jpg" />
                <a
                  href="#modal-exercise6"
                  class="activity-plus-btn modal-trigger btn-floating halfway-fab waves-effect waves-light bg-primary"
                  ><i class="fas fa-plus"></i
                ></a>
              </div>
              <div class="card-content">
                <p><span class="text-primary">Swimming</span></p>
                <p>
                  Lorem ipsum dolor, sit amet consectetur adipisicing elit. A,
                  et! Impedit beatae pariatur porro nulla accusamus sapiente
                  iure natus itaque?
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Exercise Modals -->
      <div id="modal-exercise1" class="modal activity-modal">
        <div class="modal-wrapp">
          <div class="modal-content">
            <h4>
              <span class="text-primary">Book </span
              ><span class="exercise-title">Fitness</span>
            </h4>
            <form action="php/add-booking.php" method="post">
              <input type="hidden" name="user-id" value="<?php echo $_SESSION['userID']?>"/>
              <input type="hidden" name="activity-id" value="1"/>
              <input
                type="text"
                class="datepicker"
                name="activity-date"
                placeholder="Select date..."
                required="" aria-required="true"
              />
              <button type="submit" name="addBookingBtn" class="btn booking-submit">
                <i class="fas fa-check"></i> Book
              </button>
              <button class="btn booking-cancel modal-close">
                <i class="fas fa-times 7x"></i> Cancel
              </button>
            </form>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
      <div id="modal-exercise2" class="modal activity-modal">
        <div class="modal-wrapp">
          <div class="modal-content">
            <h4>
              <span class="text-primary">Book </span
              ><span class="exercise-title">Running Track</span>
            </h4>
            <form action="php/add-booking.php" method="post">
              <input type="hidden" name="user-id" value="<?php echo $_SESSION['userID']?>"/>
              <input type="hidden" name="activity-id" value="2"/>
              <input
                type="text"
                class="datepicker"
                placeholder="Select date..."
                required="" aria-required="true"
              />
              <button type="submit" name="addBookingBtn" class="btn booking-submit">
                <i class="fas fa-check"></i> Book
              </button>
              <button class="btn booking-cancel modal-close">
                <i class="fas fa-times 7x"></i> Cancel
              </button>
            </form>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
      <div id="modal-exercise3" class="modal activity-modal">
        <div class="modal-wrapp">
          <div class="modal-content">
            <h4>
              <span class="text-primary">Book </span
              ><span class="exercise-title">Boxing</span>
            </h4>
            <form action="php/add-booking.php" method="post">
              <input type="hidden" name="user-id" value="<?php echo $_SESSION['userID']?>"/>
              <input type="hidden" name="activity-id" value="3">
              <input
                type="text"
                class="datepicker"
                placeholder="Select date..."
                required="" aria-required="true"
              />
              <button type="submit" name="addBookingBtn" class="btn booking-submit">
                <i class="fas fa-check"></i> Book
              </button>
              <button class="btn booking-cancel modal-close">
                <i class="fas fa-times 7x"></i> Cancel
              </button>
            </form>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
      <div id="modal-exercise4" class="modal activity-modal">
        <div class="modal-wrapp">
          <div class="modal-content">
            <h4>
              <span class="text-primary">Book </span
              ><span class="exercise-title">Football</span>
            </h4>
            <form action="php/add-booking.php" method="post">
              <input type="hidden" name="user-id" value="<?php echo $_SESSION['userID']?>"/>
              <input type="hidden" name="activity-id" value="4">
              <input
                type="text"
                class="datepicker"
                placeholder="Select date..."
                required="" aria-required="true"
              />
              <button type="submit" name="addBookingBtn" class="btn booking-submit">
                <i class="fas fa-check"></i> Book
              </button>
              <button class="btn booking-cancel modal-close">
                <i class="fas fa-times 7x"></i> Cancel
              </button>
            </form>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
      <div id="modal-exercise5" class="modal activity-modal">
        <div class="modal-wrapp">
          <div class="modal-content">
            <h4>
              <span class="text-primary">Book </span
              ><span class="exercise-title">Tennis</span>
            </h4>
            <form action="php/add-booking.php" method="post">
              <input type="hidden" name="user-id" value="<?php echo $_SESSION['userID']?>"/>
              <input type="hidden" name="activity-id" value="5">
              <input
                type="text"
                class="datepicker"
                placeholder="Select date..."
                required="" aria-required="true"
              />
              <button type="submit" name="addBookingBtn" class="btn booking-submit">
                <i class="fas fa-check"></i> Book
              </button>
              <button class="btn booking-cancel modal-close">
                <i class="fas fa-times 7x"></i> Cancel
              </button>
            </form>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
      <div id="modal-exercise6" class="modal activity-modal">
        <div class="modal-wrapp">
          <div class="modal-content">
            <h4>
              <span class="text-primary">Book </span
              ><span class="exercise-title">Swimming</span>
            </h4>
            <form action="php/add-booking.php" method="post">
              <input type="hidden" name="user-id" value="<?php echo $_SESSION['userID']?>"/>
              <input type="hidden" name="activity-id" value="6">
              <input
                type="text"
                class="datepicker"
                placeholder="Select date..."
                required="" aria-required="true"
              />
              <button type="submit" name="addBookingBtn" class="btn booking-submit">
                <i class="fas fa-check"></i> Book
              </button>
              <button class="btn booking-cancel modal-close">
                <i class="fas fa-times 7x"></i> Cancel
              </button>
            </form>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </section>
    <?php
      echo '<script> disableBookings(' . $GLOBALS['logged'] . '); </script>';
    ?>