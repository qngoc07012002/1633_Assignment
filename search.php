<?
	require_once ('lib/function.php');

	$sql = "SELECT * FROM products ORDER BY productid desc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

?>
<div class="search">
    <div class="submenu">
    <!-- <div><img src="img/sub_menu1_top.png" width="207" height="11" /></div> -->
    <div class="menubg1">
    
    <div class="menutitle">
    <div class="text">
    <!-- <div class="bullet">
    <img src="img/title_bullet.png" alt="" width="17" height="17" />
    </div> -->
    <div class="text2">
    <strong>FIND PRODUCTS</strong></div>
    </div>
    </div>
	
    <div class="findform">
    	<form method="post" action="?page=productlist&cart=<? echo($GLOBALS['cart']) ?>">
			<input type="text" name="find" id="find" title="Search" /><br />

            <input class="button"    type="submit" value="Search" />
        </form>
	</div>
    
	</div>
    <div>
    <img  width="207" /></div>
    </div>
</div>