<?php
	$export = function(){
		$users = \App\Model\Users::find('all');
		if($users){
			foreach ($users as &$value) {
				$value = $value->to_array();
			}
			return $users;
		}else{
			return ['error'=>'theres is no users'];
		}
	};
