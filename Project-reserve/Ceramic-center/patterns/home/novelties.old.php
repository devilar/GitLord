<?php

if (!defined('IS_SYSTEM')) exit();

$products = array();

$sql = "
	SELECT *
	FROM `".TABLE_PREFIX."product`
	WHERE
		`product_novelty` <> ''
		AND `product_active` <> ''
	ORDER BY RAND()
	LIMIT 0, 4
";
$res = $db->Query($sql);
if ($db->NumRows($res)) {
	while ($row = $db->FetchRow($res)) {
		$products[] = $row;
	}
}

$iCell = 0;
$iNum = sizeof($products);
if ($iNum) {

?>
<h1>Новинки</h1>
<div style="margin: 10px 0;">
<table cellpadding="0" cellspacing="0" border="0" class="cat-list" align="center"><tbody><tr valign="top">
<?php

	for($i = 0; $i < $iNum; ++$i) {
		++$iCell;
		$product = $products[$i];

?>
<td>
	<div class="cat-list-unit">
		<div class="image" style="background-image: url('/<?php echo DIR_RPATH.$product['product_image_sm'];?>');">
			<a href="<?php echo '/'.DIR_RPATH.'catalog/product/'.$product['product_id'].'/';?>">
			<img src="<?php echo '/'.DIR_RPATH.'img/e.gif';?>" width="180" height="140" border="0" alt="" /></a>
		</div>
		<div class="title"><?php echo $product['product_title'];?></div>
		<div class="anounce"><?php echo $product['product_anounce'];?></div>
		<div class="price"><span><?php echo getPriceByRegion($product);?></span> руб.</div>
		<div class="add"><a href="<?php echo '/'.DIR_RPATH.Link2PatternPage('cart').'/act/add/id/'.$product['product_id'].'/?ref=/'.DIR_RPATH.${CPAGE}->link.'/';?>">В корзину</a></div>
		<div class="view"><a href="<?php echo '/'.DIR_RPATH.'catalog/product/'.$product['product_id'].'/';?>">Просмотр</a></div>
	</div>
	<div style="clear: both; height: 10px;"></div>
</td>
<?php

	}

?>
</tr></tbody></table>
</div>
<?php

}

?>
