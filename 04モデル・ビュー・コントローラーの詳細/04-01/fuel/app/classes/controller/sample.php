<?php
class Controller_Sample extends Controller {
	public function action_index() {
		$view = View::forge('sample/index');
		$view->set('name', 'たにぐち');
		return $view;
	}
}
