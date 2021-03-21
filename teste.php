<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

	$METHOD = $_SERVER['REQUEST_METHOD'];
  if($METHOD === 'POST'){
		$json = file_get_contents('php://input');
		$data = json_decode($json, true); // it makes an associative array

		ActiveRecord\Config::initialize(function($cfg)
		{
		   //$cfg->set_model_directory('/model');
		   $cfg->set_connections(
		     array(
		       'development' => 'mysql://root:admin@localhost/belacruz_spu;charset=utf8'
		     )
		   );
		});

		User::create($data);
		echo "ok";

	}else if($METHOD){
		echo "sai daqi";
	}
