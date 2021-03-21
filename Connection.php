<?php
ActiveRecord\Config::initialize(function($cfg)
{
	 //$cfg->set_model_directory('/model');
	 $cfg->set_connections(
		 array(
			 'development' => 'mysql://root:admin@localhost/belacruz_spu;charset=utf8'
		 )
	 );
});
ActiveRecord\Connection::$datetime_format = 'Y-m-d H:i:s';
