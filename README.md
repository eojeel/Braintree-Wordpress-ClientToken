# Braintree-Wordpress-ClientToken

## Braintree Payments Wordpress Intergration. (PHP)

Installation.

1. Following Braintree's [simple server setup](https://developers.braintreepayments.com/start/hello-server/php), install via composer.
2. configure the environment and API credentials, this is referenced in the config.php
3. Added the code within functions.php to your themes function file.
  ⋅⋅1. braintree & config file are currently being loaded from wp root folder using ABSPATH.
4.  Function called on page by using [ClientToken] short code.
  ⋅⋅1. token can then be used to initiate a payment.
