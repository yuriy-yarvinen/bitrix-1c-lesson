<?php
namespace Vendor\Example\Controller;
use \Bitrix\Main\Error;
class Item extends \Bitrix\Main\Engine\Controller
{
	public function addAction(array $fields):? array
	{
		$item = Item::add($fields);
		if (!$item)
		{
			$this->addError(new Error('Could not create item.', {код_ошибки}));
			return null;
		}
		return $item->toArray();
	}
	public function viewAction($id):? array
	{
		$item = Item::getById($id);
		if (!$item)
		{
			$this->addError(new Error('Could not find item.', {код_ошибки}));
					
			return null;
		} 
		return $item->toArray();
	}
}