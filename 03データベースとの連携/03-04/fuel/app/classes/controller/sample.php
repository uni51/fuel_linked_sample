<?php
class Controller_Sample extends Controller {
	public function action_index() {
		$rows = DB::query('SELECT * FROM items')->execute();
		
		foreach($rows as $row):
			print($row['item_name'] . '/' . $row['price'] . "\n");
		endforeach;		
	}
}
