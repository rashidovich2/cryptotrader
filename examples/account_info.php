<?php 

include_once(dirname(__FILE__).'/../coinbase-pro.php');

$g = new coinbaseExchange(CB_KEY,CB_SECRET,CB_PASSPHRASE);
$g->loadAccounts();
$g->printAccountInfo();