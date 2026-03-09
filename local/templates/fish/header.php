<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
	<meta http-equiv="Content-Type" content="text/html; charset=<?echo LANG_CHARSET?>">
  <title><? $APPLICATION->ShowTitle(); ?></title>

	<!-- Font Awesome Icons -->
		<link href="<?=SITE_TEMPLATE_PATH?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700&selection.subset=cyrillic" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i&display=swap&subset=cyrillic' rel='stylesheet' type='text/css'>
	<!-- Plugin CSS -->
		<link href="<?=SITE_TEMPLATE_PATH?>/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
	<!-- Theme CSS - Includes Bootstrap -->
		<link href="<?=SITE_TEMPLATE_PATH?>/css/creative.min.css" rel="stylesheet">  
  <? $APPLICATION->ShowHead();  ?>
</head>
	<? $APPLICATION->ShowPanel(); ?> 
<body id="page-top">

<?php
$redisConnection = \Bitrix\Main\Application::getConnection('custom.redis')->getResource();
// $redisConnection->setnx('foo', 'bar');

echo $redisConnection->get('foo');
$context = \Bitrix\Main\Application::getInstance()->getContext();
print_r($context->getRequest()->get("ttt"));



?>
<script>

	BX.ajax.runAction('vendor:example.Item.add', {
		data: {
			fields: {
				ID: 1,
				NAME: "test"
			} 
		}
	}).then(function (response) {
		console.log(response);
		/**
		{
			"status": "success", 
			"data": {
				"ID": 1,
				"NAME": "test"
			}, 
			"errors": []
		}
		**/			
	}, function (response) {
		//сюда будут приходить все ответы, у которых status !== 'success'
		console.log(response);
		/**
		{
			"status": "error", 
			"errors": [...]
		}
		**/				
	});
</script>