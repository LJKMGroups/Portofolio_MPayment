<?php

  session_start();

      if (!isset($_SESSION['ponsel'])) {
        header("location:voucher.php");
    }

require_once(dirname(__FILE__) . '/../../inc/lib/bitbayar.php');

$rand_number = rand(10, 999);
$token = 'SA2F9A3695DF5509BFCD597EC3DBC89BF';
$data = array(
	'token'		  => $token,
	'invoice_id'  => $rand_number,
	'rupiah'	  => $_SESSION['provider'],
	'memo'		  => 'Invoice #'. $_SESSION['ponsel'],
	'callback_url'=> $_SERVER['SERVER_NAME'] . '/login_dashboard/pay/callback.php',
	'url_success' => $_SERVER['SERVER_NAME'] . '/login_dashboard/pay/payment_success.php',
	'url_failed'  => $_SERVER['SERVER_NAME'] . '/login_dashboard/pay/payment_failed.php'
);


$bitbayar = new Bitbayar($token);
$create_invoice = json_decode($bitbayar->createInvoice($data));


if($create_invoice->success){
	//~ Redirect to BitBayar payment page.
	$bitbayar->redirect($create_invoice->payment_url);
}else{
	exit('Bitbayar API Error : '.$create_invoice->error_message);
}