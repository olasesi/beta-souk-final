<?php
################################
######Add to cart section#######
################################
$status="";
    if(!isset($_SESSION['shopping_cart'])){
    $_SESSION['shopping_cart']= '';
}


if (isset($_POST['code']) && $_POST['code']!=''){
    $code = $_POST['code'];
    $result = mysqli_query($connect,"SELECT * FROM `products` WHERE `products_id`='$code'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['products_name'];
    $code = 'code'.$row['products_id'];
    $price = $row['products_price'];
    $image = $row['products_image'];
    
    $cartArray = array(
        $code=>array(
        'name'=>$name,
        'code'=>$code,
        'price'=>$price,
        'quantity'=>1,
        'image'=>$image)
    );

    if(empty($_SESSION['shopping_cart'])) {
        $_SESSION['shopping_cart'] = $cartArray;
        $status = '<div class="box">Product is added to your cart!</div>';
       

}else{
        $array_keys = array_keys($_SESSION['shopping_cart']);
             
        
        if(in_array($code,$array_keys)) {
            $status = '<div class="box" style="color:red;">
            Product is already added to your cart!</div>';	
        } else {
        $_SESSION['shopping_cart'] = array_merge($_SESSION['shopping_cart'],$cartArray);
        $status = '<div class="box">Product is added to your cart!</div>';
        }
    
        }
    }

?>
