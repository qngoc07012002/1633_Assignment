<?
	$pid = $_GET['pid'];

	$sql = "SELECT * FROM products WHERE productid=" . $pid;
	$pdata = getData($sql);

?>
<div class="productlist">
<div><img src="img/product_list_top.png" width="602" height="10" /></div>    
<div class="products">
<div class="product_table">	

<table width="580" cellpadding="0" cellspacing="0">

<tr>
<td colspan="3" valign="middle"><div class="textprd"><? echo('<Strong>'. $pdata[0]['productname']) .'</Strong>' ?></div></td>
</tr>

<tr>
<td colspan="3" valign="middle" height="1px" bgcolor="#666666"></td>
</tr>

<tr>
<td colspan="3" valign="middle" height="10px">&nbsp;</td>
</tr>

<tr>
<td width="200px" align="center"><img class="productlistimg" width="100" height="180" src="<? echo(productfolder . $pdata[0]['productimage'])?>"></td>
<td width="5px"></td>
<td width="375px"  valign="top">

	<table class="detailbox" width="375px" cellpadding="0" cellspacing="0">
    
        <tr>
            <td width="100px" valign="top"><div class="textprd">Category Name:</div></td>
            <td width="275px" valign="top">
            <div class="textprd">
			<? 
                $sql = "SELECT * FROM categories WHERE categoriesid=" . $pdata[0]['categoriesid'];
                $catedata = getData($sql);

				echo('<Strong>'. $catedata[0]['categoriesname'] .'</Strong>'); ?></div>
            </td>
        </tr>
        <tr>
            <td width="100px" valign="top"><div class="textprd">Description:</div></td>
            <td width="275px" valign="top"><div class="textprd"><? echo('<Strong>'. $pdata[0]['productdes']) .'</Strong>' ?></div></td>
        </tr>
        <tr>
            <td width="100px"><div class="textprd">Price:</div></td>
            <td width="275px"><span class="textpricedetail"><div class="textprd">USD <? echo('<Strong>'. $pdata[0]['price']) .'</Strong>' ?></span></div><div class="textprd">VND <? echo('<Strong>'. $pdata[0]['price']*25000) .'</Strong>' ?></span></div></td>
        </tr>
        <tr>
            <td width="100px"><div class="textprd">In Stock (Items):</div></td>
            <td width="275px"><strong><div class="textprd"><? echo($pdata[0]['qty']); ?></strong></div></td>
        </tr>

	</table>


</td>
</tr>

<tr>
<td align="center" class="pagenumber"><a href="<? echo(productlargefolder . 'large_' . $pdata[0]['productimage'])?>" rel="lightbox"><div class="textprd">View Large Image</div></a></td>
<td colspan="2" align="center">
	<? if($pdata[0]['qty'] == 0){ ?>
        <div class="outofstock outindetail">Out of Stock</div>
    <? }else{ ?>
    <a href="?page=addcart&cart=<? echo($GLOBALS['cart']) ?>&pid=<? echo($pid); ?>">
    <div class="addtocart addindetail">Add to Cart</div>
    </a>
	<? } ?>
    &nbsp;
    <a href="#" onClick="javascript:history.back();">
        <iiv class="back">Back</div>
    </a>
</td>
</tr>

</table>

</div>
</div>
<div><img src="img/product_list_bottom.png" width="602" height="10" /></div>    
</div>

