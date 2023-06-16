<?
	require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);
	
	$show_row = rand(0, $rowcount-1);
?>  
<div class="newproduct">
    <div class="submenu">
    <!-- <div><img src="img/sub_menu1_top.png" width="207" height="11" /></div> -->
    <div class="menubg1">
    
    <div class="menutitle">
    <div class="text">
    <div class="bullet">
    <!-- <img src="img/title_bullet" alt="" width="17" height="17" /> -->
    </div>
    <div class="text2">
    <strong></i> NEW PRODUCT <i class="fa-solid fa-dog"> </i></strong></div>
    </div>
    </div>
    <!-- <img src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/items/1732740/3fd73db5d33e9b6597e6975eb654e89b89b5db5c.png" width="80px" height="80px"> -->
    <div class="description">
		<div class="image">
      	<a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$show_row]['productid']); ?>">
        <img class="productlistimg" width="100" height="180" src="img/product/<? echo($row[$show_row]['productimage']); ?>" />
		</a>        
        </div>       
      <div class="detailspecial"> 
	  <div class="text">
      	<a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$show_row]['productid']); ?>">
	  	<? echo($row[$show_row]['productname']); ?>
        </a>
		<br />
        Category: 
        <? 
            $sql = "SELECT * FROM categories WHERE categoriesid=" . $row[$show_row]['categoriesid'];
            $catedata = getData($sql);
            echo($catedata[0][1]); 
        ?>
        </div>
		<div class="price">$<? echo($row[$show_row]['price']); ?></div>        

		<div align="center">
        <? if($row[$show_row]['qty'] == 0){ ?>
            <!-- <img src="img/out_of_stock.png" width="68" height="19" /> -->
            <div class="outofstock">Out of Stock</div>
        <? }else{ ?>
        <a href="?page=addcart&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$show_row]['productid']); ?>">
             <div class="addtocart">Add to Cart</div>
            <!-- <img src="img/add_2_cart.png" width="68" height="19" /> -->
        </a>
        <? } ?>
        &nbsp;
        <a href="?page=productdetail&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($row[$show_row]['productid']); ?>">
            <div class="detail">Detail</div>
            <!-- <img src="img/detail.png" width="68" height="19" /> -->
        </a>                  
        </div>
        </div>
        
    </div>
    </div>
    <div >
    <!-- <img src="https://cdn.cloudflare.steamstatic.com/steamcommunity/public/images/items/1037910/4570f7a4bb2825aa3c2de09e225d0fb286ac65ae.png"   />  --></div>
    </div>
</div>
