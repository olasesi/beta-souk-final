<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    
    
    <!--facebook open graph -->
    <meta property="og:url" content="<?php 'https://'.$website_name; ?>" />
    <meta property="og:type" content="website" />
    <!--<meta property="og:title" content="" />-->
    <!--<meta property="og:description" content="<?php ?>" />-->
    <!--<meta property="og:image"   content="<?php ?>" />-->
    
    
    <meta name="keywords" content="<?php echo KEY_WORDS;?>">
    <meta name="description" content="<?php echo PAGE_DESCRIPTION;?>">
    <title><?php echo TITLE;?></title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/Linearicons/Linearicons/Font/demo-files/demo.css">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color-style.css">




    <script>
$(document).ready(function(){	
		$(".form-item").submit(function(e){
			var form_data = $(this).serialize();
			var button_content = $(this).find('button[type=submit]');
			button_content.html('Adding...'); //Loading button text 

			$.ajax({ //make ajax request to cart_process.php
				url: "cart_process.php",
				type: "POST",
				dataType:"json", //expect json value from server
				data: form_data
			}).done(function(data){ //on Ajax success
				$("#cart-info").html(data.items); //total items in cart-info element
				button_content.html('Add to Cart'); //reset button text to original text
				alert("Item added to Cart!"); //alert user
				if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
					$(".cart-box").trigger( "click" ); //trigger click to update the cart box.
				}
			})
			e.preventDefault();
		});

	//Show Items in Cart
	$( ".cart-box").click(function(e) { //when user clicks on cart box
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(); //display cart box
		$("#shopping-cart-results").html('<img src="images/ajax-loader.gif">'); //show loading image
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	});
	
	//Close Cart
	$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut(); //close cart-box
	});
	
	//Remove items from cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			$("#cart-info").html(data.items); //update Item count in cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
		});
	});

});
</script>
</head>

<body>



    <header class="header header--1" data-sticky="true">

    
        <div class="header__top">
            <div class="ps-container">
                <div class="header__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Categories</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                              
<?php
	$query_select_products_cat =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories") or die(db_conn_error);

    while($while_product_cat = mysqli_fetch_array($query_select_products_cat)){
      
        echo '<li><a href="categories.php?id='.$while_product_cat['products_categories_id'].'">'.$while_product_cat['products_categories_name'].'</a>
        </li>';
        


    }

?>

                               
                               
                                
                            </ul>
                        </div>
                    </div>
                    <a class="ps-logo" href=""><img src="img/logo_light.png" alt="" /></a>
                </div>
                <div class="header__center">
                    <form class="ps-form--quick-search" action="search.php" method="GET">
                        
                        <input class="form-control" type="text" placeholder="I'm shopping for..." id="input-search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>"/>
                       
                        <button type="submit">Search</button>
                       
                    </form>
                </div>
                <div class="header__right">
                    <div class="header__actions">
                        
                  
                        <div class="ps-cart--mini">
                          
                        </div>
                        <div class="ps-block--user-header">
                            <div class="ps-block__left"><i class="icon-user"></i></div>
                             <div class="ps-block__right">
                               <?php 
                               if(!isset( $_SESSION['user_id'])){
                                   echo ' <a href="'.GEN_WEBSITE.'/login.php">Login</a>';
                               }else{

                                echo ' <a href="'.GEN_WEBSITE.'/logout.php">Logout</a>';
                               }
                               ?> 
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navigation">
            <div class="ps-container">
                <div class="navigation__left">
                    <div class="menu--product-categories">
                        <div class="menu__toggle"><i class="icon-menu"></i><span> Shop by Categories</span></div>
                        <div class="menu__content">
                            <ul class="menu--dropdown">
                               
                                    <?php
                                        $query_select_products_cat =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories") or die(db_conn_error);

                                        while($while_product_cat = mysqli_fetch_array($query_select_products_cat)){
                                        
                                            echo '<li><a href="categories.php?id='.$while_product_cat['products_categories_id'].'">'.$while_product_cat['products_categories_name'].'</a>
                                            </li>';
                                            


                                        }

                                    ?>

                                
                                
                                
                               
                               
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navigation__right">
                    <ul class="menu">
                        <li class=""><a href="<?=GEN_WEBSITE;?>">Home</a><span class="sub-toggle"></span>
                            
                        </li>
                       
                        <li class=""><a href="<?=GEN_WEBSITE.'/shop.php';?>">Shop</a><span class="sub-toggle"></span>
                           
                        </li>
                       
                    </ul>
                  
                </div>
            </div>
        </nav>
    </header>
    <header class="header header--mobile" data-sticky="true">
        <div class="header__top">
            <div class="header__left">
                <p>Welcome to <?=$website_name_with_spaces;?></p>
            </div>
            <div class="header__right">
               
            </div>
        </div>
        <div class="navigation--mobile">
            <div class="navigation__left">
                <a class="ps-logo" href=""><img src="img/logo_light.png" alt="" /></a>
            </div>
            <div class="navigation__right">
                <div class="header__actions">
                 
                    <div class="ps-block--user-header">
                        
                    <div class="ps-block__left">


                    <?php 
                               if(!isset( $_SESSION['user_id'])){
                                   echo ' <a href="'.GEN_WEBSITE.'/login.php"><i class="icon-user"></i></a>';
                               }else{

                                echo ' <a href="'.GEN_WEBSITE.'/logout.php"><i class="icon-user"></i></a>';
                               }
                               ?> 
                    
                    
                 
                        
                    </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="/search.php" method="GET">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something..." name="products_search_input" />
                    <button type="submit" name="products_search_button"><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
    </header>


   