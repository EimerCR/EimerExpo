<?php
declare(strict_types=1);

require_once '../Transaction.php';

$transactions = new Transaction(100, 'Transaction 1'))

->addtax(8);
->applyDiscount(10);
->getAmount();

$cantidad = $transactions->gerAmout();

var_dump($cantidad);

