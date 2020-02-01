<?php
class Controller_Shop extends Controller {
	public function action_index() {
		$data['rows'] = Model_Item::find_one_by('item_name', 'バナナ', '=');
		
		return View::forge('shop/index', $data);
	}
	
	public function action_save() {
		$item = Model_Item::forge();
		
		$data = array();
		$data['item_name'] = 'みかん';
		$data['price'] = 90;
		
		$item->set($data);
		$item->save();
	}
	
	public function action_delete() {
		$item = Model_Item::find_by_pk(4);
		$item->delete();
	}
	
	public function action_update() {
		$item = Model_Item::find_by_pk(1);
		$item['price'] = 12345;
		$item->save();
	}
}
