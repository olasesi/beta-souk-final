<?php
require_once ('../incs-template1/config.php'); 
include_once ('../incs-template1/cookie-session.php'); 
include ('../incs-template1/header.php'); 


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
    unset($_SESSION['email_customer']);
      unset($_SESSION['price']);
      unset($_SESSION['product_name']);
      unset($_SESSION['ref']);
 echo ' <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Payment Success</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="ps-block--payment-success">
                    <h3>Payment Success !</h3>
                    <p>Thanks for your payment. Please visit<a href="user-information.html"> here</a> to check your order status.</p>
                </div>
            </div>
        </section>
 
 ';
   
//Perform necessary action
}else{
   echo '<h3>Payment was not successful</h3>';
    unset($_SESSION['email_customer']);
      unset($_SESSION['price']);
      unset($_SESSION['product_name']);
      unset($_SESSION['ref']);
}




include ('../incs-template1/footer.php'); ?>