<?php
declare(strict_types=1);

require_once 'Transaction1.php';

$transactions = new Transaction1(100, 'Transaction 1');
$transactions->addtax(8)
->applyDiscount(10)
->getAmount();

$cantidad = $transactions->getAmount();

var_dump($cantidad);

