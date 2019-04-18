<?php

if (!defined('IS_SYSTEM')) exit();

$sql = "
	SELECT *
	FROM `".TABLE_PREFIX."collections`
	LEFT JOIN `".TABLE_PREFIX."brand` ON `unit_brand` = `brand_articul`
	WHERE `unit_active".REGION_SUFFIX."` <> ''
	ORDER BY rand()
	LIMIT 50
";
$res = $db->Query($sql);
if ($iNum = $db->NumRows($res)) {

	//echo $iNum;

?>
<noindex>
<div class="advantages">
	<div class="inner ic1">15 000+<br>Наименований<br>товаров</div>
	<div class="inner ic2">Доступные<br>цены</div>
	<div class="inner ic3">Более 10 лет<br>на рынке</div>
	<div class="inner ic4">Оперативная<br>доставка</div>
	<div class="inner ic5">Акции и<br>скидки</div>
</div>
<div class="b_bottom" style="width:100%"></div>
<div class="block-title">Коллекции</div>
<div class="home-collections">
	<div class="container"><div class="container-inner">
		<table cellpadding="0" cellspacing="0" border="0"><tbody><tr valign="top">
		<?php while ($row = $db->FetchRow($res)) {?>
		<td>
			<div class="unit">
				<a rel="nofollow" href="<?=getURI('collection', $row)?>">
					<div class="image" style="background-image: url('/<?php echo ImageInfo::getURL(DIR_RPATH . $row['unit_image_sm'], Reg::init()->image_collection_w, Reg::init()->image_collection_h); ?>');">
						<img src="<?php echo '/'.DIR_RPATH.'img/e.gif';?>" width="180" height="140" border="0" alt="" />
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
var curCollection = 0; var numCollections = <?php echo $iNum;?>;
</script>
</noindex>
<?php

}

?>
