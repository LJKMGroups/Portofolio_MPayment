<?php

require_once(dirname(__FILE__) . '/../inc/lib/bitbayar.php');
$token = 'SA2F9A3695DF5509BFCD597EC3DBC89BF';
$id = '58b29501194e3110881584';

$bitbayar = new Bitbayar($token);
$invoice_status = json_decode($bitbayar->invoiceStatus($id));


if($invoice_status->status=='paid'){
	//~ Do something
	print_r('Status : ' . $invoice_status->status);
}else{
	//~ return status : pending, expired
	print_r('Status : ' . $invoice_status->status);
}