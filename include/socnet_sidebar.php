<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?$APPLICATION->IncludeComponent(
	"bitrix:eshop.socnet.links", 
	"bootstrap_v4", 
	array(
		"COMPONENT_TEMPLATE" => "bootstrap_v4",
		"FACEBOOK" => "",
		"VKONTAKTE" => "https://vk.com/bitrix_1c",
		"TWITTER" => "",
		"GOOGLE" => "https://plus.google.com/111119180387208976312/",
		"INSTAGRAM" => "https://instagram.com/1CBitrix/"
	),
	false,
	array(
		"HIDE_ICONS" => "N"
	)
);?>