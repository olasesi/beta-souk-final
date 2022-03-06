<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="<?php echo KEY_WORDS;?>">
    <meta name="description" content="<?php echo PAGE_DESCRIPTION;?>">
    <title><?php echo TITLE;?></title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
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
                        <li class=""><a href="<?=GEN_WEBSITE.'/about-us.php';?>">About Us</a><span class="sub-toggle"></span>
                          
                        </li>
                        <li class=""><a href="<?=GEN_WEBSITE.'/shop.php';?>">Shop</a><span class="sub-toggle"></span>
                           
                        </li>
                        <li class=""><a href="<?=GEN_WEBSITE.'/contact-us.php';?>">Contact Us</a><span class="sub-toggle"></span>
                            
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


   