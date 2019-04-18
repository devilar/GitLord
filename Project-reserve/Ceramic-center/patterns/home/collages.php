<?php

if (!defined('IS_SYSTEM')) exit();

$sql = "SELECT * FROM `".TABLE_PREFIX."home_collages` WHERE `unit_active".REGION_SUFFIX."` <> '' ORDER BY `unit_si`";
$res = $db->Query($sql);
if ($iNum = $db->NumRows($res)) {

?>
<noindex>
<div class="wrap-slider">
	<div class="arr-left active"></div>
	<div class="arr-right active"></div>
<div class="home-collages">
	<?php while ($row = $db->FetchRow($res)) {?>
	<?if($row['unit_name'] == 'demisale-campaign-banner1'){?>
		<a href="/dostavka-zakaza/" target="_blank" class="home-collage-unit demisale-campaign-banner1" style="background-image: url('/<?php echo DIR_RPATH.$row['unit_image'];?>');"></a>
	<?}else{?>
		<div class="home-collage-unit" style="background-image: url('/<?php echo DIR_RPATH.$row['unit_image'];?>');"></div>
	<?}?>
	<?php }?>
	<div class="home-collage-number">
	<?php for ($i = 1; $i <= $iNum; ++$i) { echo '<a>&nbsp;</a>'; }?>

	</div>
	<!--
	<div class="home-collage-price">
		<a href="/<?php echo DIR_RPATH;?>price-list-moscow/">Прайс-лист Москва</a><br />
		<a href="/<?php echo DIR_RPATH;?>price-list-piter/">Прайс-лист Питер</a>
	</div>
	-->
</div>
</div>
<script type="text/javascript">
var curCollage = 0; var numCollages = <?php echo $iNum;?>;
</script>
</noindex>
<?php

}

?>
