<?php

class Controller_Item extends Controller_Template
{

	public function action_index()
	{
		$this->template->title = 'Item &raquo; Index';
		$this->template->content = View::forge('item/index');
	}

	public function action_view()
	{
		$this->template->title = 'Item &raquo; View';
		$this->template->content = View::forge('item/view');
	}

}
