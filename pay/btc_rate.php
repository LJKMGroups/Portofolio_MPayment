<?php

require_once(dirname(__FILE__) . '/../inc/lib/bitbayar.php');

$token = 'SA2F9A3695DF5509BFCD597EC3DBC89BF';

$bitbayar = new Bitbayar($token);
$btc_rate = json_decode($bitbayar->rate()); 

//~ echo "<pre>";
print_r("Rp. ". $bitbayar->rp_format($btc_rate->rate));