<?
	session_start();
	define("productfolder","img/product/");
	define("productlargefolder","img/product_large/");
	define("tax",5);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta name="keywords" lang="en-us" content="Assumption University,Computer Store Project,Assumption University Project,PHP Project,ABAC Project">
<META NAME="Description" CONTENT="Assumption University PHP Final Project">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-site-verification" content="WWfmdAzbuVnt8F45gamZG9yEZVSbWsU-rs93ZDsnh0M" />
<script src="https://kit.fontawesome.com/d611629fa0.js" crossorigin="anonymous"></script>
<title>Pet Shop</title>

<link rel="shortcut icon" href="img/petshop_icon.ico" />
<link href="./css/stylecuangoc.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />

<script src="js/myjs.js" type="text/javascript"></script>
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>

</head>
<?

	$GLOBALS['cart'] ='';
	$GLOBALS['totalitems'] = 0;
	
	$page = $_GET['page'];
	$cart = $_GET['cart'];
        
	if($page == ''){
		$page = 'productlist';
	}

	if($cart == ''){
		$cart = 'all';
	}
	else{
		$GLOBALS['cart'] = $cart;
	}

?>


<body>


<div class="frame">
    
    
	<? require("topbanner.php") ?>
	<? require("mainmenu.php") ?>

    <div class="space"></div>

    <div class="main_body">
        <!--<div class="main_body_top"> <img src="img/main_body_top.jpg" width="850" height="13" /> </div>-->
        
            <? require("menupanel.php") ?>
            
            <div class="bodypanel">
                <? require("bodybanner.php") ?>

                <div class="space3"></div>

                <? 
					if(file_exists($page . '.php') == 1){
						require( $page . '.php');
					}
					else{
						require('productlist.php');
					}
				?>

            </div>
            
        <div class="bodybottom"> <img src="img/main_body_bottom_2.jpg" width="850" height="13" /> </div>
    </div>


<? require("footer.php") ?>
</div>
</body>
</html>

