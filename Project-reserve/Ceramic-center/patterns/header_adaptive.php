<?php

if (!defined('IS_SYSTEM')) exit();

function renderSubMenu($page_id)
{
	global ${PAGE};

	$subMenu = '';
	$m2 = ${PAGE}->GetTree($page_id, false);
	if ($iNum2 = sizeof($m2)) {
		for ($i2 = 0; $i2 < $iNum2; ++$i2) {
			if ((int)$m2[$i2]['page_display'] < 1) continue;
			if ($m2[$i2]['page_link'] <> '') {
				$link = $m2[$i2]['page_link'];
			} else {
				$link = '/'.DIR_RPATH.$m2[$i2]['link'].'/';
			}
			if($link=='/retail-customers/') $link = '/for-clients/';
			$subMenu .= '<a ' . ($noindex ? 'rel="nofollow"' : '') . ' href="'.$link.'">'.$m2[$i2]['page_name'].'</a>';
			if ($m2[$i2]['link'] != 'poleznaja-informacija') {
				$m3 = ${PAGE}->GetTree($m2[$i2]['page_id'], false);
				if ($iNum3 = sizeof($m3)) {
					for ($i3 = 0; $i3 < $iNum3; ++$i3) {
						if ((int)$m3[$i3]['page_display'] < 1) continue;
						if ($m3[$i3]['page_link'] <> '') {
							$link = $m3[$i3]['page_link'];
						} else {
							$link = '/'.DIR_RPATH.$m3[$i3]['link'].'/';

						}
						//раскомментировать для отображения вложенных разделов
						//$subMenu .= '<a ' . ($noindex ? 'rel="nofollow"' : '') . ' href="'.$link.'" style="font-size: 12px;">&raquo;&nbsp;'.$m3[$i3]['page_name'].'</a>';
					}
				}
			}
		}
	}
	return $subMenu;
}

?>

