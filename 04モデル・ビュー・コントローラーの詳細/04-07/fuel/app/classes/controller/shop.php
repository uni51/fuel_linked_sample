<?php
class Controller_Shop extends Controller {
	public function action_index() {
		$data['rows'] = Model_Item::find_by(1);
		
		return View::forge('shop/index', $data);
	}
}
