<?php
class Controller_Sample extends Controller {
	public function action_index() {
		$view = View::forge('sample/index');
		$view->set('html', '<p>段落です</p>', false);
		$view->set('danger', '<script></script>');
		
		return $view;
	}
}
