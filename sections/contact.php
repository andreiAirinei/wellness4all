<section id="contact">
      <div class="info bg-dark">
        <div class="contact-where">
          <h2 class="m-heading">The Gym</h2>
          <ul class="list">
            <li>24/7</li>
            <li>123 Null Street</li>
            <li>City Center</li>
            <li>Birmingam</li>
            <li>West Midlands</li>
            <li>012-345-6789</li>
          </ul>
        </div>
        <div class="more">
          <h2 class="m-heading">Info</h2>
          <ul class="list">
            <li><a href="#!" class="links">Link1</a></li>
            <li><a href="#!" class="links">Link2</a></li>
            <li><a href="#!" class="links">Link3</a></li>
            <li><a href="#!" class="links">Link4</a></li>
            <li><a href="#!" class="links">Link5</a></li>
            <li><a href="#!" class="links">Link6</a></li>
          </ul>
        </div>
        <div class="more">
          <h2 class="m-heading">More</h2>
          <ul class="list">
            <li><a href="#!" class="links">Link1</a></li>
            <li><a href="#!" class="links">Link2</a></li>
            <li><a href="#!" class="links">Link3</a></li>
            <li><a href="#!" class="links">Link4</a></li>
            <li><a href="#!" class="links">Link5</a></li>
            <li><a href="#!" class="links">Link6</a></li>
          </ul>
        </div>
      </div>
      <div class="contact-form bg-dark">
        <h2 class="m-heading text-center">Contact Us</h2>
        <p class="text-center">Please use the form below to contact us</p>
        <form action="php/contact-form.php" method="post">
          <div class="form-group">
            <input type="text" name="name" id="name" placeholder="Enter Name" required="" aria-required="true" />
          </div>
          <div class="form-group">
            <input
              type="email"
              name="contact-email"
              id="contact-email"
              placeholder="Enter Email"
              required="" aria-required="true"
            />
          </div>
          <div class="form-group">
            <input
              type="number"
              name="contact-phone"
              id="contact-phone"
              placeholder="Enter Phone Number"
              required="" aria-required="true"
            />
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea
              name="message"
              id="message"
              placeholder="Enter Message"
              required="" aria-required="true"
            ></textarea>
          </div>
          <input type="submit" value="Send" name="message-submit" class="btn-submit" />
        </form>
      </div>
      <div id="googleMap"></div>
    </section>