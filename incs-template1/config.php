<?php
date_default_timezone_set('UTC');
session_start();


//Website name without www and .com
$website_name = "beta-souk";
//first eight characters of website name and end with underscore
$website_name_part ="mspcolle_";
//Website name without www and .com and words spaced
$website_name_with_spaces = "Duromedia";
//Enter a description of your business. Not too short and not too long.
define("PAGE_DESCRIPTION","Wholesale and retail of crayfish, yam, Palm Oil, ogbono, egusi, Red pepper both chili pepper, Cameroon pepper groundnut oil fish  etc.");
//Enter a short description of your business. 
define("FOOTER_DESCRIPTION","Wholesale and retail of crayfish,<br> yam, Palm Oil, ogbono, egusi,<br> Red pepper both chili pepper,<br> Cameroon pepper groundnut <br>oil fish  etc.");
//Enter the key words
define("KEY_WORDS","Wholesale, retail, crayfish, Palm, Oil, high quality, pepper, groundnut, fish, ogbono, chili ");

//Enter your main phone number.
$TEL = "432423423";
//Enter your second phone number.
$TEL2 = "23423434";
//Enter your email address.
$EMAIL = "info@mspcollection.com";
//Enter your email address.
$EMAIL2 = "info@mspcollection.com";

//Enter your facebook link. 
$FB_LINK = "face";
//Enter your twitter link. 
$TW_LINK = "";
//Enter your instagram link.
$INSTAGRAM_LINK = "https://instagram.com/preshonestockshop.com.ng?igshid=1gvgy3ey8201tIfy";
//Enter your whatsapp link.
$WHATSAPP_LINK = "fgsdffgsd";
//Enter your whatsapp link.
$URL_LINK = "";
//Enter your business address.
$ADDRESS = "12 Adetola aguda surulere";
//Enter your  second business address.
$ADDRESS2 ="12 Adetola aguda surulere";
//Text logo ie website name. This is if you dont have a logo
$LOGO_NAME_TEXT = "Msp Collections And Fair Beautiful Care";
//brand color:
$BRAND_COLOR = "Orange";
//price tag color
$BRAND_COLOR_SUB = "black";
//price tag color
$BRAND_PRICE_COLOR = "#3c3c3c";
//Logo isge filenama eg logo.jpg.
$LOGO_IMG_FILENAME = "";
//cover image filename
$CAROUSEL_IMAGE_FILENAME = "2.jpg";		//870px x 431px
//Password
$pass_word = "";
		


///////CAROUSEL PART///////
//$CAROUSEL_DESC1 = "";      //call to action or collect details.
//$CAROUSEL_DESC2 = "";
//$CAROUSEL_DESC3 = "";



define('UNCATEGORIZED', 'Uncategorized');




define("db_conn_error","<div>
					<h1 id='oops_h1'>Oops!!!</h1>
					<h1>We are sorry</h1>
					<h3>Data could not be fetched at this moment</h3>
					</div>");

//$website_name_part.'admin'------>username
//$website_name_part.'admin'------>database
$connect = mysqli_connect('localhost','root',$pass_word,'template1db') or die(db_conn_error);		
$data_select = mysqli_select_db($connect,'template1db') or die(db_conn_error);



define("GEN_WEBSITE","http://localhost/beta-souk/".$website_name);      //Enter your website name eg www.designsbyblocks.com.ng.
define("SITE_NAME_NO_WWW", $website_name_with_spaces); //Enter the name of your website logo eg designs by blocks.
define("TITLE", $website_name_with_spaces);            //Enter your website title eg welcome to designs by blocks.

$EMAIL_CUSTOM = "sales@".$website_name.".com.ng";	//Your email address







function genReference($qtd){
    //Under the string $Caracteres you write all the characters you want to be used to randomly generate the code.
        $Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789';
        $QuantidadeCaracteres = strlen($Caracteres);
        $QuantidadeCaracteres--;
    
        $reference=NULL;
    
        for($x=1;$x<=$qtd;$x++){
            $Posicao = rand(0,$QuantidadeCaracteres);
            $reference .= substr($Caracteres,$Posicao,1);
        }
    
        return $reference;
    }


?>


<?php 
define('API', 'Bearer sk_test_*********************************');
?>