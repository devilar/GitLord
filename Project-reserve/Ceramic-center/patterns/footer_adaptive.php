<?php

if (!defined('IS_SYSTEM')) exit();

?>

<?
//if ($_SERVER['REMOTE_ADDR']=='37.235.226.94!') {
if ($_SERVER['REQUEST_URI']=='/' || strpos($_SERVER['REQUEST_URI'], '/?') === 0) {
// DEMIS!!! NO DELETE

$BradHome = array();

$sql = "
	SELECT * FROM `".TABLE_PREFIX."brand`
	WHERE `brand_articul` IN ('altacera', 'ceramica-classic', 'vitra', 'volgogradskij-zavod', 'nefrit-keramika', 'shahtinskaja-plitka', 'laf', 'keramin', 'gra', 'cers1', 'vlt', 'bel', 'lb1', 'az', 'gt', 'coliseumgres', 'atlasconcorde', 'grasaro', 'kerranova', 'italon', 'uralceramica', 'bonaparte', 'atem', 'kerama-marazzi', 'estima', 'piezarosa') ORDER BY FIELD(brand_articul, 'uralceramica', 'vlt', 'keramin', 'gra', 'kerama-marazzi', 'lb1', 'cers1') DESC";

//echo $sql; 
$res = $db->Query($sql);
$BradProdNums=$db->NumRows($res);
if ($db->NumRows($res)) {
	while ($row = $db->FetchRow($res)) {
		$BradHome[] = $row;
	}
}

?>
<div class="block-title">Наши поставщики</div>
<div class="home-brand">
	<div class="container"><div class="container-inner">
		<table cellpadding="0" cellspacing="0" border="0"><tbody><tr valign="top">
		<?php foreach ($BradHome as $row) {?>
		<td>
			<div class="unit">
				<div class="image" style="background-image: url('/<?php echo DIR_RPATH.$row['brand_image'];?>'); background-size: contain; background-color: white;">
					<a rel="nofollow" href="<?=getURI('brands', $row)?>">
					<img src="<?php echo '/'.DIR_RPATH.'img/e.gif';?>" width="180" height="140" border="0" alt="" /></a>
				</div>
				<div class="title"><?php echo $row['brand_title'];?></div>
				<!-- <div class="anounce"><?php echo $row['brand_title'];?></div> -->
			</div>
		</td>
		<?php }?>
		</tr></tbody></table>
	</div></div>
	<div class="arr-left"></div>
	<div class="arr-right"></div>
</div>
<script type="text/javascript">
var curBradProd = 0; var numBradProds = <?php echo $BradProdNums; ?>;
</script>
<? } ?>

</div>

<div class="footer">



<?php
$m1 = ${PAGE}->GetTree(0, false);


if ($iNum = sizeof($m1)) {
?>
<? $noindex_pages = array(203, 167, 201); ?>
<table cellpadding="0" cellspacing="0" border="0" class="topmenu"><tbody><tr>
<?php

	for ($i = 0; $i < $iNum; ++$i) {

		if ((int)$m1[$i]['page_display'] < 1) continue;
		if ($m1[$i]['page_link'] <> '') {
			$link = $m1[$i]['page_link'];
		} else {
			$link = '/'.DIR_RPATH.$m1[$i]['link'].'/';
		}

		if ($link == "/home/") $link = "/";
		$aclass ='';
		if ($link == $_SERVER['REQUEST_URI']) $aclass = 'class="active"';
?>
<td>
	<div style="position: relative;" id="dp<?php echo $i; ?>">
  <?php $noindex = in_array($m1[$i]['page_id'], $noindex_pages); ?>

	<a <?php echo $noindex ? 'rel="nofollow"' : '' ?> href="<?php echo $link; ?>" <?=$aclass;?>><?php echo $m1[$i]['page_name'];?></a>

	</div>
</td>
<?php
	}
?>
<td class="topmenu__search">
	<form action="<?php echo '/'.DIR_RPATH.Link2PatternPage('search').'/';?>" method="get">
	<div style="position: relative">
		<input type="text" name="q" class="searchtext ds-search" data-dssearch-letters="2" data-dssearch-rows="6" placeholder="Я ищу..." />
		<input type="submit" value="" class="searchbutton" />
		<div id="dsresultsearch"></div>
	</div>
	</form>
    
</td>

</tr></tbody></table>
<?php
}
?>





<? #Mobile menu ?>
<noindex>
<?php

