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
                </div><a href="#">View all</a>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="5"
                    data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/1.jpg" alt=""></a>
                            <div class="ps-product__badge">-16%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price sale">$567.99 <del>$670.00 </del><small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="82">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:39</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/2.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$101.99<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="10">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:20</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/3.jpg" alt=""></a>
                            <div class="ps-product__badge">-25%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="36">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:62</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/4.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$320.00<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="19">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:54</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/5.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$85.00<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="4">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/6.jpg" alt=""></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price">$92.00<small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="68">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:49</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/7.jpg" alt=""></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="22">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:70</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product ps-product--inner">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/7.jpg" alt=""></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Read More"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container">
                            <p class="ps-product__price sale">$42.00 <del>$60.00 </del><small>18% off</small></p>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <div class="ps-product__progress-bar ps-progress" data-value="87">
                                    <div class="ps-progress__value"><span></span></div>
                                    <p>Sold:95</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 

    





    <div class="ps-home-ads">
        <div class="ps-container">
            <div class="row">
               
                <?php
// if(isset($_SESSION['user_id'])){
//    echo  '<small>banner 3, 4 &#38; 5 (530x285)px</small>';
// }
   ?>


<?php
                   	$query_banner_select =  mysqli_query($connect, "SELECT banner_image FROM banner ORDER BY banner_id ASC LIMIT 2,3") or die(db_conn_error);

                   while($looping_banner=mysqli_fetch_array($query_banner_select)){
            echo ' <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection"><img src="images/banners/'.$looping_banner['banner_image'].'" alt="'.$looping_banner['banner_image'].'"></a></div>';

                   }

                  
                   ?>
               


               <!-- <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                    <a class="ps-collection" href="#"><img src="img/collection/home-1/2.jpg" alt=""></a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                    <a class="ps-collection" href="#"><img src="img/collection/home-1/3.jpg" alt=""></a>
                </div>-->
            </div>
        </div>
    </div>
    <!-- <div class="ps-top-categories">
        <div class="ps-container">
            <h3>Top categories of the month</h3>
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/1.jpg" alt="">
                        <p>Electronics</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/2.jpg" alt="">
                        <p>Clothings</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/3.jpg" alt="">
                        <p>Computers</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/4.jpg" alt="">
                        <p>Home & Kitchen</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/5.jpg" alt="">
                        <p>Health & Beauty</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/6.jpg" alt="">
                        <p>Health & Beauty</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/7.jpg" alt="">
                        <p>Jewelry & Watch</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                    <div class="ps-block--category">
                        <a class="ps-block__overlay" href="shop-default.html"></a><img src="img/categories/8.jpg" alt="">
                        <p>Technology Toys</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

                        <?php 
                        $query_page_section =  mysqli_query($connect, "SELECT products_categories_name FROM products_categories ORDER BY products_categories_id ASC LIMIT 1") or die(db_conn_error);

                        ?>    
    <div class="ps-product-list ps-clothings">
        <div class="ps-container">
            <div class="ps-section__header">
                                                <?php
                                            while($while_query_page_section=mysqli_fetch_array($query_page_section)){
                                echo '<h3>'.$while_query_page_section['products_categories_name']. '</h3>';

                                $pro_cat_name =$while_query_page_section['products_categories_name'];
                                }?>
                <ul class="ps-section__links">
                   
                
                <li><a href="products-categories.php?categories=<?php $while_query_page_section['products_categories_name'];?>&arrivals=1">New Arrivals</a></li>
                    <li><a href="products-categories.php?categories=<?php $while_query_page_section['products_categories_name'];?>&sellers=1">Best seller</a></li>
                    <li><a href="products-categories.php?categories=<?php $while_query_page_section['products_categories_name'];?>&popular=1">Must Popular</a></li>
                    <li><a href="products-categories.php?categories=<?php $while_query_page_section['products_categories_name'];?>&all=1">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4"
                    data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    
                                                         <?php 
                                    $query_sel_pro_sec =  mysqli_query($connect, "SELECT products_id, products_name, products_price, products_image FROM products WHERE products_sub_categories = '".$pro_cat_name."' ORDER BY products_id ASC LIMIT 15") or die(db_conn_error);

                                    while($while_sel_pro=mysqli_fetch_array($query_sel_pro_sec)){

                                    echo '
                                        <div class="ps-product">
                                        <div class="ps-product__thumbnail">
                                            <a href="product-description.php?id='.$while_sel_pro['products_id'].'"><img src="images/products/'.$while_sel_pro['products_image'].'" alt="'.$while_sel_pro['products_name'].'" /></a>
                                        
                                           
                                        </div>
                                        <div class="ps-product__container">
                                            <div class="ps-product__content"><a class="ps-product__title" href="product-description.php?id='.$while_sel_pro['products_id'].'">'.$while_sel_pro['products_name'].'</a>
                                                <div class="ps-product__rating">
                                                    <select class="ps-rating" data-read-only="true">
                                                            <option value="1">1</option>
                                                            <option value="1">2</option>
                                                            <option value="1">3</option>
                                                            <option value="1">4</option>
                                                            <option value="2">5</option>
                                                        </select>
                                                       
                                                </div>
                                                <p class="ps-product__price sale">'.$while_sel_pro['products_price'].'</p>
                                            </div>
                                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-description.php?id='.$while_sel_pro['products_id'].'">'.$while_sel_pro['products_name'].'</a>
                                                <p class="ps-product__price sale">
                                                
                                                '.$while_sel_pro['products_price'].
                                                
                                                ' 
                                                    
                                               
                                            </p>
                                            </div>
                                        </div>

                                    
                                    </div>';





                                    } 
                                    ?> 
 
                    
                   

                    <!-- <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/2.jpg" alt="" /></a>
                            <div class="ps-product__badge hot">hot</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                        </div>
                    </div> -->
                    <!-- <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/3.jpg" alt="" /></a>
                            <div class="ps-product__badge">-25%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/4.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung Gear VR Virtual Reality Headset</a>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/5.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/6.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/7.jpg" alt="" /></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">LG White Front Load Steam Washer</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/8.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Edifier Powered Bookshelf Speakers</a>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/9.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/electronic/10.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Amcrest Security Camera in White Color</a>
                                <p class="ps-product__price">$42.00</p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>






        </div>
    </div>
    
   <!-- <div class="ps-product-list ps-garden-kitchen">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3>Home, Garden & Kitchen</h3>
                <ul class="ps-section__links">
                    <li><a href="shop-grid.html">New Arrivals</a></li>
                    <li><a href="shop-grid.html">Best seller</a></li>
                    <li><a href="shop-grid.html">Must Popular</a></li>
                    <li><a href="shop-grid.html">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--responsive owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="7" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3"
                    data-owl-item-lg="4" data-owl-item-xl="6" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/1.jpg" alt="" /></a>
                            <div class="ps-product__badge">-16%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Long Sofa Fabric In Blue Navy Color</a>
                                <p class="ps-product__price sale">$567.99 <del>$670.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/2.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Aroma Rice Cooker</a>
                                <p class="ps-product__price">$101.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/3.jpg" alt="" /></a>
                            <div class="ps-product__badge">-25%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Simple Plastice Chair In White Color</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/4.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Korea Fabric Chair In Brown Colorr</a>
                                <p class="ps-product__price">$320.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/5.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Set 14-Piece Knife From KichiKit</a>
                                <p class="ps-product__price">$85.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/6.jpg" alt="" /></a>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Magic Bullet NutriBullet Pro 900 Series Blender</a>
                                <p class="ps-product__price">$92.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/7.jpg" alt="" /></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="ps-product">
                        <div class="ps-product__thumbnail">
                            <a href="product-default.html"><img src="img/products/home/7.jpg" alt="" /></a>
                            <div class="ps-product__badge">-46%</div>
                            <ul class="ps-product__actions">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                                <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Letter Printed Cushion Cover Cotton</a>
                                <p class="ps-product__price sale">$42.00 <del>$60.00 </del></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <div class="ps-home-ads">
        <div class="ps-container">
            <div class="row">




                                            <?php
                                // if(isset($_SESSION['user_id'])){
                                //    echo  '<small>banner 6(1090x245)px, banner 7(530x245)px</small>';
                                // }
                                ?>


                                    <?php
                                    $query_banner_select =  mysqli_query($connect, "SELECT banner_image FROM banner WHERE banner_name='banner 6'") or die(db_conn_error);
                                    while($looping_banner=mysqli_fetch_array($query_banner_select)){
                                    echo ' 
                                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "><a class="ps-collection"><img src="images/banners/'.$looping_banner['banner_image'].'" alt="'.$looping_banner['banner_image'].'"></a> </div>';

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
    <!-- <div class="ps-download-app">
        <div class="ps-container">
            <div class="ps-block--download-app">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block__thumbnail"><img src="img/app.png" alt=""></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                            <div class="ps-block__content">
                                <h3>Download Martfury App Now!</h3>
                                <p>Shopping fastly and easily more with our app. Get a link to download the app on your phone</p>
                                <form class="ps-form--download-app" action="do_action" method="post">
                                    <div class="form-group--nest">
                                        <input class="form-control" type="Email" placeholder="Email Address">
                                        <button class="ps-btn">Subscribe</button>
                                    </div>
                                </form>
                                <p class="download-link">
                                    <a href="#"><img src="img/google-play.png" alt=""></a>
                                    <a href="#"><img src="img/app-store.png" alt=""></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="ps-product-list ps-new-arrivals">
        <div class="ps-container">
            <div class="ps-section__header">
                <h3>Hot New Arrivals</h3>
                <ul class="ps-section__links">
                    <li><a href="shop-grid.html">Technologies</a></li>
                    <li><a href="shop-grid.html">Electronic</a></li>
                    <li><a href="shop-grid.html">Furnitures</a></li>
                    <li><a href="shop-grid.html">Clothing & Apparel</a></li>
                    <li><a href="shop-grid.html">Health & Beauty</a></li>
                    <li><a href="shop-grid.html">View All</a></li>
                </ul>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 32GB</a>
                                <p class="ps-product__price">$990.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 64GB</a>
                                <p class="ps-product__price">$1120.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a href="product-default.html"><img src="img/products/arrivals/1.jpg" alt="" /></a>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple iPhone Retina 6s Plus 128GB</a>
                                <p class="ps-product__price">$1220.50</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a href="product-default.html"><img src="img/products/arrivals/2.jpg" alt="" /></a>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Marshall Kilburn Portable Wireless Speaker</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price">$36.78 – $56.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a href="product-default.html"><img src="img/products/arrivals/3.jpg" alt="" /></a>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Herschel Leather Duffle Bag In Brown Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$125.30</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a href="product-default.html"><img src="img/products/arrivals/4.jpg" alt="" /></a>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Xbox One Wireless Controller Black Color</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price">$55.30</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a href="product-default.html"><img src="img/products/arrivals/5.jpg" alt="" /></a>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>02</span>
                                </div>
                                <p class="ps-product__price sale">$41.27 <del>$52.99 </del></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-product--horizontal">
                            <div class="ps-product__thumbnail">
                                <a href="product-default.html"><img src="img/products/arrivals/6.jpg" alt="" /></a>
                            </div>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                                <div class="ps-product__rating">
                                    <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                        </select><span>01</span>
                                </div>
                                <p class="ps-product__price sale">$41.27 <del>$62.39 </del></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
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


   
</div>
<?php include ('../incs-template1/footer.php'); ?>
