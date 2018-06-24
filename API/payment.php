<?php

// PayPal settings
//$paypal_email = 'user@domain.com';
$paypal_email = 'misrak.terefe@aau.edu.et';
$return_url = 'http://localhost:8888/emazon/checkout_success';
$cancel_url = 'http://localhost:8888/emazon';
$notify_url = 'http://localhost:8888/emazon';

$item_name = 'Cart Items';
$item_amount = 1.00;

// Include Functions
include("payment_functions.php");

// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])){
	$querystring = '';

	// Firstly Append paypal account to querystring
	$querystring .= "?business=".urlencode($paypal_email)."&";

	// Append amount& currency (£) to quersytring so it cannot be edited in html

	//The item name and amount can be brought in dynamically by querying the $_POST['item_number'] variable.
	$querystring .= "item_name=".urlencode($item_name)."&";
	$querystring .= "amount=".urlencode($item_amount)."&";

	//loop for posted values and append to querystring
	foreach($_POST as $key => $value){
		$value = urlencode(stripslashes($value));
		$querystring .= "$key=$value&";
	}

	// Append paypal return addresses
	$querystring .= "return=".urlencode(stripslashes($return_url))."&";
	$querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
	$querystring .= "notify_url=".urlencode($notify_url);

	// Append querystring with custom field
	//$querystring .= "&custom=".USERID;

	// Redirect to paypal IPN
	header('location:https://www.sandbox.paypal.com/cgi-bin/webscr'.$querystring);
	exit();
} else {
	//Database Connection
	$link = mysql_connect($host, $user, $pass);
	mysql_select_db($db_name);

	// Response from Paypal

	// read the post from PayPal system and add 'cmd'
	$req = 'cmd=_notify-validate';
	foreach ($_POST as $key => $value) {
		$value = urlencode(stripslashes($value));
		$value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i','${1}%0D%0A${3}',$value);// IPN fix
		$req .= "&$key=$value";
	}

	// assign posted variables to local variables
	$data['item_name']			= $_POST['item_name'];
	$data['item_number'] 		= $_POST['item_number'];
	$data['payment_status'] 	= $_POST['payment_status'];
	$data['payment_amount'] 	= $_POST['mc_gross'];
	$data['payment_currency']	= $_POST['mc_currency'];
	$data['txn_id']				= $_POST['txn_id'];
	$data['receiver_email'] 	= $_POST['receiver_email'];
	$data['payer_email'] 		= $_POST['payer_email'];
	$data['custom'] 			= $_POST['custom'];

$valid_txnid = check_txnid($data['txn_id']);
$valid_price = check_price($data['payment_amount'], $data['item_number']);
// PAYMENT VALIDATED & VERIFIED!
if ($valid_txnid && $valid_price) {

	$orderid = updatePayments($data);

	if ($orderid) {
		// Payment has been made & successfully inserted into the Database
	} else {
		// Error inserting into DB
		// E-mail admin or alert user
		// mail('user@domain.com', 'PAYPAL POST - INSERT INTO DB WENT WRONG', print_r($data, true));
	}
} else {
	// Payment made but data has been changed
	// E-mail admin or alert user
}
}

?>
