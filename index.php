<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use App\Controllers\App;

require_once 'vendor/autoload.php';
require 'Connection.php';

App::init();




// if (class_exists('Protocolos')) {
//   $p = Protocolos::find('all',array('conditions'=>'id < 10'));
// 	foreach ($p as &$key) {
// 		$key = $key->to_array();
// 	}
// 	echo(json_encode($p));
  // foreach ($p as $key) {
	// 	echo "<pre>";
  // 	print_r($key->to_json());
  // }
// }
