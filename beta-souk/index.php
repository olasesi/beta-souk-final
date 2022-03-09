<?php require_once ('../incs-template1/config.php'); ?>
<?php include_once ('../incs-template1/cookie-session.php'); ?>
<?php include ('../incs-template1/header.php'); ?>
<?php include ('../incs-template1/settings.php'); ?>




<div id="homepage-1">
    <div class="ps-home-banner ps-home-banner--1">
        <div class="ps-container">
            <div class="ps-section__left">
            <?php
if(isset($_SESSION['user_id'])){
   echo  '<small>slider banners (1230x425)px</small>';
}
   ?>
                <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1"
                    data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
                   <?php
                   	$query_slider_banner_select =  mysqli_query($connect, "SELECT slider_banner_image FROM slider_banner ORDER BY slider_id ASC LIMIT 3") or die(db_conn_error);

                   while($looping_slider=mysqli_fetch_array($query_slider_banner_select)){
            echo ' <div class="ps-banner bg--cover" data-background="images/sliders/'.$looping_slider['slider_banner_image'].'">
                <a class="ps-banner__overlay" ></a>
                    </div>';

                   }

                  
                   ?>
                   
                   
                   
                </div>
            </div>
            <div class="ps-section__right">
            <?php
if(isset($_SESSION['user_id'])){
   echo  '<small>banner 1 &#38; banner 2 (390x193)px</small>';
 }
   ?>

