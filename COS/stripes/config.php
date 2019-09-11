<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_Nhy2myhC0zLxyzSKeL3zH5XC00ZTFnrB4B",
  "publishable_key" => "pk_test_U61oxbQIm8syI88nbMW3vP0900IZDhLgCS",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>