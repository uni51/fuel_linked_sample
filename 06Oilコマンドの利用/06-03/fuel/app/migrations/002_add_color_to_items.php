<?php

namespace Fuel\Migrations;

class Add_color_to_items
{
	public function up()
	{
		\DBUtil::add_fields('items', array(
			'color' => array('constraint' => 11, 'type' => 'int'),

		));	
	}

	public function down()
	{
		\DBUtil::drop_fields('items', array(
			'color'
    
		));
	}
}