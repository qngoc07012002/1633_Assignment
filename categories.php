<?
	require_once ('lib/function.php');

	$sql = "SELECT * FROM categories ORDER BY categoriesid asc";
	$rowcount = getRowCount($sql);
	$row = getData($sql);

?>
<div class="category">
    <div class="submenu">
    <!-- <div><img src="img/sub_menu1_top.png" width="207" height="11" /></div> -->
    <div class="menubg1">
    
    <div class="menutitle">
    <div class="text">
    <!-- <div class="bullet">
    <img src="img/title_bullet.png" alt="" width="17" height="17" />
    </div> -->
    <div class="text2">
    <strong>CATEGORIES <i class="fa-solid fa-cat"></i> </strong>
    </div>
    </div>
    </div>
    
    <div class="submenutext">
        <div class="text">&nbsp;&nbsp;<!--<span class="submenubullet">&gt;&gt;</span>--><i class="fa-solid fa-paw"></i>&nbsp;<a href="?page=productlist&cart=all">ALL</a>&nbsp;<i class="fa-solid fa-paw"></i></div>
		<? for($i = 0; $i < $rowcount; $i++){ ?>
        <div class="text">&nbsp;&nbsp;<!--<span class="submenubullet">&gt;&gt;</span>--><i class="fa-solid fa-shield-dog"></i>&nbsp;<a href="?page=productlist&cart=<? echo($row[$i][0]) ?>"><? echo($row[$i][1]) ?></a>&nbsp;<i class="fa-solid fa-shield-dog"></i></div>
		<? } ?>
    </div>
    </div>
    <div class="imgcate">
    </div>
    </div>
</div>
