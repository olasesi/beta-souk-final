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
   
     $body =  '
    <h3>Hello '.$_SESSION['email_customer'].',</h3>

<p>Thank you for placing an order on '.$website_name.'. We will begin processing immediately your order is confirmed, and we will get back to you.

Here is/are what you ordered.</p><br>

-['.$_SESSION['product_name'].']

<br>
Thank you again for choosing '.$website_nam.' for your purchase.<br>

Best regards,<br>
Team '.$website_name.'
    ';
    
     $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= 'From: noreply@'.website_name. "\r\n";
    $headers .= 'Reply-To: noreply@'.website_name. "\r\n";
    $headers .= 'Return-Path: noreply@'.website_name. "\r\n";
    $headers .= 'BCC: noreply@'.website_name. "\r\n";
    $headers .= 'X-Priority: 3' . "\r\n";
    $headers .= 'X-Mailer: PHP/'. phpversion() . "\r\n";
    
    mail($_SESSION['email_customer'], 'Payment Success!', $body, $headers);	





    $body2 =  '
    <h3>Hello '.$website_name.',</h3>

<p>'.$_SESSION['email_customer'].' has placed an order on '.$website_name.'. Please confirm and get back to the customer.

Here is/are what he ordered.</p><br>

-['.$_SESSION['product_name'].']

<br>
Thank you.<br>
    ';
    
     $headers2 = 'MIME-Version: 1.0' . "\r\n";
    $headers2 .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers2 .= 'From: noreply@'.website_name. "\r\n";
    $headers2 .= 'Reply-To: noreply@'.website_name. "\r\n";
    $headers2 .= 'Return-Path: noreply@'.website_name. "\r\n";
    $headers2 .= 'BCC: noreply@'.website_name. "\r\n";
    $headers2 .= 'X-Priority: 3' . "\r\n";
    $headers2 .= 'X-Mailer: PHP/'. phpversion() . "\r\n";
    
    mail($EMAIL, 'New customer order', $body2, $headers2);	

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
                    <h3>Payment Success!</h3>
                    <p>Thanks for your payment. Please visit<a href="user-information.html"> here</a> to check your order status.</p>
                </div>
            </div>
        </section>
 
 ';

   
    unset($_SESSION['email_customer']);
      unset($_SESSION['price']);
      unset($_SESSION['product_name']);
      unset($_SESSION['ref']);
   
//Perform necessary action
}else{
   echo '<h3>Payment was not successful</h3>';
    unset($_SESSION['email_customer']);
      unset($_SESSION['price']);
      unset($_SESSION['product_name']);
      unset($_SESSION['ref']);
}




include ('../incs-template1/footer.php'); ?>