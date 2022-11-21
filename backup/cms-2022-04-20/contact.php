<?php include "includes/db.inc.php"; ?>
<?php include "includes/header.php"; ?>


<!-- Navigation -->

<?php include "includes/navigation.php"; ?>

    <main>
      <section class="container margin-bottom-ld">
        <h2 class="heading-secondary">Contact Us</h2>
        <p class="subheading">
          you have any questions or queries, we are here to help 24/7. Please
          send us a message below.
        </p>

        <div class="contact">
          <div class="contact-info">
            <address class="contacts">
              <h2 class="heading-tertiary">Our Location</h2>
              <p class="address">22/309 Charles Street, West Perth WA 6066</p>

              <h2 class="heading-tertiary">Call Us or Email Us</h2>
              <p>
                <a class="footer-link" href="tel:415-201-6370">415-201-6370</a
                ><br />
                <a class="footer-link" href="mailto:hello@thebookmark.com"
                  >thebookmark@gmail.com</a
                >
              </p>
              <div class="margin-bottom-md"></div>

              <div class="social-icons">
                <h2 class="heading-tertiary">
                  Get in touch on Our Social Media Pages
                </h2>
                <ul class="social-links">
                  <li>
                    <a class="footer-link" href="#"
                      ><ion-icon
                        class="social-icon"
                        name="logo-instagram"
                      ></ion-icon
                    ></a>
                  </li>
                  <li>
                    <a class="footer-link" href="#"
                      ><ion-icon
                        class="social-icon"
                        name="logo-facebook"
                      ></ion-icon
                    ></a>
                  </li>
                  <li>
                    <a class="footer-link" href="#"
                      ><ion-icon
                        class="social-icon"
                        name="logo-twitter"
                      ></ion-icon
                    ></a>
                  </li>
                </ul>
              </div>
            </address>
          </div>
          <?php include "includes/contact-form.php" ;?>
        </div>
      </section>
    </main>
<?php include "includes/footer.php"; ?>
