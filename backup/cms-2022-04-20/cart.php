<?php include "includes/db.inc.php"; ?>
<?php include "includes/header.php"; ?>


<!-- Navigation -->

<?php include "includes/navigation.php"; ?>
    <main>
      <p class="container subheading">Welcome Customer!This is your shopping Cart </p>
      <!--List of items in the cart -->
      <section class="my-shoping-cart container margin-bottom-sm">
        <h2 class="heading-secondary cart-title">Shoping Cart</h2>
        <table class="cart">
          <thead>
            <tr>
              <th>Product</th>
              <th class="book-description">Descriptons</th>
              <th>Price</th>
              <th>Quantity</th>
              <th>Sub-Total</th>
            </tr>

          <tbody>
            <tr>
              <td><a href=""><img src="img/best-selling-books/Abandoned-In-Death-by-J.D.Robb.jpg" alt="Abandoned-In-Death-by-J.D.Robb" class="cart-img"></a></td>
              <td ><p >Lorem ipsum dolor sit amet consectetur.</p><p >J.D.Robb</p></td>
              <td>$25</td>
              <td>1</td>
              <td>$25</td>
              <td><a href="#">Delete</a></td>
            </tr>

            
          </tbody>
          <tfoot>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>Sub-total</td>
              <td>$25</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td>Total</td>
              <td>$25</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <!-- <td></td> -->
              <td><p>Please <a href="sign-in.html">log in </a>  checkout</p></td>
              <td >
                
                <div class="buy-button btn--cart">
                <a href="sign-in.html" 
                  ><span class="btn btn--full"
                    >CHECKOUT
                    </span>
                </a>
              </div></td>
            </tr>
          </tfoot>
          </thead>
        </table>
        <p class="subheading">Please ensure ALL the items you are purchasing are in your Shopping Cart above and are correct.</p> 
      </section>
      
      <section class="payment-methods container  margin-bottom-ld">
       
        <div class="payment-options">
          <p class="heading-tertiary">
            We accept:
          </p>
         
          <div class="cards">
          <img src="img/payment-methods.png" alt="Accepting Payment Types" class="payment-card-img">
         <div class="subheading"><p>Need help?</p><p>1300 768 978 </p> </div>
         
        </div>

        </div>
        
      </section>

      <!--Mail Subscrition  -->
      <!--Promotion  -->
      <section class="container margin-bottom-md">
        <h2 class="heading-secondary">Current Promotion</h2>
        <div class="promotion">
          <div class="free-shipping">
            <a
              ><img
                class="sales-img"
                src="img/free-delivery.jpg"
                alt="sales books on the selve"
              />
            </a>

            <p class="code">
              🏷️Code:FR2022
              <span class="heading-tertiary shipping"
                >Hurry! Limited time ONLY</span
              >
            </p>
            <div>
              <a href="#" class="btn btn--full btn--delivery"
                >Shop Now &darr;</a
              >
            </div>
          </div>

          <div class="sales">
            <a
              ><img
                class="sales-img"
                src="img/book-on-sales.jpg"
                alt="sales books on the selve"
            /></a>
            <p class="code">🏷️ 20% Off Ebook Sales</p>

            <a href="#" class="btn btn--full btn--sale">Shop Now &darr;</a>
          </div>
        </div>
      </section>
    </main>
<?php include "includes/footer.php"; ?>