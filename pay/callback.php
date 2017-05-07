<?php

require_once(dirname(__FILE__) . '/../inc/lib/bitbayar.php');
$token = 'SA2F9A3695DF5509BFCD597EC3DBC89BF';

$bitbayar = new Bitbayar($token);
$invoiceStatus = json_decode($bitbayar->paymentCallback());

if($invoiceStatus>status=='paid'){
	//~ Do something
}else{
	//~ return status : pending, expired
}

file_put_contents('callback.txt', print_r($invoiceStatus, TRUE));