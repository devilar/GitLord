<?php
$redUrl = array (
	'/catalog/instrument-oborudovanie/ruchnoj-instrument/dlya-shtukaturnyh-rabot/pravilo-pryamougolnoe-anodirovannoe-s-urovnem-i-ruchkami-20-m/' => '/catalog/instrument-oborudovanie/ruchnoj-instrument/dlya-shtukaturnyh-rabot/pravilo-pryamougolnoe-anodirovannoe-s-urovnem-i-ruchkami-2-0-m/',
	'/catalog/instrument-oborudovanie/ruchnoj-instrument/dlya-shtukaturnyh-rabot/pravilo-pryamougolnoe-anodirovannoe-s-urovnem-i-ruchkami-30-m/' => '/catalog/instrument-oborudovanie/ruchnoj-instrument/dlya-shtukaturnyh-rabot/pravilo-pryamougolnoe-anodirovannoe-s-urovnem-i-ruchkami-3-0-m/',
	'/catalog/instrument-oborudovanie/ruchnoj-instrument/dlya-shtukaturnyh-rabot/shpatel-oboyniy-300-mm-universalniy-plastikoviy/' => '/catalog/instrument-oborudovanie/ruchnoj-instrument/dlya-shtukaturnyh-rabot/shpatel-oboynyy-300-mm-universalnyy-plastikovyy/',
	'/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-krovelnye/29026/' => '/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-krovelnye/samorez-krovelnyy-zp-4-8x35-250-sht/',
	'/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-krovelnye/24894/' => '/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-krovelnye/samorez-krovelnyy-zp-4-8x51-200-sht/',
	'/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-krovelnye/16498/' => '/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-krovelnye/samorez-krovelnyy-zp-5-5x64-140-sht/',
	'/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-metall-metall-klopy/8775/' => '/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-metall-metall-klopy/samorez-shsmm-pressshayba-4-2x50-300-sht/',
	'/catalog/stroitelnye-materialy/stroitelstvo-sten-i-peregorodok/podvesy-soediniteli/28617/' => '/catalog/stroitelnye-materialy/stroitelstvo-sten-i-peregorodok/podvesy-soediniteli/tyaga-podvesa-500-mm/',
	'/catalog/1069' => '/',
	'/catalog/gruntovki/knauf' => '/catalog/otdelochnie-materialy/paneli-pvh',
	'/catalog/izolyacionnye-materialy' => '/',
	'/catalog/search' => '/',
	'/catalog/stroitelnye-materialy/izdeliya' => '/',
	'/href=' => '/catalog/krepezh-furnitura/gruzovoj-krepezh/tsepi/',
	'/kontacty.html' => '/',
	'/product/svfs-samorez-shsgd-38h35-200sht-mk' => '/',
	'/catalog/tovary-dlya-doma-i-sada/inventar/shvabry-metly-sovki/13219/' => '/catalog/tovary-dlya-doma-i-sada/inventar/shvabry-metly-sovki/shvabra-shchetka-6-i-ryadnaya/',
	'/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-krovelnye/24888/' => '/catalog/krepezh-furnitura/shurupy-samorezy/samorezy-krovelnye/samorez-krovelnyy-zp-5-5x25-300-sht/',
	);
if (isset($redUrl[$_SERVER['REQUEST_URI']])) {
	header('Location: '.$redUrl[$_SERVER['REQUEST_URI']], true, 301);
	die();
}