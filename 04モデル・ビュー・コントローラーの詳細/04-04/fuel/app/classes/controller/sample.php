<?php
class Controller_Sample extends Controller {
	public function action_index() {
		return View::forge('sample/index');
	}
}