<?php
                   	$query_banner_select =  mysqli_query($connect, "SELECT banner_image FROM banner ORDER BY banner_id ASC LIMIT 2") or die(db_conn_error);

                   while($looping_banner=mysqli_fetch_array($query_banner_select)){
            echo '<a class="ps-collection"><img src="images/banners/'.$looping_banner['banner_image'].'" alt="'.$looping_banner['banner_image'].'"></a>';

                   }

                  
                   ?>
               
               
            </div>
        </div>
    </div>
    <div class="ps-site-features">
        <div class="ps-container">
            <div class="ps-block--site-features">
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-rocket"></i></div>
                    <div class="ps-block__right">
                        <h4>Free Delivery</h4>
                        <p>For all orders more than a certain amount</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-sync"></i></div>
                    <div class="ps-block__right">
                        <h4>90 Days Return</h4>
                        <p>If goods have problems</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-credit-card"></i></div>
                    <div class="ps-block__right">
                        <h4>Secure Payment</h4>
                        <p>100% secure payment</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-bubbles"></i></div>
                    <div class="ps-block__right">
                        <h4>24/7 Support</h4>
                        <p>Dedicated support</p>
                    </div>
                </div>
                <div class="ps-block__item">
                    <div class="ps-block__left"><i class="icon-gift"></i></div>
                    <div class="ps-block__right">
                        <h4>Gift Service</h4>
                        <p>Support gift service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
        $select_products3 = mysqli_query($connect,"SELECT * FROM products WHERE products_deals = 'Deals of the day' ORDER BY products_id DESC LIMIT 12" ) or die(db_conn_error);

        if (mysqli_num_rows($select_products3) != 0) {

        echo '

        <div class="ps-deal-of-day">
            <div class="ps-container">
                <div class="ps-section__header">
                    <div class="ps-block--countdown-deal">
                        <div class="ps-block__left">
                            <h3>Deals of the day</h3>
                        </div>
                        <div class="ps-block__right">
                            <figure>
                                <figcaption>End in:</figcaption>
                                <ul class="ps-countdown" data-time="December 30, 2021 15:37:25">
                                    <li><span class="days"></span></li>
                                    <li><span class="hours"></span></li>
                                    <li><span class="minutes"></span></li>
                                    <li><span class="seconds"></span></li>
                                </ul>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">';
                        
                        

                while($rows_loop = mysqli_fetch_array($select_products3)){

                echo '
                <div class="ps-product">


                <div class="ps-product__thumbnail">
                    <a href="product-description.php?id='.$rows_loop['products_id'].'"><img src="images/products/'.$rows_loop['products_image'].'" alt="'.$rows_loop['products_name'].'" /></a>';
                    if(!empty($rows_loop['products_sales_price'])){
                        $dis = 100 - ceil($rows_loop['products_sales_price']/$rows_loop['products_price']*100);
                        echo '
                        <div class="ps-product__badge">-'.$dis.'%</div>
                        ';
                    }
                    echo    '
                    <ul class="ps-product__actions">
                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>

                    </ul>
                    </div>




                    <div class="ps-product__container">';
                    if(isset($_SESSION['user_id'])){
                    echo '<div class="text-center my-1">

                            <a href="edit-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-success btn-lg">Edit</button></a>
                            <a href="delete-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
                        </div>';}


        

                    echo '
                            <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="1">2</option>
                                        <option value="1">3</option>
                                        <option value="1">4</option>
                                        <option value="2">5</option>
                                    </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                                    echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                                } 
                
                echo '</p>
                
                </div>
                    <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                        <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                            echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                        } 
                    echo ' </p>
                            
                    </div>
                    
                    </div>





                

                </div>

                    ';}

                    echo '
                    </div>
                </div>
            </div>
        </div> ';
        }

    
    ?> 

    





    <div class="ps-home-ads pb-5">
        <div class="ps-container">
            <div class="row">
            


    <?php
                   	$query_banner_select =  mysqli_query($connect, "SELECT banner_image FROM banner ORDER BY banner_id ASC LIMIT 2,3") or die(db_conn_error);

                   while($looping_banner=mysqli_fetch_array($query_banner_select)){
            echo ' <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection"><img src="images/banners/'.$looping_banner['banner_image'].'" alt="'.$looping_banner['banner_image'].'"></a></div>';

                   }

                  
                   ?>
               


               
            </div>
        </div>
    </div>
 

                        <?php 
                        $query_page_section =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories ORDER BY products_categories_id ASC LIMIT 0,1") or die(db_conn_error);

                        ?>    
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                                                <?php
                                            while($while_query_page_section=mysqli_fetch_array($query_page_section)){
                                echo '<h3>'.$while_query_page_section['products_categories_name']. '</h3>';

                                $pro_cat_name =$while_query_page_section['products_categories_id'];
                                }?>
               
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                   
                                                         <?php 
                                    $query_sel_pro_sec =  mysqli_query($connect, "SELECT * FROM products WHERE products_sub_categories = '". $pro_cat_name."' ORDER BY products_id ASC LIMIT 12") or die(db_conn_error);

                                    while($rows_loop=mysqli_fetch_array($query_sel_pro_sec)){

                                        echo '
                                       <div class="ps-product">
    <div class="ps-product__thumbnail">
        <a href="product-description.php?id='.$rows_loop['products_id'].'"><img src="images/products/'.$rows_loop['products_image'].'" alt="'.$rows_loop['products_name'].'" /></a>';
        if(!empty($rows_loop['products_sales_price'])){
            $dis = 100 - ceil($rows_loop['products_sales_price']/$rows_loop['products_price']*100);
            echo '
            <div class="ps-product__badge">-'.$dis.'%</div>
            ';
        }
echo    '
<ul class="ps-product__actions">
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>

</ul>
</div>




    <div class="ps-product__container">';
    if(isset($_SESSION['user_id'])){
       echo '<div class="text-center my-1">

            <a href="edit-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-success btn-lg">Edit</button></a>
            <a href="delete-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
        </div>';}


     

echo '
        <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
            <div class="ps-product__rating">
                <select class="ps-rating" data-read-only="true">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                </select><span>01</span>
            </div>
            <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
            } 
            
            echo '</p>
            
        </div>
            <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                    echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                } 
            echo ' </p>
                    
            </div>
            
            </div>
                                    
                                    
                                    
                                    
                                    
                                                
            
                        </div>
            
                                ';



            } 
            ?> 
 
                    
                   

                </div>
            </div>






        </div>
    </div>
    





    <?php 
                        $query_page_section =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories ORDER BY products_categories_id ASC LIMIT 1, 1") or die(db_conn_error);

                        ?>    
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                <?php
                    while($while_query_page_section=mysqli_fetch_array($query_page_section)){
                    echo '<h3>'.$while_query_page_section['products_categories_name']. '</h3>';

                    $pro_cat_name =$while_query_page_section['products_categories_id'];
                }?>
               
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                   
                    <?php 
                        $query_sel_pro_sec =  mysqli_query($connect, "SELECT * FROM products WHERE products_sub_categories = '". $pro_cat_name."' ORDER BY products_id ASC LIMIT 12") or die(db_conn_error);

                        while($rows_loop=mysqli_fetch_array($query_sel_pro_sec)){

                        echo '
                        <div class="ps-product">
                            <div class="ps-product__thumbnail">
                                <a href="product-description.php?id='.$rows_loop['products_id'].'"><img src="images/products/'.$rows_loop['products_image'].'" alt="'.$rows_loop['products_name'].'" /></a>';
                                if(!empty($rows_loop['products_sales_price'])){
                                    $dis = 100 - ceil($rows_loop['products_sales_price']/$rows_loop['products_price']*100);
                                    echo '
                                    <div class="ps-product__badge">-'.$dis.'%</div>
                                        ';}
                                        echo    
                                        '<ul class="ps-product__actions">
                                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>

                                        </ul>
                                     </div>




                                    <div class="ps-product__container">';
                                    if(isset($_SESSION['user_id'])){
                                    echo '<div class="text-center my-1">

                                            <a href="edit-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-success btn-lg">Edit</button></a>
                                            <a href="delete-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
                                        </div>';}


     

echo '
        <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
            <div class="ps-product__rating">
                <select class="ps-rating" data-read-only="true">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                </select><span>01</span>
            </div>
            <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
            } 
            
            echo '</p>
            
        </div>
            <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                    echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                } 
            echo ' </p>
                    
            </div>
            
            </div>
                                    
                                    
                                    
                                    
                                    
                                                
            
                        
                        </div>
            
                                ';



            } 
            ?> 
 
                    
                   

                </div>
            </div>






        </div>
    </div>
    


    <?php 
                        $query_page_section =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories ORDER BY products_categories_id ASC LIMIT 2,1") or die(db_conn_error);

                        ?>    
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                                                <?php
                                            while($while_query_page_section=mysqli_fetch_array($query_page_section)){
                                echo '<h3>'.$while_query_page_section['products_categories_name']. '</h3>';

                                $pro_cat_name =$while_query_page_section['products_categories_id'];
                                }?>
               
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                   
                                                         <?php 
                                    $query_sel_pro_sec =  mysqli_query($connect, "SELECT * FROM products WHERE products_sub_categories = '". $pro_cat_name."' ORDER BY products_id ASC LIMIT 12") or die(db_conn_error);

                                    while($rows_loop=mysqli_fetch_array($query_sel_pro_sec)){

                                        echo '
                                       <div class="ps-product">
    <div class="ps-product__thumbnail">
        <a href="product-description.php?id='.$rows_loop['products_id'].'"><img src="images/products/'.$rows_loop['products_image'].'" alt="'.$rows_loop['products_name'].'" /></a>';
        if(!empty($rows_loop['products_sales_price'])){
            $dis = 100 - ceil($rows_loop['products_sales_price']/$rows_loop['products_price']*100);
            echo '
            <div class="ps-product__badge">-'.$dis.'%</div>
            ';
        }
echo    '
<ul class="ps-product__actions">
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>

</ul>
</div>




    <div class="ps-product__container">';
    if(isset($_SESSION['user_id'])){
       echo '<div class="text-center my-1">

            <a href="edit-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-success btn-lg">Edit</button></a>
            <a href="delete-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
        </div>';}


     

echo '
        <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
            <div class="ps-product__rating">
                <select class="ps-rating" data-read-only="true">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                </select><span>01</span>
            </div>
            <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
            } 
            
            echo '</p>
            
        </div>
            <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                    echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                } 
            echo ' </p>
                    
            </div>
            
            </div>
                                    
                                    
                                    
                                    
                                    
                                                
            
                        </div>
            
                                ';



            } 
            ?> 
 
                    
                   

                </div>
            </div>






        </div>
    </div>
    


    <?php 
                        $query_page_section =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories ORDER BY products_categories_id ASC LIMIT 3, 1") or die(db_conn_error);

                        ?>    
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
            <?php
                while($while_query_page_section=mysqli_fetch_array($query_page_section)){
                echo '<h3>'.$while_query_page_section['products_categories_name']. '</h3>';

                $pro_cat_name =$while_query_page_section['products_categories_id'];
                }?>
               
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                   
                                                         <?php 
                                    $query_sel_pro_sec =  mysqli_query($connect, "SELECT * FROM products WHERE products_sub_categories = '". $pro_cat_name."' ORDER BY products_id ASC LIMIT 12") or die(db_conn_error);

                                    while($rows_loop=mysqli_fetch_array($query_sel_pro_sec)){

                                        echo '
                                       <div class="ps-product">
    <div class="ps-product__thumbnail">
        <a href="product-description.php?id='.$rows_loop['products_id'].'"><img src="images/products/'.$rows_loop['products_image'].'" alt="'.$rows_loop['products_name'].'" /></a>';
        if(!empty($rows_loop['products_sales_price'])){
            $dis = 100 - ceil($rows_loop['products_sales_price']/$rows_loop['products_price']*100);
            echo '
            <div class="ps-product__badge">-'.$dis.'%</div>
            ';
        }
echo    '
<ul class="ps-product__actions">
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>

</ul>
</div>




    <div class="ps-product__container">';
    if(isset($_SESSION['user_id'])){
       echo '<div class="text-center my-1">

            <a href="edit-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-success btn-lg">Edit</button></a>
            <a href="delete-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
        </div>';}


     

echo '
        <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
            <div class="ps-product__rating">
                <select class="ps-rating" data-read-only="true">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                </select><span>01</span>
            </div>
            <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
            } 
            
            echo '</p>
            
        </div>
            <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                    echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                } 
            echo ' </p>
                    
            </div>
            
            </div>
                                    
                                    
                                    
                                    
                                    
                                                
            
                        </div>
            
                                ';



            } 
            ?> 
 
                    
                   

                </div>
            </div>






        </div>
    </div>
    


    <?php 
                        $query_page_section =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories ORDER BY products_categories_id ASC LIMIT 4, 1") or die(db_conn_error);

                        ?>    
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                                                <?php
                                            while($while_query_page_section=mysqli_fetch_array($query_page_section)){
                                echo '<h3>'.$while_query_page_section['products_categories_name']. '</h3>';

                                $pro_cat_name =$while_query_page_section['products_categories_id'];
                                }?>
               
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                   
                                                         <?php 
                                    $query_sel_pro_sec =  mysqli_query($connect, "SELECT * FROM products WHERE products_sub_categories = '". $pro_cat_name."' ORDER BY products_id ASC LIMIT 12") or die(db_conn_error);

                                    while($rows_loop=mysqli_fetch_array($query_sel_pro_sec)){

                                        echo '
                                       <div class="ps-product">
    <div class="ps-product__thumbnail">
        <a href="product-description.php?id='.$rows_loop['products_id'].'"><img src="images/products/'.$rows_loop['products_image'].'" alt="'.$rows_loop['products_name'].'" /></a>';
        if(!empty($rows_loop['products_sales_price'])){
            $dis = 100 - ceil($rows_loop['products_sales_price']/$rows_loop['products_price']*100);
            echo '
            <div class="ps-product__badge">-'.$dis.'%</div>
            ';
        }
echo    '
<ul class="ps-product__actions">
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>

</ul>
</div>




    <div class="ps-product__container">';
    if(isset($_SESSION['user_id'])){
       echo '<div class="text-center my-1">

            <a href="edit-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-success btn-lg">Edit</button></a>
            <a href="delete-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
        </div>';}


     

echo '
        <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
            <div class="ps-product__rating">
                <select class="ps-rating" data-read-only="true">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                </select><span>01</span>
            </div>
            <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
            } 
            
            echo '</p>
            
        </div>
            <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                    echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                } 
            echo ' </p>
                    
            </div>
            
            </div>
                                    
                                    
                                    
                                    
                                    
                                                
            
                        </div>
            
                                ';



            } 
            ?> 
 
                    
                   

                </div>
            </div>






        </div>
    </div>
    


    <?php 
                        $query_page_section =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories ORDER BY products_categories_id ASC LIMIT 5, 1") or die(db_conn_error);

                        ?>    
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                                                <?php
                                            while($while_query_page_section=mysqli_fetch_array($query_page_section)){
                                echo '<h3>'.$while_query_page_section['products_categories_name']. '</h3>';

                                $pro_cat_name =$while_query_page_section['products_categories_id'];
                                }?>
               
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                   
                                                         <?php 
                                    $query_sel_pro_sec =  mysqli_query($connect, "SELECT * FROM products WHERE products_sub_categories = '". $pro_cat_name."' ORDER BY products_id ASC LIMIT 12") or die(db_conn_error);

                                    while($rows_loop=mysqli_fetch_array($query_sel_pro_sec)){

                                        echo '
                                       <div class="ps-product">
    <div class="ps-product__thumbnail">
        <a href="product-description.php?id='.$rows_loop['products_id'].'"><img src="images/products/'.$rows_loop['products_image'].'" alt="'.$rows_loop['products_name'].'" /></a>';
        if(!empty($rows_loop['products_sales_price'])){
            $dis = 100 - ceil($rows_loop['products_sales_price']/$rows_loop['products_price']*100);
            echo '
            <div class="ps-product__badge">-'.$dis.'%</div>
            ';
        }
echo    '
<ul class="ps-product__actions">
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>

</ul>
</div>




    <div class="ps-product__container">';
    if(isset($_SESSION['user_id'])){
       echo '<div class="text-center my-1">

            <a href="edit-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-success btn-lg">Edit</button></a>
            <a href="delete-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
        </div>';}


     

echo '
        <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
            <div class="ps-product__rating">
                <select class="ps-rating" data-read-only="true">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                </select><span>01</span>
            </div>
            <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
            } 
            
            echo '</p>
            
        </div>
            <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                    echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                } 
            echo ' </p>
                    
            </div>
            
            </div>
                                    
                                    
                                    
                                    
                                    
                                                
            
                        </div>
            
                                ';



            } 
            ?> 
 
                    
                   

                </div>
            </div>






        </div>
    </div>
    


    <?php 
                        $query_page_section =  mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories ORDER BY products_categories_id ASC LIMIT 6, 1") or die(db_conn_error);

                        ?>    
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                                                <?php
                                            while($while_query_page_section=mysqli_fetch_array($query_page_section)){
                                echo '<h3>'.$while_query_page_section['products_categories_name']. '</h3>';

                                $pro_cat_name =$while_query_page_section['products_categories_id'];
                                }?>
               
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                   
                                                         <?php 
                                    $query_sel_pro_sec =  mysqli_query($connect, "SELECT * FROM products WHERE products_sub_categories = '". $pro_cat_name."' ORDER BY products_id ASC LIMIT 12") or die(db_conn_error);

                                    while($rows_loop=mysqli_fetch_array($query_sel_pro_sec)){

                                        echo '
                                       <div class="ps-product">
    <div class="ps-product__thumbnail">
        <a href="product-description.php?id='.$rows_loop['products_id'].'"><img src="images/products/'.$rows_loop['products_image'].'" alt="'.$rows_loop['products_name'].'" /></a>';
        if(!empty($rows_loop['products_sales_price'])){
            $dis = 100 - ceil($rows_loop['products_sales_price']/$rows_loop['products_price']*100);
            echo '
            <div class="ps-product__badge">-'.$dis.'%</div>
            ';
        }
echo    '
<ul class="ps-product__actions">
<li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>

</ul>
</div>




    <div class="ps-product__container">';
    if(isset($_SESSION['user_id'])){
       echo '<div class="text-center my-1">

            <a href="edit-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-success btn-lg">Edit</button></a>
            <a href="delete-products.php?id='.$rows_loop['products_id'].'"><button type="button" class="btn btn-danger btn-lg">Delete</button></a>
        </div>';}


     

echo '
        <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
            <div class="ps-product__rating">
                <select class="ps-rating" data-read-only="true">
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="2">5</option>
                </select><span>01</span>
            </div>
            <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
            } 
            
            echo '</p>
            
        </div>
            <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$rows_loop['products_id'].'">'.$rows_loop['products_name'].'</a>
                <p class="ps-product__price sale">'; if(!empty($rows_loop['products_sales_price'])){
                    echo '&#8358;'.number_format($rows_loop['products_sales_price']).' ' . '<del>'.'&#8358;'.number_format($rows_loop['products_price']) .'</del>';
                } 
            echo ' </p>
                    
            </div>
            
            </div>
                                    
                                    
                                    
                                    
                                    
                                                
            
                        </div>
            
                                ';



            } 
            ?> 
 
                    
                   

                </div>
            </div>






        </div>
    </div>
    


















  
    <div class="ps-home-ads mb-5">
        <div class="ps-container">
            <div class="row">



                <?php
                $query_banner_select =  mysqli_query($connect, "SELECT banner_image FROM banner WHERE banner_name='banner 6'") or die(db_conn_error);
                while($looping_banner=mysqli_fetch_array($query_banner_select)){
                echo ' 
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "><a class="ps-collection mb-md-5 mb-lg-0"><img src="images/banners/'.$looping_banner['banner_image'].'" alt="'.$looping_banner['banner_image'].'"></a> </div>';

                                }

                ?>
                            
                            <?php
                $query_banner_select =  mysqli_query($connect, "SELECT banner_image FROM banner WHERE banner_name='banner 7'") or die(db_conn_error);
                while($looping_banner=mysqli_fetch_array($query_banner_select)){
                echo ' 
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection"><img src="images/banners/'.$looping_banner['banner_image'].'" alt="'.$looping_banner['banner_image'].'"></a> </div>';

                                }

                ?>                                    
               
                
               
            </div>
        </div>
    </div>
   
   


   
</div>
<?php include ('../incs-template1/footer.php'); ?>
