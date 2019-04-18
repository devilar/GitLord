<?php

if (!defined('IS_SYSTEM')) exit();

include_once DIR_FPATH.'patterns/home/collages.php';
include_once DIR_FPATH.'patterns/home/collections.php';
include_once DIR_FPATH.'patterns/home/novelties.php';

$body_page_class = "home-page";

?>

<div class="PageText">

<?php

	$row = ${CPAGE}->getInfo();
	echo cStr::replace('="public/', '="/'.DIR_RPATH.'public/', $row['text_value']);

?>
</div>
