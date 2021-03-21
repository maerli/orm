<?php
	$export = function($email,$senha){
		$user = \App\Model\Users::first([
			'select'=>'id,nome,sobrenome,senha,status,orgao,email',
			'conditions'=>[ "email=?", $email]
		]);
		if($user){
			$user = $user->to_array();

			//verificar se usuario tem permissão de acessar o sitema
			if($user['status'] == 0){
				return ['message'=>'usuário sem permisão de acesso'];
			}

			if(password_verify($senha,$user['senha'])){

				//$this->request->setSession('pf','$2y$10$iKYTZKLUjXZRx0zriHwgZ.m8ke4zVRhFk6.yxpepmaXZ6xBa08IqW');
				$this->request->setSession('user',$user["nome"].' '.$user["sobrenome"]);
				$this->request->setSession('user',json_encode($user));
				return ['success'=>true, 'message'=>'entrando caralho!'];
			}else{
				return ['message'=>'email ou senha incorreto!'];
			}
		}else{
			return ['message'=>"email inexistente"];
		}
	};