$m1 = ${PAGE}->GetTree(0, false);
if ($iNum = sizeof($m1)) {
?>
<? $noindex_pages = array(203, 167, 201); ?>
<div class="topmenu_mobile toggle_btn" onclick="$('.topmenu_mobile.hamburger').slideToggle();">
	<span class="fa fa-navicon"></span> Меню
</div>
<div class="topmenu_mobile hamburger">
<?php
	for ($i = 0; $i < $iNum; ++$i) {
		if ((int)$m1[$i]['page_display'] < 1) continue;
		if ($m1[$i]['page_link'] <> '') {
			$link = $m1[$i]['page_link'];
		} else {
			$link = '/'.DIR_RPATH.$m1[$i]['link'].'/';
		}
		$link = ($link=="/home/")?"/":$link;
?>

	<div>
  <?php $noindex = in_array($m1[$i]['page_id'], $noindex_pages); ?>

	<a <?php echo $noindex ? 'rel="nofollow"' : '' ?> href="<?php echo $link; ?>"><?php echo $m1[$i]['page_name'];?></a>

	</div>

<?php
	}
?>

<?php
}
?>
</div>
</noindex>




<div class="footer-block">
	<div class="f-left">


<?
		$m2 = ${PAGE}->GetTree(171, false);
		if ($iNum2 = sizeof($m2)) {
			for ($i2 = 0; $i2 < $iNum2; ++$i2) {
				if ((int)$m2[$i2]['page_display'] < 1) continue;
				if ($m2[$i2]['page_link'] <> '') {
					$link = $m2[$i2]['page_link'];
				} else {
					$link = '/'.DIR_RPATH.$m2[$i2]['link'].'/';
				}
				$cat_list .= '<li><a ' . ($noindex ? 'rel="nofollow"' : '') . ' href="'.$link.'">'.$m2[$i2]['page_name'].'</a></li>';
			}
			echo '<ul>'.$cat_list.'</ul>';
		}
