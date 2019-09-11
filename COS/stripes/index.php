<?php require_once('./config.php'); ?>

<form action="http://localhost/COS/stripes/success/success.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Online Shopping"
          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
          data-name="COS"
          data-amount="5000"
          data-locale="auto"></script>
</form>