<style>

    .header {
        background-color: #FAFAFA;
    }

    .header .header-logo {
        vertical-align: top;
    }

    .header-cart-container {
        width: 185px;
        margin-left: 0px;
        margin-bottom: 13px;
    }

    .header-text {
        width: 454px;
        text-align: left;
    }

    .header-text .blck-text p {
        color: #000;
    }

    .header-text .header-text-features {
        width: 50%;
        float: left;
    }

    .header-text .header-text-features li {
        list-style-image: url('/images/checkmark.png');
        font-size: 15px;
        line-height: 15px;
        margin-left: 52px;
        color: #939292;
    }

    .header-text .header-text-features li .bigger {
        font-size: 16px;
        font-weight: normal;
    }

    .header .header-phones {
        min-height: unset;
        margin: 0px;
        width: 100%;
        padding: 0 0 0 15px;
    }

    .header .header-phones * {
        box-sizing: border-box;
    }

    .header .header-phones .phones {
        padding-left: 25px;
    }

    .header-phones > div {
        width: 50%;
        float: left;
        margin-right: 0px;
        background-image: url('/img/call-icon-green.png');
        background-repeat: no-repeat;
        background-position: left;
        background-size: 18px;
        text-align: left;
    }

    .header-phones a {
        font-size: 20px;
    }

    .header-phones div {
        line-height: 20px;
        font-size: 20px;
    }

    .header-phones div span {
        font-size: 20px;
        color: #282828;
    }

    .header-cart-container .callus,
    .header-cart-container .mailto {
        float: right;
    }

    .header-cart-container .mailto a:hover {
        text-decoration: none;
    }

    .header-cart-container .callus {
        margin-bottom: 0px;
    }

    .clear {
        clear: both;
    }

    .mailto a {
        color: #939292;
        text-decoration: underline;
        font-size: 14px;
        background: url(/img/head-mail.png) no-repeat 0px center;
        background-size: auto auto;
        padding-left: 22px;
        background-size: 16px;
    }

    @media all and (min-width: 801px) {
        .header .header-phones {
            padding-top: 6px;
        }

        .header .header-phones .phones.phone1 {
            padding-left: 25px;
        }

        .header .header-phones .phones.phone2 {
            background-position: 10px;
            padding-left: 35px;
        }

        .header-text ul {
            margin-top: 7px;
        }

        .header-text .header-text-features li {
            padding: 0;
            margin-left: 70px;
        }

        .header-text .header-text-features.features2 li {
            padding: 0;
            margin-left: 59px;
        }
    }

    @media all and (max-width: 800px) {

        .header .header-text {
            width: 450px;
            text-align: left;
            display: block;
            float: left;
            margin-top: 20px;
        }

        .header div.header-phones {
            display: block;
            float: none;
            position: relative;
            top: auto;
            right: auto;
        }

        div.header-cart-container {
            display: block;
            position: relative;
            float: right;
            right: auto;
            top: auto;
        }

        .header-cart-container .callus-container {
            display: block;
            position: relative;
            right: auto;
            top: auto;

            width: 46%;
            float: none;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .header-cart-container .callus,
        .header-cart-container .mailto {
            float: none;
        }
    }

    @media all and (max-width: 530px) {
        .header div.header-phones,
        .header-cart-container .callus-container {
            width: 100%;
            min-height: unset;
            margin-top: 20px;
        }

        .header .header-phones .blck-text p,
        .header-cart-container .mailto,
        .header-cart-container .callus {
            margin-right: 10px;
        }
    }

    @media all and (max-width: 390px) {
        .header div.header-phones {
            min-height: unset;
            margin-top: 0px;

        }

        .header-cart-container .callus-container {
            min-height: unset;
            margin-top: 20px;
        }

        .header div.header-phones .blck-text {
            margin-left: 62px;
            text-align: left;
            line-height: 25px;
            padding-left: 30px;
            width: auto;
        }

        .header .header-text  {
            width: 100%;
            margin: 20px 0 0;
        }
        .header-text .header-text-features {
            width: 100%;
            margin: 0;
        }

        .header-text .header-text-features li {
            width: auto;
            margin-left: 80px;
        }

    }

</style>

<div id="bodystage">
<div class="sitecontent">
<div class="header" style="white-space: nowrap;" id="top">

		<div class="header-logo"><a href="/<?php echo DIR_RPATH;?>"><img src="/<?php echo DIR_RPATH;?>img/logo.png" border="0" alt="ЦЕНТР КЕРАМИКИ" title="ЦЕНТР КЕРАМИКИ" /></a></div>

		<div class="header-text">
            <div class="header-phones">
                <div class="phones phone1"><a href="tel:+79623432112">8 (962) <span>343-21-12</span></a></div>
                <div class="phones phone2"><a href="tel:+78129855885">8 (812) <span>985-58-85</span></a></div>
            </div>
			<div class="blck-text">
                <ul class="header-text-features features1">
                    <li>Розница и Опт</li>
                    <li>Более 15000 товаров</li>
                    <li>Доставка по России</li>
                </ul>
                <ul class="header-text-features features2">
                    <li><span class="bigger">3D</span> дизайн-проект</li>
                    <li>Помощь в выборе</li>
                    <li>Скидки и подарки</li>
                </ul>
			</div>
<!--            <div class="text" style="float: left">
                <a href="/dostavka-zakaza/">
                   Мы доставляем по всей России
                </a>
            </div>
-->		</div>
		<div class="header-cart-container">
            <div class="callus-container">
                <div class="callus">
                    <a class="callme_order_btn">Заказать звонок</a>
                </div>
                <div class="clear"></div>
                <div class="mailto">
                    <a href="mailto:zakaz@ceramic-center.ru">zakaz@ceramic-center.ru</a>
                </div>
            </div>
			<script>
			$(document).ready(function() {
   				 $('.callme_order_btn').jbcallme({
       				 postfix: "callme_order",
       				 success: "<a class='new-form'>Отправить новую заявку?</a>",
       				 fields: {
       				 	name: {
				            type: "text",
				            placeholder: "не обязательно",
				            required: false,
				            label:"Имя"
				        },
			            time: {
			                placeholder: "укажите город",
			                label:"Город <span>*</span>",
			                required: true
			            },
				        tel: {
				            type: "text",
				            required: true,
				            label: "Телефон <span>*</span>",
				            placeholder: "+7 ( ___ ) ___-__-__"
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
	<div style="clear: both;"></div>
</div>
<?php
$m1 = ${PAGE}->GetTree(0, false);


if ($iNum = sizeof($m1)) {
?>
<? $noindex_pages = array(203, 167, 201); ?>
<table cellpadding="0" cellspacing="0" border="0" class="topmenu"><tbody><tr>
<?php

	for ($i = 0; $i < $iNum; ++$i) {

		if ((int)$m1[$i]['page_display'] < 1) continue;
		if ((int)$m1[$i]['page_id'] == 245) continue;
		if ((int)$m1[$i]['page_id'] == 308) continue;

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
<?php

		$subMenu = '';
		if ($m1[$i]['page_id'] == 171) {
			$subMenu .= renderSubMenu($m1[$i]['page_id']);

			$noindex = in_array(245, $noindex_pages);
			$santekhnika_info = InfoPageByID(245);
			$link = '/'.$santekhnika_info['page_filename'].'/';
			$subMenu .= '<a ' . ($noindex ? 'rel="nofollow"' : '') . ' href="'.$link.'">'.$santekhnika_info['page_name'].'</a>';

            $noindex = in_array(308, $noindex_pages);
            $flooring_info = InfoPageByID(308);
            if($flooring_info['page_display'] == 1) {
                $fl_link = '/'.'napolnye-pokrytija'.'/';
                $subMenu .= '<a ' . ($noindex ? 'rel="nofollow"' : '') . ' href="'.$fl_link.'">'.$flooring_info['page_name'].'</a>';
            }
        } else {
			$subMenu = renderSubMenu($m1[$i]['page_id']);
		}

		if ($subMenu <> '' && ($i!=6 || REGION != 'msk'))  {
			echo '<div class="submenu" id="dc'.$i.'"><div>'.$subMenu.'</div></div>';
			//echo '<script type="text/javascript">$(document).ready(function(){$("#dc'.$i.'").width($("#dp'.$i.'").width()+50);});</script>';
		}
?>
	</div>
</td>
<?php
	}


?>
<td class="topmenu__search">
	<form action="<?php echo '/'.DIR_RPATH.Link2PatternPage('search').'/';?>" method="get">
	<div style="position: relative">
		<input type="text" name="q" class="searchtext ds-search" data-dssearch-letters="2" data-dssearch-rows="6" font-size=8px placeholder="Я ищу..." />
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
<div class="topmenusearch">
	<form action="<?php echo '/'.DIR_RPATH.Link2PatternPage('search').'/';?>" method="get">
		<div style="padding: 10px 15px;">
			<input type="text" name="q" class="searchtext" placeholder="    Введите название или артикул" style="border: 1px solid #74a000; width: 100%; padding: 10px 0;" />
		</div>
	</form>
</div>
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
			if($link=='/home/') $link = '/';
		}
?>

	<div>
  <?php $noindex = in_array($m1[$i]['page_id'], $noindex_pages); ?>

	<a <?php echo $noindex ? 'rel="nofollow"' : '' ?> href="<?php echo $link; ?>"><?php echo $m1[$i]['page_name'];?></a>
<?php
		$subMenu = '';
		$m2 = ${PAGE}->GetTree($m1[$i]['page_id'], false);
		if ($iNum2 = sizeof($m2)) {
			for ($i2 = 0; $i2 < $iNum2; ++$i2) {
				if ((int)$m2[$i2]['page_display'] < 1) continue;
				if ($m2[$i2]['page_link'] <> '') {
					$link = $m2[$i2]['page_link'];
				} else {
					$link = '/'.DIR_RPATH.$m2[$i2]['link'].'/';
				}
				if($link=='/retail-customers/') $link = '/for-clients/';
				$subMenu .= '<a ' . ($noindex ? 'rel="nofollow"' : '') . ' href="'.$link.'">'.$m2[$i2]['page_name'].'</a>';
				if ($m2[$i2]['link'] != 'poleznaja-informacija') {
					$m3 = ${PAGE}->GetTree($m2[$i2]['page_id'], false);
					if ($iNum3 = sizeof($m3)) {
						for ($i3 = 0; $i3 < $iNum3; ++$i3) {
							if ((int)$m3[$i3]['page_display'] < 1) continue;
							if ($m3[$i3]['page_link'] <> '') {
								$link = $m3[$i3]['page_link'];
							} else {
								$link = '/'.DIR_RPATH.$m3[$i3]['link'].'/';
							}
							$subMenu .= '<a ' . ($noindex ? 'rel="nofollow"' : '') . ' href="'.$link.'" style="font-size: 12px;">&raquo;&nbsp;'.$m3[$i3]['page_name'].'</a>';
						}
					}
				}
			}
		}
		if ($subMenu <> '')  {
			echo '<div class="submenu_mobile"><div>'.$subMenu.'</div></div>';

		}
?>
	</div>

<?php
	}
	// if (isset($_GET['try-search'])) {
?>

<?php
	// }
}
?>
</div>
</noindex>

<script>
	$('.sitecontent .topmenu_mobile > div').click(function(e){
		if(!$(e.target).closest("a").length){
			$(this).find('div.submenu_mobile').slideToggle();
		}
	});
</script>
