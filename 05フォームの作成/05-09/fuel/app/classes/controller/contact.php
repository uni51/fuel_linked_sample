<?php
class Controller_Contact extends Controller_Template {
	public function action_index() {
		$val = Validation::forge();
		
		$val->add('myname', 'お名前')
			->add_rule('required');
		$val->add('email', 'メールアドレス')
			->add_rule('required')
			->add_rule('valid_email');
		
		if (Input::post('submit')) {
			if ($val->run() && Security::check_token()) {
				Session::set_flash('myname', Input::post('myname'));
				Session::set_flash('email', Input::post('email'));
				Session::set_flash('gender', Input::post('gender'));
				Response::redirect('contact/check');
			}
		}
		
		$this->template->title = 'お問い合わせ';
		$data = array();
		$data['val'] = $val;
		$this->template->content = View::forge('contact/index', $data);
	}
	
	public function action_check() {
		$this->template->title = 'お問い合わせ：確認';
		
		if (Session::get_flash('myname') == '' || Session::get_flash('email') == '') {
			Response::redirect('contact/index');
		}
		
		$data = array();
		$data['myname'] = Session::get_flash('myname');
		$data['email'] = Session::get_flash('email');
		$data['gender'] = Session::get_flash('gender');
		Session::keep_flash();
		
		$this->template->content = View::forge('contact/check', $data);
	}
	
	public function action_thanks() {
		// メールを送信する
		$email = Email::forge();
		$email->from('master@example.com');
		$email->to('master@example.com');
		$email->subject('お問い合わせが到着しました');
		
		$data = array();
		$data['myname'] = Session::get_flash('myname');
		$data['email'] = Session::get_flash('email');
		$data['gender'] = Session::get_flash('gender');
		$body = View::forge('contact/email', $data);
		
		$email->body(mb_convert_encoding($body, 'jis'));
		$email->send();
				
		$this->template->title = 'お問い合わせ：完了';
		$this->template->content = View::forge('contact/thanks');
	}
}
