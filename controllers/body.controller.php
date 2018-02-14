<?php 

	class BodyController {
		static public function ctrShowComponents($item, $value){
			$table = 'route';
			$reply = BodyModels::mdlShowComponents($table, $item, $value);
			return $reply;
		}
	}