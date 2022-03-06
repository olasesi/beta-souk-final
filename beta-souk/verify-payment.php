<?php
require_once ('../incs-template1/config.php'); 
include_once ('../incs-template1/cookie-session.php'); 



$result = array();
//The parameter after verify/ is the transaction reference to be verified
$url = 'https://api.paystack.co/transaction/verify/'.$_GET['reference'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
$ch, CURLOPT_HTTPHEADER, [
 'Authorization: '.API]
);
$request = curl_exec($ch);
curl_close($ch);

if ($request) {
$result = json_decode($request, true);
}

if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {

   
    mysqli_query($connect, "UPDATE orders SET orders_status='1' WHERE orders_reference = '".$_GET['reference']."' AND orders_reference = '0'") or die(db_conn_error);

 
   
//Perform necessary action
}else{
   echo '<h3>Payment was not successful</h3>';
}
