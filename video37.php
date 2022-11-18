<?php
declare(strict_types=1);

require_once 'Transaction37.php';
require_once 'Customer.php';
require_once 'PaymentProfile.php';

$transaction = new Transaction37(5, 'text');

    echo $transaction->getCustomer()?->setPaymentProfile(createProfile())?->id;