?>


		<ul>
			<li><a href="/kak-vybrat-keramicheskuyu-plitku/">Как выбрать?</a></li>
			<li><a href="/kak-sdelat-zakaz/">Как купить?</a></li>
			<li><a href="/dostavka-zakaza/">Доставка заказа</a></li>
			<li><a href="/oplata-zakaza/">Оплата заказа</a></li>
			<li><a href="/otzyvy/">Отзывы покупателей</a></li>
			<li><a href="/sitemap/">Карта сайта</a></li>
		</ul>
		<div class="counter">
			<?php if (!defined('DEBUG') || !DEBUG): ?>
			<noindex>
				<!--LiveInternet counter--><script type="text/javascript"><!--
				document.write("<a href=\'http://www.liveinternet.ru/click\' "+
				"target=_blank><img src='//counter.yadro.ru/hit?t13.6;r"+
				escape(document.referrer)+((typeof(screen)=="undefined")?"":
				";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
				screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
				";"+Math.random()+
				"' alt='' title='LiveInternet: показано число просмотров за 24"+
				" часа, посетителей за 24 часа и за сегодня' "+
				"border='0' width='88' height='31'><\/a>")
				--></script><!--/LiveInternet-->
			</noindex>
			<?php endif;?>
		</div>
	</div>

    <style>
        .footer-block .footer-phones {
            float: right;
            margin-bottom: 10px;
            padding-top: 0;
            width: 200px;
            line-height: 14px;
            font-size: 13px;
            text-align: right;
        }

        .footer-block .footer-phones * {
            box-sizing: border-box;
        }

        .footer-block .footer-phones .footer-phones-item {
            padding-left: 25px;
            padding: 5px 0;
        }

        /*.footer-phones > div {
            float: left;
            margin-right: 0px;
            background-image: url('/img/call-icon-green.png');
            background-repeat: no-repeat;
            background-position: left;
            background-size: 18px;
            text-align: left;
        }*/

        .footer-phones a {
            font-size: 20px;
        }

        .footer-phones div {
            line-height: 20px;
            font-size: 20px;
        }

        .footer-phones div span {
            font-size: 20px;
            color: #282828;
        }

    </style>

	<div class="f-right">

        <div style="float: right; width:200px;">
        <div class="footer-phones">
            <div class="footer-phones-item phone1"><a href="tel:+78623432112">8 (962) <span>343-21-12</span></a></div>
            <div class="footer-phones-item phone2"><a href="tel:+78129855885">8 (812) <span>985-58-85</span></a></div>
        </div>

			<div class="cart-container">
				<div class="callus">
					<a class="callme_order_btn">Заказать звонок</a>
				</div>
				<div class="mailto">
					<a href="mailto:zakaz@ceramic-center.ru">zakaz@ceramic-center.ru</a>
				</div>
				<div class="footer-social" style="float:right;">
					<a target="_blank" class="footer-social-vk" rel="nofollow" href="https://vk.com/ceramic_center"></a>
					<a target="_blank" class="footer-social-fb" rel="nofollow" href="https://www.facebook.com/899115430186993/ "></a>
					<a target="_blank" class="footer-social-gplus" rel="nofollow" href="https://plus.google.com/u/0/communities/108802106242802614937/"></a>
					<a target="_blank" class="footer-social-ok" rel="nofollow" href="http://ok.ru/group/53861866471670/"></a>
					<a target="_blank" class="footer-social-twitter" rel="nofollow" href="https://twitter.com/@ceramic_center"></a>
				</div>
				<script>
					$(document).ready(function() {
		   				$('.callme_order_btn').jbcallme({
		       				postfix: "callme_order", 
		       				fields: {
			            		time: {
			                		placeholder: "Город",
			            		},
			            
			            		action: {
			                		type: "hidden",
			                		value: "callme_order",
			            		},
		        			},
		    			});
					});
				</script>
			</div>
        </div>
        <?php if (!defined('DEBUG') || !DEBUG): ?>
            <a rel="nofollow" href="https://clck.yandex.ru/redir/dtype=stred/pid=47/cid=2508/*http://market.yandex.ru/shop/312356/reviews"><img src="https://clck.yandex.ru/redir/dtype=stred/pid=47/cid=2507/*https://grade.market.yandex.ru/?id=312356&action=image&size=2" border="0" width="150" height="101" alt="Читайте отзывы покупателей и оценивайте качество магазина на Яндекс.Маркете" /></a>
        <?php endif; ?>

    </div>

	<div class="pay">		
		<img class="f-sys-1" src="/img/pay/yandex_money.png" alt="">
		<img class="f-sys-2" src="/img/pay/wmlogo_vector_blue.png" alt="">
		<img class="f-sys-3" src="/img/pay/sberbank2010.png" alt="">
		<img class="f-sys-4" src="/img/pay/visa.png" alt="">
		<img class="f-sys-5" src="/img/pay/master.png" alt="">
		<img class="f-sys-6" src="/img/pay/maestro.png" alt="">
	</div>

</div>

<div class="subscr block_100" id="xsmpljsform">
	<form action="/sibscribe.php" id="xform" method="post" style="position: relative;">
		<label>Подписывайтесь на новости и акции</label>
		<input type="text" placeholder="Ваш e-mail" name="dxinput0" required="required" />
		<input type="hidden" name="date" value="noscript" />
		<input type="submit" value="Подписаться" />
		<span  id="checked-dxinput0" style="font-size: 0.75em; position: absolute; top: 37px; left: 170px;font-size: 0.75em"></span>
		<span id="xrspns"></span>
	</form>
</div>
<script src="/subscribe.js"></script>

<p class="block_100 f-text1">2011 &mdash; <?=date('Y');?> &copy; Все права защищены. Интернет-магазин керамической плитки "Центр керамики"</p>
<p class="block_100 f-text2">
	<noindex>
		При копировании материалов с сайта обязательна ссылка на источник. Обращаем ваше внимание на то, что
		данный интернет-сайт носит исключительно информационный характер и ни при каких условиях не является
		публичной офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса Российской Федерации.
	</noindex>
</p>

<br />

<?php if (!defined('DEBUG') || !DEBUG): ?>
<noindex>
<noscript><div><img src="//mc.yandex.ru/watch/21074602" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</noindex>

<style type="text/css">
/*
	*, *:before, *:after {
		box-sizing: border-box;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
	}
*/
</style>

<script type='text/javascript'> /* build:::7 */
	var liveTex = true,
			liveTexID = 33517,
			liveTex_object = true;
	(function() {
			var lt = document.createElement('script');
			lt.type ='text/javascript';
			lt.async = true;
	lt.src = '//cs15.livetex.ru/js/client.js';
			var sc = document.getElementsByTagName('script')[0];
			if ( sc ) sc.parentNode.insertBefore(lt, sc);
			else  document.documentElement.firstChild.appendChild(lt);
	})();
</script>
<?php endif;?>
<script type="text/javascript">
$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() != 0) {
            $('#totop').fadeIn();
        } else {
            $('#totop').fadeOut();
        }
    });
    $('#totop').click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 1000);
    });
});
</script>
<div id="totop"> </div>
<?php if (!defined('DEBUG') || !DEBUG): ?>
<script type='text/javascript'>
var _ds = _ds || [];
_ds['campaingid'] = '162';
_ds['banner'] = '2';
_ds['pageviews'] = true;
(function() {
var ds = document.createElement('script');
ds.type = 'text/javascript';
ds.async = true;
ds.src = ('https:' == document.location.protocol? 'https://': 'http://') + 'socadviser.ru/v2/demisale.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(ds, s);
})();
</script>
<?php endif; ?>

</div>