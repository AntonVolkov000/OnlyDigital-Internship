<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="<?= SITE_TEMPLATE_PATH ?>/build/images/favicon.604825ed.ico" type="image/x-icon">
	<link href="<?= SITE_TEMPLATE_PATH ?>/build/css/common.css" rel="stylesheet">
	<? $APPLICATION->ShowHead(); ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
