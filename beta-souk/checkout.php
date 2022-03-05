<?php require_once ('../incs-template1/config.php'); ?>
<?php include_once ('../incs-template1/cookie-session.php'); ?>

 <?php 
//  if(!isset($_POST['buy_button'])){
// 	header('Location:'.GEN_WEBSITE);
// 	exit();
   
// } 
?>

<?php
if (!isset($errors)){$errors = array();}



if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['checkout'])){
	 
    if (preg_match ('/^[a-zA-Z]{3,30}$/i', trim($_POST['firstname']))) {		//only 30 characters are allowed to be inputted
		$firstname = mysqli_real_escape_string ($connect, trim($_POST['firstname']));
	} else {
		$errors['firstname'] = 'Please enter firstname.';
	} 
	 
 
    if (preg_match ('/^[a-zA-Z]{3,30}$/i', trim($_POST['surname']))) {		//only 30 characters are allowed to be inputted
		$surname = mysqli_real_escape_string ($connect, trim($_POST['surname']));
	} else {
		$errors['surname'] = 'Please enter surname.';
	} 

    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $email = mysqli_real_escape_string($connect,$_POST['email']);
    }else{
        $errors['email'] = "Enter a valid email address";
    }

   
if(preg_match('/^(0)[0-9]{10}$/i',$_POST['phone'])){
        $phone =  mysqli_real_escape_string($connect,$_POST['phone']);
    }else{
        $errors['phone'] = "Enter a valid phone number";
    }
	
    if (preg_match ('/^.{3,255}$/i', trim($_POST['address']))) {		
		$address = mysqli_real_escape_string ($connect, trim($_POST['address']));
	} else {
		$errors['address'] = 'Please enter address.';
	} 	

    if (preg_match ('/^[a-zA-Z]{3,30}$/i', trim($_POST['city']))) {		
		$city = mysqli_real_escape_string ($connect, trim($_POST['city']));
	} else {
		$errors['city'] = 'Please enter city.';
	}  




	if (empty($errors)){
      $ref = genReference(10);
    $q = mysqli_query($connect,"INSERT INTO orders (orders_firstname, orders_surname, orders_email, orders_phone, 	orders_address, orders_city, orders_name, orders_price, orders_reference) 
    VALUES ('".$firstname."','".$surname."', '".$email."', '".$phone."', '".$address."','".$city."', '".$_POST['price']."', '".$_POST['product_name']."', '".$ref."')") or die(db_conn_error);

if(mysqli_affected_rows($connect) == 1){


    $result = array();

    //Set other parameters as keys in the $postdata array
    $postdata = [
        'email' => $email,
        'amount' => $_POST['price']*100,
        'reference' => $ref,
        'callback_url' => GEN_WEBSITE.'/verify-payment.php'
    ];
    
    $url = "https://api.paystack.co/transaction/initialize";
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $headers = [
        'Authorization: Bearer sk_test_*********************************',
        'Content-Type: application/json',
    
    ];
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $request = curl_exec($ch);
    
    curl_close($ch);
    
    if ($request) {
    
        $result = json_decode($request, true);
    
        header('Location: ' . $result['data']['authorization_url']);
    
    }









}








    }



    }
 
    
?>



<?php include ('../incs-template1/header.php'); ?>
<?php include ('../incs-template1/settings.php'); ?>



<section class="ps-section--account ps-checkout">
            <div class="container">
                <div class="ps-section__header">
                    <h3>Checkout Information</h3>
                </div>
                <div class="ps-section__content">
                    <form class="ps-form--checkout" action="" method="POST">
                        <div class="ps-form__content">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ">
                                    <div class="ps-form__billing-info">
                                        <h3 class="ps-form__heading">Contact Information</h3>
                                        <div class="form-group">
                                            <label>Email </label>
                                            <input class="form-control" type="text" placeholder="Email address" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>">
                                            <?php if (array_key_exists('email', $errors)) {
				echo '<p class="text-danger">'.$errors['email'].'</p>';}?>
                                        </div>
                                        <div class="form-group">
                                            <label> Phone number</label>
                                            <input class="form-control" type="text" placeholder="Phone number" name="phone" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>">
                                            <?php if (array_key_exists('phone', $errors)) {
				echo '<p class="text-danger">'.$errors['phone'].'</p>';}?>
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="ps-checkbox">
                                                <input class="form-control" type="checkbox" id="keep-update" placeholder="">
                                                <label for="keep-update">Keep me up to date on news and exclusive offers?</label>
                                            </div>
                                        </div> -->
                                        <!-- <h3 class="ps-form__heading">Shipping Address</h3> -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>First Name</label>
                                                    <input class="form-control" type="text" placeholder="Firstname" name="firstname" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];} ?>">
                                                    <?php if (array_key_exists('firstname', $errors)) {
				echo '<p class="text-danger">'.$errors['firstname'].'</p>';}?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Last Name</label>
                                                    <input class="form-control" type="text" placeholder="Lastname" name="surname" value="<?php if(isset($_POST['surname'])){echo $_POST['surname'];} ?>">
                                                    <?php if (array_key_exists('surname', $errors)) {
				echo '<p class="text-danger">'.$errors['surname'].'</p>';}?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" type="text" placeholder="Address" name="address" value="<?php if(isset($_POST['address'])){echo $_POST['address'];} ?>">
                                            <?php if (array_key_exists('address', $errors)) {
				echo '<p class="text-danger">'.$errors['address'].'</p>';}?>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Apartment</label>
                                            <input class="form-control" type="text" placeholder="">
                                        </div> -->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input class="form-control" type="text" placeholder="City" name="city" value="<?php if(isset($_POST['city'])){echo $_POST['city'];} ?>">
                                                    <?php if (array_key_exists('city', $errors)) {
				echo '<p class="text-danger">'.$errors['city'].'</p>';}?>
                                                </div>
                                            </div>

                                            
                                            <!-- <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Postal Code</label>
                                                    <input class="form-control" type="text" placeholder="">
                                                </div>
                                            </div> -->
                                        </div>
                                        <!-- <div class="form-group">
                                            <div class="ps-checkbox">
                                                <input class="form-control" type="checkbox" id="save-next-time" placeholder="">
                                                <label for="save-next-time">Keep me up to date on news and exclusive offers?</label>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                                    <div class="ps-block--checkout-order">
                                        <div class="ps-block__content">
                                            <figure>
                                                <figcaption><strong>Product/Service</strong><strong>Total</strong></figcaption>
                                            </figure>
                                            <figure class="ps-block__items"><a href="#"><strong><?php echo $_POST['product_name']; ?></strong>
                                           <small><?php echo $_POST['price'];?></small></a>
                                            
                                            <!-- <a href="#"><strong>Herschel Leather Duffle Bag In Brown Color</strong><span>x1</span><small>$ 125.30</small></a> -->
                                            </figure>
                                            <figure>
                                                <figcaption><strong>Subtotal</strong><strong><?php echo $_POST['price'];?></strong></figcaption>
                                            </figure>
                                                        <input type="hidden" name/>
                                            
                                            <button class="ps-btn" type="submit" name="checkout"> Checkout</button>
                                            <!-- <figure class="ps-block__shipping">
                                                <h3>Shipping</h3>
                                                <p>Calculated at next step</p>
                                            </figure> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>

</div>



<?php include ('../incs-template1/footer.php'); ?>