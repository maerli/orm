<?php
$export = function($req,$res){
	if($_FILES['file']){
		$tmp = $_FILES['file']['tmp_name'];
		$filename = $_FILES['file']['name'];
		$size = $_FILES['file']['size'];
		$type = $_FILES['file']['type'];
		$error = $_FILES['file']['error'];
		$size = $_FILES['file']['size']; // this is in bytes
		// 1 byte = 8bits
		// 1 kb 1024 bytes
		// 1 mb 1024 kb
		// 1 gb 1024 mb

		if($size < 2 * 1000 * 1000){ // alow files less than 2 mb
			move_uploaded_file($tmp, 'uploads/'.$filename);
			echo $size;
		}else{
			echo $size;
		}
		if($error){
			echo $error;
		}
	}else{
		$res->send('no file');
	}
};
