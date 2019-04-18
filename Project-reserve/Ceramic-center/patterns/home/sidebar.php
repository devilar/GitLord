<?php if (!defined('IS_SYSTEM')) exit; ?>
<div class="sidebar">
<noindex>


<form action="/<?php echo DIR_RPATH.${CPAGE}->page_filename;?>/" method="get">
<div class="content-catalog-filter">
<table cellpadding="2" cellspacing="2" border="0" width="100%"><tbody>
<tr><td><?php echo $brandSelectOption;?></td></tr>
<tr><td><?php echo $themeSelectOption;?></td></tr>
<tr><td>
	Цены [<b id="spr-from"><?php echo (int)$priceRangeStart; ?></b> - <b id="spr-to"><?php echo (int)$priceRangeEnd; ?></b> руб.]
	<div id="slider-price-range" style="margin: 5px auto; width: 140px;"></div>
	<input type="hidden" id="spr-from-input" name="spr-from" value="<?php echo (int)$priceRangeStart; ?>" />
	<input type="hidden" id="spr-to-input" name="spr-to" value="<?php echo (int)$priceRangeEnd; ?>" />
</td></tr>
<tr><td><?php echo $sizeSelectOption;?></td></tr>
<tr><td><?php echo $colorSelectOption;?></td></tr>
<?php echo isset($surfaceSelectOption) ? '<tr><td>'.$surfaceSelectOption.'</td></tr>' : ''; ?>
<?php// echo isset($actionSelectOption) ? '<tr><td>'.$actionSelectOption.'</td></tr>' : ''; ?>
<tr><td align="right"><input type="button" value="Показать" class="submit" onclick="submitFilterForm();" /></td></tr>
</tbody></table>
</div>
</form>
</noindex>
<script type="text/javascript">
function submitFilterForm() {
	var i = 0;
	var filterURL = '';

	/* Brands */
	var fieldFilterBrands = $('.field-filter-brand:checked');
	var filterBrands = '';
	if (fieldFilterBrands.length) {
		for (i = 0; i < fieldFilterBrands.length; i++) {
			filterBrands += $(fieldFilterBrands[i]).val() + '|';
		}
	} else {
		filterBrands = 'all';
	}
	filterURL += '&filterbrand=' + filterBrands;

	/* Prices */
	filterURL += '&spr-from=' + $('#spr-from-input').val();
	filterURL += '&spr-to=' + $('#spr-to-input').val();

	/* Sizes */
	var fieldFilterSizes = $('.field-filter-size:checked');
	var filterSizes = '';
	if (fieldFilterSizes.length) {
		for (i = 0; i < fieldFilterSizes.length; i++) {
			filterSizes += $(fieldFilterSizes[i]).val() + '|';
		}
	} else {
		filterSizes = 'all';
	}
	filterURL += '&filtersize=' + filterSizes;

	/* Colors */
	var fieldFilterColors = $('.field-filter-color:checked');
	var filterColors = '';
	if (fieldFilterColors.length) {
		for (i = 0; i < fieldFilterColors.length; i++) {
			filterColors += $(fieldFilterColors[i]).val() + '|';
		}
	} else {
		filterColors = 'all';
	}
	filterURL += '&filtercolor=' + filterColors;

	/* Themes */
	var fieldFilterThemes = $('.field-filter-theme:checked');
	var filterThemes = '';
	if (fieldFilterThemes.length) {
		for (i = 0; i < fieldFilterThemes.length; i++) {
			filterThemes += $(fieldFilterThemes[i]).val() + '|';
		}
	} else {
		filterThemes = 'all';
	}
	filterURL += '&filtertheme=' + filterThemes;

	/* Surface */
	var fieldFilterSurface = $('.field-filter-surface:checked');
	var filterSurface = '';
	if (fieldFilterSurface.length) {
		for (i = 0; i < fieldFilterSurface.length; i++) {
			filterSurface += $(fieldFilterSurface[i]).val() + '|';
		}
	} else {
		filterSurface = 'all';
	}

	/* Action */
	var fieldFilterAction = $('.field-filter-action:checked');
	var filterAction = '';
	if (fieldFilterAction.length) {
		for (i = 0; i < fieldFilterAction.length; i++) {
			filterAction += $(fieldFilterAction[i]).val() + '|';
		}
	} else {
		filterAction = 'all';
	}
	filterURL += '&filteraction=' + filterAction;

	document.location.href = '/<?php echo DIR_RPATH.${CPAGE}->page_filename;?>/?' + filterURL;
}
$(document).ready(function() {
	$('#slider-price-range').slider({
		range: true,
		min: <?php echo (int)$priceRange['minprice']; ?>,
		max: <?php echo (int)$priceRange['maxprice']; ?>,
		values: [ <?php echo (int)$priceRangeStart; ?>, <?php echo (int)$priceRangeEnd; ?> ],
		step: 10,
		slide: function(event, ui) {
			$('#spr-from').html(ui.values[0]);
			$('#spr-from-input').val(ui.values[0]);
			$('#spr-to').html(ui.values[1]);
			$('#spr-to-input').val(ui.values[1]);
		}
	});
});
</script>
<style type="text/css">
.filter-container { padding: 4px; border: 1px solid #ddd; }
#filter-brand-container { position: relative; z-index: 1000; }
#filter-brand-select { display: none; position: absolute; right: 186px; top: 0; width: 160px; padding: 10px 10px 5px 10px; background: #fff; border: 1px solid #73a100; z-index: 1100; }
#filter-brand-container:hover { background-color: #ddd; }
#filter-brand-container:hover #filter-brand-select { display: block; }
#filter-brand-select .unit { padding: 0 0 6px 0; }
#filter-size-container { position: relative; z-index: 800; }
#filter-size-select { display: none; position: absolute; right: 186px; top: 0; min-width: 160px; padding: 10px 10px 5px 10px; background: #fff; border: 1px solid #73a100; z-index: 900; max-heigth: 500px; overflow: hidden;}
#filter-size-container:hover { background-color: #ddd; }
#filter-size-container:hover #filter-size-select { display: block; }
#filter-size-select .unit { padding: 0 0 6px 0; }
#filter-color-container { position: relative; z-index: 800; }
#filter-color-select { display: none; position: absolute; right: 186px; top: 0; width: 160px; padding: 10px 10px 5px 10px; background: #fff; border: 1px solid #73a100; z-index: 900; }
#filter-color-container:hover { background-color: #ddd; }
#filter-color-container:hover #filter-color-select { display: block; }
#filter-color-select .unit { padding: 0 0 6px 0; }
#filter-theme-container { position: relative; z-index: 1000; }
#filter-theme-select { display: none; position: absolute; right: 186px; top: 0; width: 160px; padding: 10px 10px 5px 10px; background: #fff; border: 1px solid #73a100; z-index: 1100; }
#filter-theme-container:hover { background-color: #ddd; }
#filter-theme-container:hover #filter-theme-select { display: block; }
#filter-theme-select .unit { padding: 0 0 6px 0; }
#filter-surface-container { position: relative; z-index: 1000; }
#filter-surface-select { display: none; position: absolute; right: 186px; top: 0; width: 160px; padding: 10px 10px 5px 10px; background: #fff; border: 1px solid #73a100; z-index: 1100; }
#filter-surface-container:hover { background-color: #ddd; }
#filter-surface-container:hover #filter-surface-select { display: block; }
#filter-surface-select .unit { padding: 0 0 6px 0; }
</style>

<?php
if (!isset($vars['sess']['catalog-type'])) {
	$vars['sess']['catalog-type'] = 'retail';
	$_SESSION['catalog-type'] = 'retail';	
}
if (
	(
		isset($vars['get']['type'])
		&& (
			$vars['get']['type'] == 'retail'
			|| $vars['get']['type'] == 'wholesale'
		)
	)
) {
	$vars['sess']['catalog-type'] = $vars['get']['type'];
	$_SESSION['catalog-type'] = $vars['get']['type'];
}
if (
	isset($vars['sess']['catalog-type'])
	&& ${CPAGE}->page_show_catalog_menu <> ''
) {
	if ($vars['sess']['catalog-type'] == 'retail') {
		$customersPage = InfoPageByFilename('retail-customers');
	} else {
		$customersPage = InfoPageByFilename('wholesale-customers');
	}
	if (sizeof($customersPage)) {
		$mRetail = ${PAGE}->GetTree($customersPage['page_id'], false);
		if ($iNum = sizeof($mRetail)) {
?>
<!-- noindex -->
<table cellpadding="0" cellspacing="0" border="0" class="sidemenu aztest2"><tbody>
<?php
			for ($i = 0; $i < $iNum; ++$i) {
				if ((int)$mRetail[$i]['page_display'] < 1) continue;
?>
<tr><td class="level"><a rel="nofollow" href="/<?php echo DIR_RPATH.$mRetail[$i]['link'];?>/"><?php echo $mRetail[$i]['page_name'];?></a></td></tr>
<?php
			}
?>
</tbody></table>
<!-- /noindex -->
<div class="h_sidebar" style="margin-bottom: 15px;"><a href="/santekhnika/"><img src="/images/1_4069787.png"></a></div>
<div class="h_sidebar"><div class="demisale-campaign-banner"><img src="/images/1_4171957.png"></div></div>
<?php
		}
	}
}

if ($iNum = sizeof($m2)) {
?>
<table cellpadding="0" cellspacing="0" border="0" class="sidemenu aztest3"><tbody>
<?php
	for ($i = 0; $i < $iNum; ++$i) {
		if ((int)$m2[$i]['page_display'] < 1) continue;
		if (strpos($m2[$i]['page_pattern'], 'catalog') !== false) continue;
?>
<tr><td class="level"><a href="/<?php echo DIR_RPATH.$m2[$i]['link'];?>/"><?php echo $m2[$i]['page_name'];?></a></td></tr>
<?php
		if ($m2[$i]['page_id'] <> ${CPAGE}->history[1]['page_id']) continue;
		$m3 = ${PAGE}->GetTree($m2[$i]['page_id'], false);
		if ($jNum = sizeof($m3)) {
			for ($j = 0; $j < $jNum; ++$j) {
				if ((int)$m3[$j]['page_display'] < 1) continue;
				if (strpos($m3[$j]['page_pattern'], 'catalog') !== false) continue;
?>
<tr><td class="sublevel">&mdash; <a href="/<?php echo DIR_RPATH.$m3[$j]['link'];?>/"><?php echo $m3[$j]['page_name'];?></a></td></tr>
<?php
			}
		}

	}
?>
</tbody></table>
<?php
}
?>
</div>
