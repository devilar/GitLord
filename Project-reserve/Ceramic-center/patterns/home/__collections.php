<?php

if (!defined('IS_SYSTEM')) exit();

$sql = "
	SELECT *
	FROM `".TABLE_PREFIX."collections`
	LEFT JOIN `".TABLE_PREFIX."brand` ON `unit_brand` = `brand_articul`
	WHERE `unit_active` <> ''
		AND `unit_id`= '156' OR `unit_id`='118' OR `unit_id`='64' OR `unit_id`='135' OR `unit_id`='114'
	ORDER BY `unit_si`
";
$res = $db->Query($sql);
if ($iNum = $db->NumRows($res)) {

?>
<noindex>
<div class="block-title">Коллекции</div>
<div class="home-collections">
	<div class="container"><div class="container-inner">
		<table cellpadding="0" cellspacing="0" border="0"><tbody><tr valign="top">
		<?php while ($row = $db->FetchRow($res)) {?>
		<td>
			<div class="unit">
				<div class="image" style="background-image: url('/<?php echo DIR_RPATH.$row['unit_image_sm'];?>');">
					<a rel="nofollow" href="<?php echo '/'.DIR_RPATH.'catalog/collection/'.$row['unit_id'].'/';?>">
					<img src="<?php echo '/'.DIR_RPATH.'img/e.gif';?>" width="180" height="140" border="0" alt="" /></a>
				</div>
				<div class="title"><?php echo $row['unit_name'];?></div>
				<div class="anounce"><?php echo $row['brand_title'];?></div>
				<?php if ($row['unit_sale'] <> '') { ?>
				<div class="sale"></div>
				<?php } ?>
			</div>
		</td>
		<?php }?>
		</tr></tbody></table>
	</div></div>
	<!--div class="arr-left"></div>
	<div class="arr-right"></div-->
</div>
<script type="text/javascript">
var curCollection = 0; var numCollections = <?php echo $iNum;?>;
</script>
</noindex>
<?php

}

?>
