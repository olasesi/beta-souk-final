<?php 
require_once ('../incs-template1/config.php'); 
include_once ('../incs-template1/cookie-session.php'); 


if(!isset($_SESSION['user_id'])){
	header("Location:/");
	exit();
}

if(!isset($_GET['modify_categories'])){
	header("Location:/");
	exit();
}


$select_products_cat = mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories WHERE products_categories_id = '".$_GET['modify_categories']."'") or die(db_conn_error);
if(mysqli_num_rows($select_products_cat) == 1){
   while($rows = mysqli_fetch_array($select_products_cat)){
    $rows_each_product = $rows['products_categories_name'];
}
}else{
	header("Location:/");
	exit();
}

$errors = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['submit'])){
	 
    if (preg_match ('/^.{3,20}$/i', trim($_POST['products_categories']))) {	
		$products_categories = mysqli_real_escape_string ($connect, trim($_POST['products_categories']));
	} else {
		$errors['products_categories'] = 'Please enter valid category name.';
	} 
	 
  //now to edit the product	
     if (empty($errors)){
     
        $query_products_categories = mysqli_query($connect,"UPDATE products_categories SET products_categories_name = '".$products_categories."' WHERE products_categories_id = '".$_GET['modify_categories']."'") or die(db_conn_error);

       // $confirm = 1;   
        
           if(mysqli_affected_rows($connect) == 1){
             
                 header('Location:'.GEN_WEBSITE.'/products-categories.php?confirm_modify=1');
                 exit();
             }
       
             
           
 } 
 
  }














 include ('../incs-template1/header.php'); ?>
<?php include ('../incs-template1/settings.php'); ?>








<main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>User Information</li>
                </ul>
            </div>
        </div>



        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="ps-section__left">
                            <aside class="ps-widget--account-dashboard">
                                <div class="ps-widget__header"><img src="img/users/3.jpg" alt="" />
                                    <figure>
                                        <figcaption>Hello</figcaption>
                                        <p><?=$EMAIL;?></p>
                                    </figure>
                                </div>
                               
                            </aside>
                        </div>
                    </div>
                   <div class="col-lg-8">
    

                   




<?php 
if(isset($confirm) AND $confirm == 1){
    echo ' <h3><span class="badge bg-primary">Category has been added</span></h3>';

}
?>

<?php 
if(isset($confirm) AND $confirm == 1){
    echo '<h3><span class="badge bg-primary"><a href="/products-categories.php">Back to Products Categories</a></span></h3>';

}
?>









                   

                        <div class="ps-section__right">
                            <form class="ps-form--account-setting" action="" method="POST">
                                <div class="ps-form__header">
                                    <h3> Add products categories</h3>
                                </div>
                                <div class="ps-form__content">
                                     <div class="form-group">
                                        <label>Change category name</label>
                                        <input class="form-control" type="text" placeholder="e.g Clothings" name="products_categories" value="<?php if(isset($_POST['products_categories'])){echo $_POST['products_categories'];}else{echo $rows_each_product;} ?>">
                                        <?php if (array_key_exists('products_categories', $errors)) {
	                    echo '<p class="text-danger" >'.$errors['products_categories'].'</p>';
	                    }
                    ?>
                                    </div> 
                                    <div class="row">
                                        <!-- <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input class="form-control" type="text" placeholder="Please enter phone number...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input class="form-control" type="text" placeholder="Please enter your email...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Birthday</label>
                                                <input class="form-control" type="text" placeholder="Please enter your birthday...">
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Slider banner number</label>
                                               
                                               
                                              

                                                <select class="form-control" name="products-categories">
                                                
                                                    
                                             
                                                
                                                
                                                
                                              
                                                </select>
                                               
                                            </div>
                                        </div> -->
                                        <!-- <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Upload</label>
                                                <input class="form-control" type="file" placeholder="Upload slider" name="slider_banner">
                                               
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="form-group submit">
                                    <button class="ps-btn" type="submit" name="submit">Modify category</button>
                                </div>
                            </form>
                        </div>

<?php
//to return to product cat
?>                

                        
                    
                      
                       
                    
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- <div class="ps-newsletter">
            <div class="ps-container">
                <form class="ps-form--newsletter" action="do_action" method="post">
                    <div class="row">
                        <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__left">
                                <h3>Newsletter</h3>
                                <p>Subcribe to get information about products and coupons</p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-form__right">
                                <div class="form-group--nest">
                                    <input class="form-control" type="email" placeholder="Email address">
                                    <button class="ps-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
    </main>










<?php include ('../incs-template1/footer.php'); ?>