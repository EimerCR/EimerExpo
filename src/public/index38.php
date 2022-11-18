<?php

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';
require_once '../PaymentGateway/Paddle/DateTime.php';

use PaymentGateway\Paddle\Transaction;
use PaymentGateway\Stripe\Transaction as StripeTransaction;
use PaymentGateway\Paddle\CustomerProfile;

$paddleTransaction=new Transaction();
$stripeTransaction=new Transaction();
$paddleCustomerProfile = new CustomerProfile();

var_dump($stripeTransaction, $paddleTransaction, $paddleCustomerProfile);