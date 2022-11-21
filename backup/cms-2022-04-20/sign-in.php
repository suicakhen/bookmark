<?php include "includes/db.inc.php"; ?>
<?php include "includes/header.php"; ?>


<!-- Navigation -->

<?php include "includes/navigation.php"; ?>

    <main>
      <section class="container">
        <h2 class="heading-secondary">Account</h2>
        <p class="subheading">
          Please enter your email and password to sign in or to create a new
          account
        </p>
        <div class="account">
        <?php include "includes/login-section.php"; ?>

        <?php include "includes/user-register.php"; ?>
        </div>
      </section>
    </main>

    <?php include "includes/footer.php"; ?>