<?php /* Smarty version Smarty-3.1.14, created on 2019-03-25 10:48:00
         compiled from "/home/c/cl36655/public_html/wa-data/public/site/themes/default/index.html" */ ?>
<?php /*%%SmartyHeaderCode:18836504955c7ac35fe51cf4-23026911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f9a796aeae0a60015f4b1199d115eb9c44411f' => 
    array (
      0 => '/home/c/cl36655/public_html/wa-data/public/site/themes/default/index.html',
      1 => 1553500019,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18836504955c7ac35fe51cf4-23026911',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_5c7ac35fec0840_17146525',
  'variables' => 
  array (
    'wa' => 0,
    'canonical' => 0,
    'wa_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_static_url' => 0,
    'wa_active_theme_path' => 0,
    'cart_total' => 0,
    'frontend_header' => 0,
    '_' => 0,
    'query' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c7ac35fec0840_17146525')) {function content_5c7ac35fec0840_17146525($_smarty_tpl) {?><!DOCTYPE html>
<html<?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount')){?> class="my"<?php }?>>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=0.25" />
    <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->title(), ENT_QUOTES, 'UTF-8', true);?>
</title>
    <meta name="Keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('keywords'), ENT_QUOTES, 'UTF-8', true);?>
" />
    <meta name="Description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['wa']->value->meta('description'), ENT_QUOTES, 'UTF-8', true);?>
" />
    
    <?php if (!empty($_smarty_tpl->tpl_vars['canonical']->value)){?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['canonical']->value;?>
"/><?php }?>
    <link rel="icon" type="image/x-icon" href="/wa-data/public/site/favicon.ico">

    <!-- css -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
default.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
waslidemenu/waslidemenu.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css"/>
    <?php if ($_smarty_tpl->tpl_vars['wa']->value->shop&&$_smarty_tpl->tpl_vars['wa']->value->shop->currency()=='RUB'){?> <link href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/font/ruble/arial/fontface.css" rel="stylesheet" type="text/css"><?php }?>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>
 
    
    <!-- js -->
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-1.11.1.min.js" ></script>
    
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
default.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_theme_url']->value;?>
waslidemenu/jquery.waslidemenu.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
    
    <script type="text/javascript">
    
    jQuery(function($) {
	        $(window).scroll(function(){
	            if($(this).scrollTop()>140){
	                $('#navigation').addClass('fixed');
	            }
	            else if ($(this).scrollTop()<140){
	                $('#navigation').removeClass('fixed');
	            }
	        });
	    });    
    
    </script>
    

    <?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
 
    
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->headJs();?>
 
    


    <meta name="yandex-verification" content="7d417f3d21b2d290" />
    <meta name="yandex-verification" content="e832d747ff424d31" />
    <meta name="yandex-verification" content="fc87e0434fbae421" />
    <meta name="yandex-verification" content="b92c54658f34b8de" />
    <meta name="google-site-verification" content="rdS9SMKrdUVN_IMjHaSfGa3NmjzTq3NMvFkbAsjdPrI" />

    


</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
	<!-- gtag -->

<div itemscope itemtype="http://schema.org/Organization">
<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse">
	<tr>
		<td height="95" background="/wa-data/public/site/images/bg-new.jpg">
		<div align="center">
			<table border="0" width="1200" cellpadding="0" style="border-collapse: collapse">
				<tr>
					<td width="250"><a href="/">
					<img border="0" src="/wa-data/public/site/images/logo-new.png" width="220" height="75"></a></td>
					<td>
					
        <font color="#FFFFFF"><b><span itemprop="name">ООО "ТД МФК-Торг"</span></b><br>
		</font>
		<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
		<font size="2" color="#FFFFFF"><b>Склад и Офис оптовых продаж:</b> <span itemprop="addressLocality">г. Москва</span>, <span itemprop="streetAddress">ул. Подольских курсантов, 7, стр.3</span></font><br>
		<font size="2" color="#FFFFFF"><b>Розничный магазин:</b> <span itemprop="addressLocality">г. Москва</span>, <span itemprop="streetAddress">Симферопольский бульвар д. 11</span><br>
		<b>E-mail:</b> 7672886@mfk-torg.ru</font>
        </div>
					
					</td>
					<td align="right">
					
		<b><font size="2" color="#ffffff">Контактный центр:</font></b><br>
		<b><font style="font-size: 16pt; font-weight: 700" color="#ffffff"><span itemprop="telephone">+7 (495) 767-28-86  /  +7 (985) 410-97-57</span></font></b><br>
         <figure style="text-align: right"><img src="/wa-data/public/shop/img/отдел розничных.jpg" style= right> </figure>
		    
					    
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
</table>
</div>

<div id="navigation">
<table width="100%" bgcolor="#00486A">
    <tr>
        <td>
            
            <div align="center" class="topmenunew">
			<table height="38" border="0" width="1200" cellpadding="0" style="border-collapse: collapse">
				<tr>
					<td width="90"><b><a href="/">ГЛАВНАЯ</a></b></td>
					<td width="120"><b><a href="/about/">О КОМПАНИИ</a></b></td>
					<td width="170"><b><a href="/delivery/">ДОСТАВКА И ОПЛАТА</a></b></td>
					<td width="210"><b><a href="/optovym-pokupatelyam/">ОПТОВЫМ ПОКУПАТЕЛЯМ</a></b></td>
					<td width="150"><b><a href="/contacts/">КОНТАКТЫ</a></b></td>
					<td>
					
<?php if (count($_smarty_tpl->tpl_vars['wa']->value->apps())>0||$_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>

                        <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>

                                <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->myUrl()){?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->myUrl();?>
" class="not-visited"> <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->user('firstname'))===null||$tmp==='' ? 'Личный кабинет' : $tmp);?>
</strong></a>
                                    <?php }else{ ?>
                                         <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->user('firstname'))===null||$tmp==='' ? 'Личный кабинет' : $tmp);?>
</strong>
                                    <?php }?>
                                
                                    &nbsp;&nbsp;&nbsp;<font color="ffffff">/</font>&nbsp;&nbsp;&nbsp;<a href="?logout">Выйти</a>
                                <?php }else{ ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Вход</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Регистрация</a>
                                <?php }?>

                        <?php }?>
<?php }?>
					
					</td>
					<td align="right">

<a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
">
			<font size="4"><b>КОРЗИНА ЗАКАЗА:</b></font>  
			    
        <?php $_smarty_tpl->tpl_vars['cart_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total(), null, 0);?>
            
                <font size="4"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</font>
            </a>

					
					</td>
				</tr>
			</table>
		</div>
            
        </td>
    </td>
</table>
</div>


<noindex>
<table class="css1" border="0" width="100%" cellpadding="0" style="border-collapse: collapse" height="300">
	<tr>
		<td align="center"><div class="razmer"></div></td>
	</tr>
</table>
</noindex>
<!--
<br />
<div align="center">
<div id="slides">
	<div class="slides_container">
		<div><img src="/wa-data/public/site/foto-razdelov/kolesa.jpg"></div>
		<div><img src="/wa-data/public/site/foto-razdelov/joker.jpg"></div>
		<div><img src="/wa-data/public/site/foto-razdelov/mebel.jpg"></div>
	</div>
</div>
</div>
<br />-->


<div align="center">
<table border="0" width="1200" cellpadding="0" style="border-collapse: collapse" height="70">
	<tr>
		<td width="270"><a name="metka"></a><a href="/wa-data/public/site/price.xlsx"><img src="/wa-data/public/site/dounload.png"></a></td>
		<td width="160"><a href="/akcii/"><img src="/wa-data/public/site/dounload2.png"></a></td>
		<td width="160"><a href="/novinki/"><img src="/wa-data/public/site/new.png"></a></td>
		<td width="160" align="right"><font size="3"><b>ПОИСК ТОВАРОВ</b></font></td>
		<td width="450">
		
		<!-- plugin hook: 'frontend_header' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_header']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>            

<?php if (!$_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount')){?>
    <nav class="app-navigation" role="navigation">
        <!-- product search -->
        <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/search');?>
" class="search float-right">
            <input type="search" name="query" <?php if (!empty($_smarty_tpl->tpl_vars['query']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
"<?php }?> id="search" placeholder="Найти товары">
        </form>
    </nav>
<?php }?>
		
		</td>
	</tr>
</table>
</div>

<div align="center">
	<table border="0" width="1200" cellpadding="0" style="border-collapse: collapse">
		<tr>
			<td width="245" valign="top">

<br />

				<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" bgcolor="#eaeaea">
					<tr>
						<td height="35" style="font-size: 24px; border-bottom: 1px solid #5b5b5b;" bgcolor="#ffffff">КОЛЕСА</td>
					</tr>
					<tr>
						<td id="tdcss">
						<a href="/category/kolesa/promyshlennye/#metka"><div class="menuleft">Промышленные</div></a>
						<a href="/category/kolesa/bolshegruznye/#metka"><div class="menuleft">Большегрузные</div></a>
						<a href="/category/kolesa/tyazhelogruznye/#metka"><div class="menuleft">Тяжелогрузные</div></a>
						<a href="/category/kolesa/poliuretanovye/#metka"><div class="menuleft">Полиуретановые</div></a>
						<a href="/category/kolesa/koleso-cargo-caster/#metka"><div class="menuleft">CARGO CASTER</div></a>
						<a href="/category/kolesa/apparatnye/#metka"><div class="menuleft">Аппаратные</div></a>
						<a href="/category/kolesa/termostoikie/#metka"><div class="menuleft">Термостойкие</div></a>
						<a href="/category/kolesa/dlya-rokhli/#metka"><div class="menuleft">Для рохли</div></a>
						<a href="/category/kolesa/poliamid/#metka"><div class="menuleft">Полиамид</div></a>
						<a href="/category/kolesa/neylon/#metka"><div class="menuleft">Нейлон</div></a>
						<a href="/category/kolesa/yevropeyskie/#metka"><div class="menuleft">Европейские</div></a>
						<a href="/category/kolesa/dlya-pokupatelskikh-telezhek/#metka"><div class="menuleft">Для покупательских тележек</div></a>
						<a href="/category/kolesa/pnevmaticheskie/#metka"><div class="menuleft">Пневматические</div></a>
						</td>
					</tr>
				</table>
				<br /><br />
				<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" bgcolor="#E7E7E6">
					<tr>
						<td height="70" style="font-size: 24px; border-bottom: 1px solid #5b5b5b;" bgcolor="#ffffff">ТАЧКИ, ТЕЛЕЖКИ<br>И ШТАБЕЛЕРЫ</td>
					</tr>
					<tr>
						<td id="tdcss">
						<a href="/category/tachki-telezhki-i-shtabelyary/tachki/#metka"><div class="menuleft">Тачки</div></a>
						<a href="/category/tachki-telezhki-i-shtabelyary/telezhki/#metka"><div class="menuleft">Тележки</div></a>
						<a href="/category/tachki-telezhki-i-shtabelyary/telezhki-gidrovlicheskie/#metka"><div class="menuleft">Тележки гидравлические</div></a>
						<a href="/category/tachki-telezhki-i-shtabelyary/shtabelery-gidrovlicheskie/#metka"><div class="menuleft">Штабелеры гидравлические</div></a>
						<a href="/category/tachki-telezhki-i-shtabelyary/stol-gidrovlicheski/#metka"><div class="menuleft">Столы гидравлические</div></a>
						</td>
					</tr>
				</table>				
				<br /><br />
				<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" bgcolor="#E7E7E6">
					<tr>
						<td height="70" style="font-size: 24px; border-bottom: 1px solid #5b5b5b;" bgcolor="#ffffff">ТРУБЫ И<br>СИСТЕМА JOKER</td>
					</tr>
					<tr>
						<td id="tdcss">
						<a href="/category/truby-i-sistema-joker/truby-ot-o10-o50/#metka"><div class="menuleft">Трубы 10-50</div></a>
						<a href="/category/truby-i-sistema-joker/krepezh-o10/#metka"><div class="menuleft">Крепеж 10 и Овал</div></a>
						<a href="/category/truby-i-sistema-joker/krepezh-o16-aksessuary/#metka"><div class="menuleft">Крепеж 16</div></a>
						<a href="/category/truby-i-sistema-joker/krepezh-o25/#metka"><div class="menuleft">Крепеж 25</div></a>
						<a href="/category/truby-i-sistema-joker/krepezh-o32/#metka"><div class="menuleft">Крепеж 32</div></a>
						<a href="/category/truby-i-sistema-joker/krepezh-o50-aksessuary/#metka"><div class="menuleft">Крепеж 50</div></a>
						<a href="/category/truby-i-sistema-joker/sistema-tritix-tritiks/#metka"><div class="menuleft">Система TRITIX (Тритикс)</div></a>
						<a href="/category/truby-i-sistema-joker/sistema-peril-iz-nerzhaveiki/#metka"><div class="menuleft">Система перил из нержавейки</div></a>
						<a href="/category/truby-i-sistema-joker/sistema-peril-khrom/#metka"><div class="menuleft">Система перил из хрома</div></a>
						<a href="/category/truby-i-sistema-joker/reshetka-khromirovannaya/#metka"><div class="menuleft">Решетка хромированная</div></a>
						</td>
					</tr>
				</table>
				<br /><br />
				<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" bgcolor="#E7E7E6">
					<tr>
						<td height="70" style="font-size: 24px; border-bottom: 1px solid #5b5b5b;" bgcolor="#ffffff">МЕБЕЛЬНАЯ<br>ФУРНИТУРА</td>
					</tr>
					<tr>
						<td id="tdcss">
						<a href="/category/mebelnaya-furnitura/sushki-dlya-posudy/#metka"><div class="menuleft">Сушки для посуды</div></a>
						<a href="/category/mebelnaya-furnitura/zamki-mebelnye-pochtovye-dlya-stekla/#metka"><div class="menuleft">Замки мебельные, почтовые,<br /> для стекла</div></a>
						<a href="/category/mebelnaya-furnitura/shina-i-navesy/#metka"><div class="menuleft">Шина и навесы</div></a>
						<a href="/category/mebelnaya-furnitura/kryuchki/#metka"><div class="menuleft">Крючки</div></a>
						<a href="/category/mebelnaya-furnitura/petli/#metka"><div class="menuleft">Петли</div></a>
						<a href="/category/mebelnaya-furnitura/napravlyayushchie-sharikovye-i-rolikovye/#metka"><div class="menuleft">Шариковые и роликовые направляющие для ящиков</div></a>
						<a href="/category/mebelnaya-furnitura/kronshteiny/#metka"><div class="menuleft">Кронштейны</div></a>
						<a href="/category/mebelnaya-furnitura/kronshteyn-tv/#metka"><div class="menuleft">Кронштейн TV</div></a>
						<a href="/category/mebelnaya-furnitura/kronshtey-mk/#metka"><div class="menuleft">Кронштейны МК</div></a>
						<a href="/category/mebelnaya-furnitura/zerkalo-steklo-i-polkoderzhateli/#metka"><div class="menuleft">Зеркало-, стекло- и полкодержатели</div></a>
						<a href="/category/mebelnaya-furnitura/kolesa/#metka"><div class="menuleft">Колеса мебельные</div></a>
						<a href="/category/mebelnaya-furnitura/opory-dlya-stola/#metka"><div class="menuleft">Опоры для стола</div></a>
						<a href="/category/mebelnaya-furnitura/opory-dlya-stola/mebelnye-nozhki/#metka"><div class="menuleft">Мебельные ножки</div></a>
						<a href="/category/mebelnaya-furnitura/dlya-razdvizhnykh-dverei/#metka"><div class="menuleft">Для раздвижных дверей</div></a>
						<a href="/category/mebelnaya-furnitura/zashchelki-chemodannye/#metka"><div class="menuleft">Защелки чемоданные</div></a>
						<a href="/category/mebelnaya-furnitura/ruchki-skoby-mebelnye/#metka"><div class="menuleft">Ручки - скобы мебельные</div></a>
						<a href="/category/mebelnaya-furnitura/mebelnye-ruchki/#metka"><div class="menuleft">Мебельные ручки</div></a>
						<a href="/category/mebelnaya-furnitura/reilingovye-ruchki/#metka"><div class="menuleft">Рейлинговые ручки</div></a>
						<a href="/category/mebelnaya-furnitura/raznoe/#metka"><div class="menuleft">Разное</div></a>
						</td>
					</tr>
				</table>
				<br />
				<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" bgcolor="#E7E7E6">
					<tr>
						<td height="70" style="font-size: 24px;"><a href="/category/moyki/#metka"><font color="#000000">&nbsp;&nbsp;МОЙКИ</font></a></td>
					</tr>
				</table>
				<br />
				<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" bgcolor="#E7E7E6">
					<tr>
						<td height="70" style="font-size: 24px;"><a href="/category/aksessuary-dlya-kukhni/#metka"><font color="#000000">&nbsp;&nbsp;КУХОННЫЕ <BR />&nbsp;&nbsp;АКСЕССУАРЫ</font></a></td>
					</tr>
				</table>
				<br />

			</td>
			<td width="25">	</td>
			<td valign="top">

			
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['wa_active_theme_path']->value)."/main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  
			</td>
		</tr>
	</table>
</div>

		<table width="100%" height="38" bgcolor="#00486A">
		    <tr>
		        <td>
		<div align="center" class="topmenunew">
			<table border="0" width="1200" cellpadding="0" style="border-collapse: collapse">
				<tr>
					<td width="90"><b><a href="/">ГЛАВНАЯ</a></b></td>
					<td width="120"><b><a href="/about/">О КОМПАНИИ</a></b></td>
					<td width="170"><b><a href="/delivery/">ДОСТАВКА И ОПЛАТА</a></b></td>
					<td width="210"><b><a href="/optovym-pokupatelyam/">ОПТОВЫМ ПОКУПАТЕЛЯМ</a></b></td>
					<td width="150"><b><a href="/contacts/">КОНТАКТЫ</a></b></td>
					<td>
					
<?php if (count($_smarty_tpl->tpl_vars['wa']->value->apps())>0||$_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>

                        <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>

                                <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                                    <?php if ($_smarty_tpl->tpl_vars['wa']->value->myUrl()){?>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->myUrl();?>
" class="not-visited"> <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->user('firstname'))===null||$tmp==='' ? 'Личный кабинет' : $tmp);?>
</strong></a>
                                    <?php }else{ ?>
                                         <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->user('firstname'))===null||$tmp==='' ? 'Личный кабинет' : $tmp);?>
</strong>
                                    <?php }?>
                                
                                    &nbsp;&nbsp;&nbsp;<font color="ffffff">/</font>&nbsp;&nbsp;&nbsp;<a href="?logout">Выйти</a>
                                <?php }else{ ?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
">Вход</a>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
">Регистрация</a>
                                <?php }?>

                        <?php }?>
<?php }?>
					
					</td>
					<td align="right">
					
<a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('shop/frontend/cart');?>
">
			<font size="4"><b>КОРЗИНА ЗАКАЗА:</b></font>  
			    
        <?php $_smarty_tpl->tpl_vars['cart_total'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->cart->total(), null, 0);?>
            
                <font size="4"><?php echo wa_currency_html($_smarty_tpl->tpl_vars['cart_total']->value,$_smarty_tpl->tpl_vars['wa']->value->shop->currency());?>
</font>
            </a>
					
					</td>
				</tr>
			</table>
		</div>
                </td>
            </tr>
    </table>
 

<table border="0" width="100%" cellpadding="0" style="border-collapse: collapse" height="170" bgcolor="#303030">
	<tr>
		<td align="center" bordercolor="#333333">
		<div align="center">
			<table border="0" width="1200" cellpadding="0" style="border-collapse: collapse" height="98%" >
				<tr>
					<td valign="top" align="left"><a href="/"><img src="/wa-data/public/site/1/logo2.png"></a></td>
					<td rowspan="2" valign="top">
					
<font size="2" color="#FFFFFF">
    
    <?php if (count($_smarty_tpl->tpl_vars['wa']->value->apps())>0||$_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>

        <?php if ($_smarty_tpl->tpl_vars['wa']->value->isAuthEnabled()){?>

            <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                <?php if ($_smarty_tpl->tpl_vars['wa']->value->myUrl()){?> 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->myUrl();?>
" class="not-visited">
                    <strong><font color="#FFFFFF"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->user('firstname'))===null||$tmp==='' ? 'Личный кабинет' : $tmp);?>
</font></strong></a>
                    <?php }else{ ?>
                     <strong><?php echo (($tmp = @$_smarty_tpl->tpl_vars['wa']->value->user('firstname'))===null||$tmp==='' ? 'Личный кабинет' : $tmp);?>
</strong>
                <?php }?>
                &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;<a href="?logout"><font color="#FFFFFF">Выйти</font></a>
            <?php }else{ ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->loginUrl();?>
"><font color="#FFFFFF">Вход</font></a>
                <font color="#FFFFFF">&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;</font>
                <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->signupUrl();?>
"><font color="#FFFFFF">Регистрация</font></a>
            <?php }?>

        <?php }?>
    <?php }?>
		
	
		<br> <br></font><font color="#FFFFFF"><b>
<font size="2">ООО "ТД МФК-Торг"</font></b></font><div>
		<font color="#FFFFFF" size="2"><b>Склад и Офис оптовых продаж:</b> г. Москва, ул. Подольских курсантов, 7, стр.3<br>
		<b>Режим работы:</b> пн.-пт. 9.00-18.00 (без обеда)<br>
		<b>E-mail:</b> 7672886@mfk-torg.ru<br>
		<b>Контактный центр:</b> +7 (495) 767-28-86<br /> </font>
        </div>		
					
					</td>
					<td rowspan="2" valign="bottom"><font color="#000000" size="2"><a href="https://www.restyleav.ru">
					<font color="#FFFFFF">Изготовление и поддержка сайта</font></a></font><br /><font color="#FFFFFF" size="2"> Creative Space Studio</font></td>
				</tr>
				<tr>
					<td valign="bottom">
					
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter12151837 = new Ya.Metrika({
                    id:12151837,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/12151837" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!--LiveInternet counter--><script type="text/javascript">
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t45.4;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,150))+";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
</script><!--/LiveInternet-->

<font size="2" color="#FFFFFF"> 2007-2018 &copy; Официальный сайт компании Mfk-torg.ru. Все права защищены.
</font>
					
					</td>
				</tr>
			</table>
		</div>
		</td>
	</tr>
</table>  
    
    
</body>


</html><?php }} ?>