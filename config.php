<?php

require 'paypal/autoload.php';

define('URL_SITIO','http://localhost/ecomers');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'ARi3VfElwWBi86Em-_QhmiLZh90lRkXPzAJckhNjeab0EfUhdf7Uvh4bjJ2AnvKkuumxIfsKR5Zwayp_',//Cliente
        'EOWGJBUMbRRTmgWiht4JQdyPSzDfCn_JbUUvAmo0HmF3KFK6W1Jx8FtgkGpj4ZAKOcQJQvcdDpp1ecCq'//Secret
    )
);



?>