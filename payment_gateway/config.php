<?php
require('stripe-php-master/init.php');

$Publishablekey="pk_test_51IXqT7SFIg2xggGMlHhW454HXyqzMA24Jp1Clxb63nId31oJ0lXdIXSat7Z86W34HHMhrypQl3jFq1GOmZz7kDjN00aZBeRdnA";
$Secretkey="sk_test_51IXqT7SFIg2xggGMpu9ZFsJBstg01ZSIQWBNgyV2X99TXAixkVZePhFNiwz0z93euZima6yYpmn0JbNCHSBA7dbS00bi8qRsKk";

\Stripe\Stripe::setApiKey($Secretkey);

?>