
<?php require_once('./config.php'); ?>
<?php include 'insertquote.php';
echo $tp; ?>

<form action="http://localhost/COS/stripes/success/success.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          var s='<?php echo $tp;?>'
          data-description="Online Shopping"
          data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
          data-name="COS"
          data-amount="<?php echo $tp*100 ?>"
          data-locale="auto"></script>
         
</form>
