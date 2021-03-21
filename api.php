<?php
$export = function($router){
	$router->routes('/')->get(function($req,$res){
		$res->send("bem vindo a minha api kkk");
	})->post(function($req, $res){
		$res->send('area you crase');
	});

	$router->post('/create',function($req,$res){

		[
			'origem'=>$origem,
			'assunto'=>$assunto,
			'observacao'=>$observacao,
			'autores'=>$autores,
			'interessado'=> $interessado,
			'cpf'=> $cpf,
			'destino'=> $destino,
			'email'=>$email,
			'status'=>$status

		] = $req->body;

		$p = \App\Model\Index::first();

		switch($status){
		case 1:
			$int = \App\Model\Interessados::first(['conditions'=>[ 'nome = ?',$interessado]]);
			if($int){

			}else{
				$int = \App\Model\interessados::create([
					'nome'=>$interessado,
					'email'=>$email
				]);
			}

		$protocolo = [
			'proto_primeira'=>sprintf("%05d", $p->id),
			'proto_segunda'=>'0001',
			'proto_ano'=>intval( date('Y') ),
			'origem'=>$origem,
			'assunto'=>$assunto,
			'observacao'=>$observacao,
			'autores'=>$autores,
			'interessado'=>$int->id,
			'cpf'=>$cpf,
			'data'=> date('Y-m-d H:i:s'),
			'status'=>$status,
			'destino'=>$destino,
			'proto_referencia'=>''
		];

		if( \App\Model\Protocolos::create($protocolo) ){
			$p = $p->update_all(['set'=>['id'=>$p->id+1]]);
			$res->json($protocolo);
		}else{
			
		}
		break;
		case 2:
		// edit case
		break;
	}
	});
	/// adding origens
	$router->post('/origens',function($req,$res){
		/// it expects {nome:string}
		$origens = \App\Model\Origens::create($req->body);
		$res->json($origens->to_array());
	});

	$router->post('/assuntos', function($req,$res){
		$assuntos = \App\Model\Assuntos::create($req->body);
		$res->json($assuntos->to_array());
	});










};
