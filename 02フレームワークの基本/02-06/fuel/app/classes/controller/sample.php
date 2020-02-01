<?php
class Controller_Sample extends Controller {
	public function action_index() {
		$user = new Model_User();
		
		print($user->get_name());
	}
}
