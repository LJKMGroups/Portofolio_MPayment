<?php

require_once(dirname(__FILE__) . '/../inc/lib/bitbayar.php');

$token = 'SA2F9A3695DF5509BFCD597EC3DBC89BF';
$start_list = 300;

$bitbayar = new Bitbayar($token);
$list_invoice = json_decode($bitbayar->listInvoice($start_list)); 

echo "<pre>";
print_r($list_invoice);