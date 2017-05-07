<?php

require_once(dirname(__FILE__) . '/../inc/lib/bitbayar.php');

$token = 'SA2F9A3695DF5509BFCD597EC3DBC89BF';

$bitbayar = new Bitbayar($token);
$acc_balances = json_decode($bitbayar->balances()); 

echo "<pre>";
print_r($acc_balances->balances->btc);