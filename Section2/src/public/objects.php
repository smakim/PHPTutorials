<?php

require_once '../Transaction1.php';

$transaction1 = (new Transaction1(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(10);

$amount = $transaction1->getAmount();

unset($transaction1);
var_dump($amount);

$str = '{"a":1,"b":2,"c":3}';
$arr = json_decode($str);
var_dump($arr);

$obj = new stdClass();
$obj->a = 1;
$obj->b = 2;
var_dump($obj);

$arr2 = [1, 2, 3];
var_dump((object)$arr2);

var_dump((object) 1);

$transaction2 = new Transaction2(15.5, "2nd desc");
var_dump($transaction2);
