<?php
$redUrl = array (
	'' => '',
	);
if (isset($redUrl[$_SERVER['REQUEST_URI']])) {
	header('Location: '.$redUrl[$_SERVER['REQUEST_URI']], true, 301);
	die();
}