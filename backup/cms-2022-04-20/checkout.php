<?php include "includes/db.inc.php"; ?>
<?php include "includes/header.php"; ?>


<!-- Navigation -->

<?php include "includes/navigation.php"; ?>
    <main>
      <section class="container">
        <h2 class="heading-secondary">CHECKOUT</h2>
      </section>
      <div class="checkout-details container">
        <div class="delivery-address">
          <div class="form--address">
            <h2 class="heading-secondary">Billing Address</h2>
            <p class="subheading">
              Please enter your details and delivery address below.
            </p>
            <form action="" method="post">
              <p class="term">All fields are required.</p>
              <div class="one">
                <label for="firstName" id="firstNameLabel">First Name</label
                ><input
                  type="text"
                  name="firstName"
                  id="firstName"
                  placeholder="e.g John"
                />
              </div>

              <div class="one">
                <label for="lastName" id="lastNameLabel">Last Name</label>
                <input
                  type="text"
                  name="lastName"
                  id="lastName"
                  placeholder="e.g Smith"
                />
              </div>
              <div class="one">
                <label for="email" id="emaillabel">Email Address: </label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="e.g johnsmith@gmail.com"
                />
              </div>
              <div class="one">
                <label for="phone" id="phonelabel">Phone Number: </label
                ><input
                  type="text"
                  name="phone"
                  id="phone"
                  placeholder="e.g 0422 345 678"
                />
              </div>
              <br />
              <p class="heading-tertiary">Address</p>

              <div class="one">
                <label for="street-number">Street No: </label>
                <input
                  type="text"
                  name="street number"
                  placeholder="e.g 12 example street"
                />
              </div>
              <div class="one">
                <label for="suburb">Suburb: </label>
                <input type="text" name="suburb" placeholder="e.g Mirrabooka" />
              </div>
              <div class="one">
                <label for="state">Choose your state:</label>
                <select id="state" name="states">
                  <option value="">Select a state</option>
                  <option value="NSW">New South Wales</option>
                  <option value="VIC">victoria</option>
                  <option value="SA">South Australia</option>
                  <option value="NT">Northern Territory</option>
                  <option value="WA">Western Australia</option>
                  <option value="QLD">Queenland</option>
                  <option value="TAS">Tasmania</option>
                  <option value="ACT">Australia Capital Territory</option>
                </select>
              </div>
              <div class="one">
                <label for="postcode">Postcode: </label>
                <input type="text" name="postcode" placeholder="e.g 6066" />
              </div>
            </form>
          </div>

          <!--Delivery-->
          <div class="delivery-options">
            <h3 class="heading-tertiary">Delivery Options</h3>
            <h3 class="subheading">Please select the delivery option.</h3>
            <div class="std-delivery">
              <form action="" method="get">
                <input
                  type="radio"
                  name="exp-delivery"
                  value="Standard Delivery"
                />
                <label for="standard">Standard Delivery: $10</label><br />
                <input
                  type="radio"
                  name="std-delivery"
                  value="Standard Delivery"
                />
                <label for="standard">Express Delivery:$15</label><br />
              </form>
            </div>
            <div class="free-delivery"></div>
          </div>

          <!--Payment-->
          <section class="payment">
            <form action="/action_page.php">
              <div class="payment-option">
                <h3 class="heading-tertiary">Payment</h3>
                <div>
                  <h3 class="subheading">Accepted cards:</h3>
                  <div class="icon-container">
                    <img
                      src="img/master-card.png"
                      alt="mastercard"
                      class="card-img"
                    />
                    <a href="www.paypal.com"
                      ><img
                        src="img/paypal-logo.png"
                        alt="paypal"
                        class="card-img"
                    /></a>
                  </div>
                </div>
                <div class="one">
                  <label for="cname">Name on Card</label>
                  <input
                    type="text"
                    id="cname"
                    name="cardname"
                    placeholder="John More Doe"
                  />
                </div>

                <div class="one">
                  <label for="ccnum">Credit card number</label>
                  <input
                    type="text"
                    id="ccnum"
                    name="cardnumber"
                    placeholder="1111-2222-3333-4444"
                  />
                </div>
                <div class="one">
                  <label for="expmonth">Exp Date</label>
                  <input
                    type="text"
                    id="expmonth"
                    name="expmonth"
                    placeholder="01/2022"
                  />
                </div>

                <div class="one">
                  <label for="cvv">CVV</label>
                  <input type="text" id="cvv" name="cvv" placeholder="352" />
                </div>
              </div>

              <div class="one">
                <label>
                  <input type="checkbox" checked="checked" name="sameadr" />
                  Shipping address same as billing
                </label>
              </div>
              <div>
                <input type="submit" value=" checkout" class="btn btn--full" />
              </div>
            </form>
          </section>
        </div>
        <!--List of items in the cart -->
        <div class="my-cart-items container">
          <h2 class="heading-secondary">Shoping Cart</h2>
          <table class="cart">
            <thead>
              <tr class="checkout-list-title">
                <th>ITEMS</th>
                <th class="checkout--items"><a href="#">Edit</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href=""
                    ><img
                      src="img/best-selling-books/Abandoned-In-Death-by-J.D.Robb.jpg"
                      alt="Abandoned-In-Death-by-J.D.Robb"
                      class="cart-img"
                  /></a>
                </td>

                <td>
                  <p>Lorem ipsum dolor sit</p>
                  <p>J.D.Robb</p>
                  <p>$25</p>
                  <p>Qty:1</p>
                </td>
              </tr>

              <tr>
                <td>
                  <a href="#"
                    ><img
                      src="img/Magazine/Belle Magazine.jpg"
                      alt="Abandoned-In-Death-by-J.D.Robb"
                      class="cart-img"
                  /></a>
                </td>
                <td>
                  <p>Lorem ipsum dolor sit</p>
                  <p>J.D.Robb</p>
                  <p>$9.50</p>
                  <p>Qty:1</p>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td>Sub-total</td>
                <td>$38</td>
              </tr>
              <tr>
                <td>Shipping fee</td>
                <td>$7.00</td>
              </tr>
              <tr>
                <td>Total to pay</td>
                <td>$45</td>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </main>

    <?php "includes/footer.php";?>