<?php

if (!defined('IS_SYSTEM')) exit();

$collections = array();

$sql = "
	SELECT *
	FROM `".TABLE_PREFIX."collections`
	LEFT JOIN `".TABLE_PREFIX."brand` ON `unit_brand` = `brand_articul`
	WHERE
		`unit_new` <> ''
		AND `unit_active".REGION_SUFFIX."` <> ''
	GROUP BY `unit_id`
	ORDER BY RAND()
	LIMIT 0, 4
";
$res = $db->Query($sql);
if ($db->NumRows($res)) {
	while ($row = $db->FetchRow($res)) {
		$collections[] = $row;
	}
}

$iCell = 0;
$iNum = sizeof($collections);
if ($iNum) {

?>
<noindex>
<div class="block-title novinki">Новинки</div>
<div class="novinki" style="margin: 10px 0; padding: 0 10px">
<table cellpadding="0" cellspacing="0" border="0" class="cat-list" align="center"><tbody><tr valign="top">
<?php

	for($i = 0; $i < $iNum; ++$i) {
		++$iCell;
		$collection = $collections[$i];

?>
<td>
	<div class="cat-list-unit">
		<a rel="nofollow" href="<?=getURI('collection', $collection)?>">
			<div class="image" style="background-image: url('/<?php echo ImageInfo::getURL(DIR_RPATH . $collection['unit_image_sm'], Reg::init()->image_collection_w, Reg::init()->image_collection_h); ?>');">
				<img src="<?php echo '/'.DIR_RPATH.'img/e.gif';?>" width="225" height="175" border="0" alt="" />
			</div>
			<div class="title"><?php echo $collection['unit_name'];?></div>
			<div class="anounce"><?php echo $collection['brand_title'];?></div>
			<?php if ($collection['unit_sale'] <> '') { ?>
				<div class="sale"></div>
			<?php } else if ($collection['unit_hit'] <> '') { ?>
				<div class="hit"></div>
			<?php } else if ($collection['unit_new'] <> '') { ?>
				<div class="new"></div>
			<?php } ?>
		</a>
	</div>
	<div style="clear: both; height: 10px;"></div>
</td>
<?php

	}

?>
</tr></tbody></table>
</div>
</noindex>

<?
if ($_SERVER['REQUEST_URI']=='/') {
// неудалять
$hitprodaz = array();

$sql = "
	SELECT *
	FROM `".TABLE_PREFIX."collections`
	LEFT JOIN `".TABLE_PREFIX."brand` ON `unit_brand` = `brand_articul`
	WHERE
		`unit_alias` IN ('arabeski', 'bali_bali', 'bamboo_bambuk', 'carrara_karrara_bezhevyj', 'crema_marfil_krema_marfil', 'davos', 'fiori_fiori', 'frame', 'lila', 'loft_wood', 'metro', 'palladio')
";

$sql = "SELECT * FROM `collections` LEFT JOIN `brand` ON `unit_brand` = `brand_articul` WHERE `unit_hit`='on' AND `unit_active".REGION_SUFFIX."`='on' ORDER BY unit_name LIMIT 25;";

$res = $db->Query($sql);
$hitProdNums=$db->NumRows($res);
if ($db->NumRows($res)) {
	while ($row = $db->FetchRow($res)) {
		$hitprodaz[] = $row;
	}
}

?>
<div class="block-title">Лидеры продаж</div>
<div class="home-hiprod">
	<div class="container"><div class="container-inner">
		<table cellpadding="0" cellspacing="0" border="0"><tbody><tr valign="top">
		<?php foreach ($hitprodaz as $row) {?>
		<td>
			<div class="unit">
				<a rel="nofollow" href="<?=getURI('collection', $row)?>">
					<div class="image" style="background-image: url('/<?php echo ImageInfo::getURL(DIR_RPATH . $row['unit_image_sm'], Reg::init()->image_collection_w, Reg::init()->image_collection_h); ?>');">
						<img src="<?php echo '/'.DIR_RPATH.'img/e.gif';?>" width="225" height="175" border="0" alt="" />
					</div>
					<div class="title"><?php echo $row['unit_name'];?></div>
					<div class="anounce"><?php echo $row['brand_title'];?></div>
					<?php if ($row['unit_sale'] <> '') { ?>
					<div class="sale"></div>
					<?php } ?>
					<?php if ($row['unit_hit'] <> '') { ?>
					<div class="hit"></div>
					<?php } ?>
				</a>
			</div>
		</td>
		<?php }?>
		</tr></tbody></table>
	</div></div>
	<div class="arr-left"></div>
	<div class="arr-right"></div>
</div>
<script type="text/javascript">
var curHitProd = 0; var numHitProds = <?php echo $hitProdNums; ?>;
</script>
<? } ?>

<?php

}

?>
